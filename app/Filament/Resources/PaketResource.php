<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaketResource\Pages;
use App\Filament\Resources\PaketResource\RelationManagers;
use App\Models\Paket;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PaketResource extends Resource
{
    protected static ?string $model = Paket::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Umroh';
    protected static ?string $pluralLabel = 'Umroh';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')->label('Judul')->required(),
            Forms\Components\FileUpload::make('image')->multiple()->disk('public')->directory('images/umroh')->preserveFilenames()->visibility('public')->label('Gambar')->helperText('Ukuran file maksimal 2MB')->required(),
            Forms\Components\Toggle::make('visibility')->label('Ditampilkan'),
            Forms\Components\Textarea::make('short_description')->label('Deskripsi Pendek')->required(),
            Forms\Components\Repeater::make('advantages')
                ->label('Keunggulan')
                ->schema([Forms\Components\TextInput::make('advantage')->required()])
                ->required(),
            Forms\Components\Repeater::make('facilities')
                ->label('Fasilitas')
                ->schema([Forms\Components\TextInput::make('facility')->required()])
                ->required(),
            Forms\Components\Repeater::make('additional_services')
                ->label('Akomodasi Hotel')
                ->schema([Forms\Components\TextInput::make('service')->required()])
                ->required(),
            Forms\Components\Repeater::make('bonuses')
                ->label('Gratis')
                ->schema([Forms\Components\TextInput::make('bonus')->required()])
                ->required(),
            Forms\Components\Repeater::make('exclusions')
                ->label('Tidak Termasuk')
                ->schema([Forms\Components\TextInput::make('exclusion')->required()])
                ->required(),
            Forms\Components\TextInput::make('price')->label('Harga')->numeric()->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([Tables\Columns\TextColumn::make('title')->label('Judul')->sortable()->searchable(), Tables\Columns\TextColumn::make('short_description')->label('Deskripsi Singkat')->sortable()->searchable(), Tables\Columns\TextColumn::make('price')->formatStateUsing(fn($state) => 'Rp ' . number_format($state, 0, ',', '.'))->label('Harga')->sortable(), 
            // Tables\Columns\ImageColumn::make('image')->label('Gambar')->disk('public')->url(fn($record) => asset('storage/' . $record->image)),
             Tables\Columns\BooleanColumn::make('visibility')->searchable()->label('Ditampilkan'), Tables\Columns\TextColumn::make('updated_at')->label('Terakhir Diperbarui')])
            ->filters([
                Tables\Filters\SelectFilter::make('visibility')->options([
                    true => 'Visible',
                    false => 'Not Visible',
                ]),
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getRelations(): array
    {
        return [
                //
            ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPakets::route('/'),
            'create' => Pages\CreatePaket::route('/create'),
            'edit' => Pages\EditPaket::route('/{record}/edit'),
        ];
    }
}
