<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BadalResource\Pages;
use App\Filament\Resources\BadalResource\RelationManagers;
use App\Models\Badal;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BadalResource extends Resource
{
    protected static ?string $model = Badal::class;

    protected static ?string $navigationIcon = 'heroicon-o-queue-list';
    protected static ?string $navigationLabel = 'Badal';
    protected static ?string $pluralLabel = 'Badal';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                ->label('Judul')
                ->required()
                ,
                TextInput::make('subtitle')
                ->label('Deskripsi Singkat')
                ->required()
                ,
                TextInput::make('harga_paket')
                ->label('Harga Paket')
                ->required()
                ->numeric(),
                Repeater::make('facilities')
                ->label('Daftar Fasilitas')
                ->schema([Forms\Components\TextInput::make('facilities_item')->label('Item Fasilitas')->required()])
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Judul'),
                TextColumn::make('subtitle')->label('Deskripsi Singkat'),
                TextColumn::make('harga_paket')->label('Harga Paket')
                ->formatStateUsing(fn ($state) => 'Rp ' . number_format($state, 0, ',', '.'))
                ,
                TextColumn::make('updated_at')->label('Terakhir Diperbarui'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListBadals::route('/'),
            'create' => Pages\CreateBadal::route('/create'),
            'edit' => Pages\EditBadal::route('/{record}/edit'),
        ];
    }
}
