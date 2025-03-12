<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtikelResource\Pages;
use App\Models\Artikel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ArtikelResource extends Resource
{
    protected static ?string $model = Artikel::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Artikel';
    protected static ?string $pluralLabel = 'Artikel';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('short_description')
                    ->label('Deskripsi Singkat')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->label('Gambar')
                    ->required()
                    ->disk('public') 
                    ->directory('images/artikel')
                    ->helperText('Ukuran file maksimal 2MB')
                    ->preserveFilenames()
                    ->visibility('public'),
                Forms\Components\Textarea::make('content')
                    ->label('Konten')
                    ->required(),
                Forms\Components\TextInput::make('category')
                    ->label('Kategori')
                    ->datalist([
                        'Edukasi',
                        'Perjalanan Terbaru',
                        'Fakta Unik',
                        'Kabar Terbaru',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Judul')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('short_description')->label('Deskripsi Singkat')->searchable(),
                Tables\Columns\ImageColumn::make('image')->label('Gambar')->disk('public')->url(fn ($record) => asset('storage/' . $record->image)),
                Tables\Columns\TextColumn::make('category')->label('Kategori')->searchable(),
                Tables\Columns\TextColumn::make('created_at')->label('Dibuat Pada')->dateTime(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            
            ->filters([
                Tables\Filters\SelectFilter::make('category')->options(Artikel::pluck('category', 'category')->unique()->toArray()),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArtikels::route('/'),
            'create' => Pages\CreateArtikel::route('/create'),
            'edit' => Pages\EditArtikel::route('/{record}/edit'),
        ];
    }
}