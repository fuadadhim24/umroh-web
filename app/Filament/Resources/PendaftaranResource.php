<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PendaftaranResource\Pages;
use App\Filament\Resources\PendaftaranResource\RelationManagers;
use App\Models\Pendaftaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PendaftaranResource extends Resource
{
    protected static ?string $model = Pendaftaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('full_name')->required(),
                Forms\Components\TextInput::make('phone_number')->required(),
                Forms\Components\DatePicker::make('date_of_birth')->required(),
                Forms\Components\TextInput::make('national_id_number')->required(),
                Forms\Components\TextInput::make('marital_status')->required(),
                Forms\Components\TextInput::make('occupation')->required(),
                Forms\Components\TextInput::make('father_name')->required(),
                Forms\Components\TextInput::make('address')->required(),
                Forms\Components\TextInput::make('province')-> required(),
                Forms\Components\TextInput::make('city_regency')->required(),
                Forms\Components\TextInput::make('district')->required(),
                Forms\Components\TextInput::make('sub_district_village')->required(),
                Forms\Components\TextInput::make('email')->required()->email(),
                Forms\Components\Toggle::make('passport_status')->required(),
                Forms\Components\Toggle::make('meningitis_vaccine_status')->required(),
                Forms\Components\TextInput::make('name_as_per_passport')->required(),
                Forms\Components\Textarea::make('notes')->nullable(),
                Forms\Components\TextInput::make('source_of_information')->required(),
                Forms\Components\FileUpload::make('image')->nullable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(), 
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('full_name')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('phone_number')->sortable(),
            Tables\Columns\TextColumn::make('date_of_birth')->date(),
            Tables\Columns\TextColumn::make('national_id_number')->sortable(),
            Tables\Columns\TextColumn::make('marital_status')->sortable(),
            Tables\Columns\TextColumn::make('occupation')->sortable(),
            Tables\Columns\TextColumn::make('father_name')->sortable(),
            Tables\Columns\TextColumn::make('address')->sortable(),
            Tables\Columns\TextColumn::make('province')->sortable(),
            Tables\Columns\TextColumn::make('city_regency')->sortable(),
            Tables\Columns\TextColumn::make('district')->sortable(),
            Tables\Columns\TextColumn::make('sub_district_village')->sortable(),
            Tables\Columns\TextColumn::make('email')->sortable(),
            Tables\Columns\BooleanColumn::make('passport_status')->sortable(),
            Tables\Columns\BooleanColumn::make('meningitis_vaccine_status')->sortable(),
            Tables\Columns\TextColumn::make('name_as_per_passport')->sortable(),
            Tables\Columns\TextColumn::make('source_of_information')->sortable(),
            Tables\Columns\ImageColumn::make('image')->sortable(), // Display the image in the table
            Tables\Columns\TextColumn::make('created_at')->dateTime(),
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
            'index' => Pages\ListPendaftarans::route('/'),
            'create' => Pages\CreatePendaftaran::route('/create'),
            'edit' => Pages\EditPendaftaran::route('/{record}/edit'),
        ];
    }
}
