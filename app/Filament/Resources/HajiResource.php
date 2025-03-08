<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HajiResource\Pages;
use App\Filament\Resources\HajiResource\RelationManagers;
use App\Models\Haji;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HajiResource extends Resource
{
    protected static ?string $model = Haji::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Haji';

    protected static ?string $pluralLabel = 'Haji';

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required(),
                Forms\Components\TextInput::make('subtitle')
                    ->required(),
                Forms\Components\Repeater::make('keunggulan')
                    ->schema([
                        Forms\Components\TextInput::make('keunggulan_item')
                            ->required(),
                    ])
                    ->required(),
                Forms\Components\TextInput::make('harga_paket')
                    ->required(),
                Forms\Components\Repeater::make('tidak_termasuk')
                    ->schema([
                        Forms\Components\TextInput::make('tidak_termasuk_item')
                            ->required(),
                    ])
                    ->required(),
                Forms\Components\Repeater::make('akomodasi')
                    ->schema([
                        Forms\Components\TextInput::make('akomodasi_item')
                            ->required(),
                    ])
                    ->required(),
                Forms\Components\Repeater::make('gratis')
                    ->schema([
                        Forms\Components\TextInput::make('gratis_item')
                            ->required(),
                    ])
                    ->required(),
            ]);
    }

    

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            // Tambahkan kolom yang ingin ditampilkan di tabel
            Tables\Columns\TextColumn::make('title'),
            Tables\Columns\TextColumn::make('subtitle'),
            Tables\Columns\TextColumn::make('harga_paket'),
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
            'index' => Pages\ListHajis::route('/'),
            'create' => Pages\CreateHaji::route('/create'),
            'edit' => Pages\EditHaji::route('/{record}/edit'),
        ];
    }
}
