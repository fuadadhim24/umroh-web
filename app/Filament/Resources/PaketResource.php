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

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('title')
                ->required(),
            Forms\Components\FileUpload::make('image')
                    ->required(),
            Forms\Components\Toggle::make('visibility')
                ->required(),
            Forms\Components\Textarea::make('short_description')
                ->required(),
            Forms\Components\Repeater::make('advantages')
                ->schema([
                    Forms\Components\TextInput::make('advantage')
                        ->required(),
                ])
                ->required(),
            Forms\Components\Repeater::make('facilities')
                ->schema([
                    Forms\Components\TextInput::make('facility')
                        ->required(),
                ])
                ->required(),
            Forms\Components\Repeater::make('additional_services')
                ->schema([
                    Forms\Components\TextInput::make('service')
                        ->required(),
                ])
                ->required(),
            Forms\Components\Repeater::make('bonuses')
                ->schema([
                    Forms\Components\TextInput::make('bonus')
                        ->required(),
                ])
                ->required(),
            Forms\Components\Repeater::make('exclusions')
                ->schema([
                    Forms\Components\TextInput::make('exclusion')
                        ->required(),
                ])
                ->required(),
            Forms\Components\TextInput::make('price')
                ->numeric()
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('title')
                ->sortable()
                ->searchable(),
            Tables\Columns\TextColumn::make('short_description')
                ->sortable()
                ->searchable(),
            Tables\Columns\TextColumn::make('price')
                ->sortable(),
            Tables\Columns\BooleanColumn::make('visibility')
                ->label('Visible'),
        ])
        ->filters([
            Tables\Filters\SelectFilter::make('visibility')
                ->options([
                    true => 'Visible',
                    false => 'Not Visible',
                ]),
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
            'index' => Pages\ListPakets::route('/'),
            'create' => Pages\CreatePaket::route('/create'),
            'edit' => Pages\EditPaket::route('/{record}/edit'),
        ];
    }
}
