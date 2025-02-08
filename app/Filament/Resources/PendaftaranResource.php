<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PendaftaranResource\Pages;
use App\Models\Pendaftaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PendaftaranExport;
use Filament\Tables\Actions\Action;

class PendaftaranResource extends Resource
{
    protected static ?string $model = Pendaftaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('full_name')
                ->label('Nama Lengkap')
                ->required(),
            Forms\Components\TextInput::make('phone_number')
                ->label('Nomor Telepon')
                ->required(),
            Forms\Components\DatePicker::make('date_of_birth')
                ->label('Tanggal Lahir')
                ->required(),
            Forms\Components\TextInput::make('national_id_number')
                ->label('Nomor KTP')
                ->required(),
            Forms\Components\TextInput::make('marital_status')
                ->label('Status Pernikahan')
                ->required(),
            Forms\Components\TextInput::make('occupation')
                ->label('Pekerjaan')
                ->required(),
            Forms\Components\TextInput::make('father_name')
                ->label('Nama Ayah')
                ->required(),
            Forms\Components\TextInput::make('address')
                ->label('Alamat')
                ->required(),
            Forms\Components\TextInput::make('province')
                ->label('Provinsi')
                ->required(),
            Forms\Components\TextInput::make('city_regency')
                ->label('Kota/Kabupaten')
                ->required(),
            Forms\Components\TextInput::make('district')
                ->label('Kecamatan')
                ->required(),
            Forms\Components\TextInput::make('sub_district_village')
                ->label('Kelurahan/Desa')
                ->required(),
            Forms\Components\TextInput::make('email')
                ->label('Email')
                ->required()
                ->email(),
                Forms\Components\Select::make('passport_status')
                ->label('Status Paspor')
                ->options([
                    '1' => 'Aktif',  
                    '0' => 'Tidak Aktif', 
                ])
                ->required(),
            Forms\Components\Toggle::make('meningitis_vaccine_status')
                ->label('Status Vaksin Meningitis')
                ->required(),
            Forms\Components\TextInput::make('name_as_per_passport')
                ->label('Nama Sesuai Paspor')
                ->required(),
            Forms\Components\Textarea::make('notes')
                ->label('Catatan')
                ->nullable(),
            Forms\Components\TextInput::make('source_of_information')
                ->label('Sumber Informasi')
                ->required(),
            Forms\Components\FileUpload::make('image')
                ->label('Foto')
                ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                    ->label('Nama Lengkap')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone_number')
                    ->label('Nomor Telepon')
                    ->sortable(),
                Tables\Columns\TextColumn::make('date_of_birth')
                    ->label('Tanggal Lahir')
                    ->date(),
                Tables\Columns\TextColumn::make('national_id_number')
                    ->label('Nomor KTP')
                    ->sortable(),
                Tables\Columns\TextColumn::make('marital_status')
                    ->label('Status Pernikahan')
                    ->sortable(),
                Tables\Columns\TextColumn::make('occupation')
                    ->label('Pekerjaan')
                    ->sortable(),
                Tables\Columns\TextColumn::make('father_name')
                    ->label('Nama Ayah')
                    ->sortable(),
                Tables\Columns\TextColumn::make('address')
                    ->label('Alamat')
                    ->sortable(),
                Tables\Columns\TextColumn::make('province')
                    ->label('Provinsi')
                    ->sortable(),
                Tables\Columns\TextColumn::make('city_regency')
                    ->label('Kota/Kabupaten')
                    ->sortable(),
                Tables\Columns\TextColumn::make('district')
                    ->label('Kecamatan')
                    ->sortable(),
                Tables\Columns\TextColumn::make('sub_district_village')
                    ->label('Kelurahan/Desa')
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->sortable(),
                Tables\Columns\BooleanColumn::make('passport_status')
                    ->label('Status Paspor')
                    ->sortable(),
                Tables\Columns\BooleanColumn::make('meningitis_vaccine_status')
                    ->label('Status Vaksin Meningitis')
                    ->sortable(),
                Tables\Columns\TextColumn::make('name_as_per_passport')
                    ->label('Nama Sesuai Paspor')
                    ->sortable(),
                Tables\Columns\TextColumn::make('source_of_information')
                    ->label('Sumber Informasi')
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Foto')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->label('Hapus Massal'),
                ]),
            ])
            ->headerActions([ 
                Action::make('Export to Excel')
                    ->icon('heroicon-o-document')  
                    ->action(fn () => Excel::download(new PendaftaranExport, 'pendaftaran.xlsx')) 
                    ->color('primary'),
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
            'create' => Pages\CreatePendaftaran::route('/buat'),
            'edit' => Pages\EditPendaftaran::route('/{record}/ubah'),
        ];
    }
}
