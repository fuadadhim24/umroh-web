<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PendaftaranResource\Pages;
use App\Models\Pendaftaran;
use Filament\Forms;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PendaftaranExport;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Select;
use Carbon\Carbon;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paket;

class PendaftaranResource extends Resource
{
    protected static ?string $model = Pendaftaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Pendaftaran';
    protected static ?string $pluralLabel = 'Pendaftaran';

    public static function form(Form $form): Form
    {
        return $form->schema([
            // Forms\Components\TextInput::make('member_id')
            //     ->label('Member ID')
            //     // ->disabled()
            //     ->default(fn () => self::generateMemberId())
            //     // ->hidden(),
            Hidden::make('member_id')->default(fn($get) => self::generateMemberId($get('agent_number'))),
            Forms\Components\TextInput::make('full_name')->label('Nama Lengkap')->required(),
            Forms\Components\TextInput::make('phone_number')->label('Nomor Telepon')->required(),
            Forms\Components\DatePicker::make('date_of_birth')->label('Tanggal Lahir')->required(),
            Forms\Components\TextInput::make('national_id_number')->label('Nomor KTP')->numeric()
            ->required(),
            Forms\Components\TextInput::make('family_id_number')->label('Nomor KK')->numeric()
            ->required(),
            Forms\Components\Select::make('gender')
                ->label('Jenis Kelamin')
                ->options([
                    'Laki-laki' => 'Laki-laki',
                    'Perempuan' => 'Perempuan',
                ])
                ->required(),
            Forms\Components\Select::make('marital_status')
                ->label('Status Pernikahan')
                ->options([
                    'Sudah Menikah' => 'Sudah Menikah',
                    'Belum Menikah' => 'Belum Menikah',
                ])
                ->required(),
            Forms\Components\TextInput::make('occupation')->label('Pekerjaan')->required(),
            Forms\Components\TextInput::make('father_name')->label('Nama Ayah')->required(),
            Forms\Components\TextInput::make('address')->label('Alamat')->required(),
            Forms\Components\TextInput::make('province')->label('Provinsi')->required(),
            Forms\Components\TextInput::make('city_regency')->label('Kota/Kabupaten')->required(),
            Forms\Components\TextInput::make('district')->label('Kecamatan')->required(),
            Forms\Components\TextInput::make('sub_district_village')->label('Kelurahan/Desa')->required(),
            Forms\Components\TextInput::make('email')->label('Email')->nullable()->email(),
            Forms\Components\Select::make('passport_status')
                ->label('Status Paspor')
                ->options([
                    '1' => 'Aktif',
                    '0' => 'Tidak Aktif',
                ])
                ->live()
                ->required(),
            Forms\Components\TextInput::make('nama_sesuai_paspor')->label('Nama Sesuai Paspor')->visible(fn($get) => $get('passport_status') === '1')->required(),
            Forms\Components\TextInput::make('nomor_paspor')->label('Nomor Paspor')->visible(fn($get) => $get('passport_status') === '1')->required(),
            Forms\Components\DatePicker::make('tanggal_issued_paspor')->label('Tanggal Terbit Paspor')->visible(fn($get) => $get('passport_status') === '1')->required(),
            Forms\Components\DatePicker::make('tanggal_expired')->label('Tanggal Expired Paspor')->visible(fn($get) => $get('passport_status') === '1')->required(),
            Forms\Components\Select::make('permintaan')
                ->label('Permintaan Paspor')
                ->visible(fn($get) => $get('passport_status') === '0')
                ->options([
                    'jasa el-aqsho' => 'Jasa El-Aqsho',
                    'urus sendiri' => 'Urus Sendiri',
                ])
                ->required(),

            Forms\Components\Toggle::make('meningitis_vaccine_status')->label('Status Vaksin Meningitis')->required(),
            Select::make('source_of_information')
                ->label('Sumber Informasi')
                ->options([
                    'facebook' => 'Facebook',
                    'instagram' => 'Instagram',
                    'tiktok' => 'Tiktok',
                    'brosur' => 'Brosur',
                    'google' => 'Google',
                    'agen' => 'Agen',
                    'keluarga' => 'Keluarga',
                    'teman' => 'Teman',
                ])
                ->searchable()
                ->live()
                ->required(),
                Forms\Components\TextInput::make('agent_number')
                ->label('Nomor Agen')
                ->visible(fn($get) => $get('source_of_information') === 'agen')
                ->live() // Menandakan bahwa ini adalah input live
                ->required()
                ->afterStateUpdated(function ($state, callable $set) {
                    // Update member_id secara langsung ketika agent_number diubah
                    $set('member_id', self::generateMemberId($state));
                }),
            Forms\Components\FileUpload::make('image')->label('Foto Pendaftar')->required()->disk('public')->directory('images/artikel')->helperText('Ukuran file maksimal 2MB')->preserveFilenames()->visibility('public'),

            Select::make('id_paket')
                ->label('Pilih Paket')
                ->options(Paket::all()->pluck('title', 'id')->prepend('Tidak Memilih', null))
                ->searchable()
                // ->required()
                ->placeholder('Pilih Paket'),
            Forms\Components\Textarea::make('notes')->label('Catatan')->nullable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('member_id')->label('ID Member')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('full_name')->label('Nama Lengkap')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('paket.title')->label('Paket')->default('Tidak Memilih')->sortable(),
                Tables\Columns\TextColumn::make('created_at')->label('Terdaftar Pada')->dateTime(),
                Tables\Columns\TextColumn::make('phone_number')->label('Nomor Telepon')->sortable(),
                Tables\Columns\TextColumn::make('date_of_birth')->label('Tanggal Lahir')->date(),
                Tables\Columns\TextColumn::make('national_id_number')->label('Nomor KTP'),
                Tables\Columns\TextColumn::make('family_id_number')->label('Nomor KK')->sortable(),
                Tables\Columns\TextColumn::make('gender')->label('Jenis Kelamin')->sortable(),
                Tables\Columns\TextColumn::make('marital_status')->label('Status Pernikahan')->sortable(),
                Tables\Columns\TextColumn::make('occupation')->label('Pekerjaan')->sortable(),
                Tables\Columns\TextColumn::make('father_name')->label('Nama Ayah')->sortable(),
                Tables\Columns\TextColumn::make('address')->label('Alamat')->sortable(),
                Tables\Columns\TextColumn::make('province')->label('Provinsi')->sortable(),
                Tables\Columns\TextColumn::make('city_regency')->label('Kota/Kabupaten')->sortable(),
                Tables\Columns\TextColumn::make('district')->label('Kecamatan')->sortable(),
                Tables\Columns\TextColumn::make('sub_district_village')->label('Kelurahan/Desa')->sortable(),
                Tables\Columns\TextColumn::make('email')->label('Email'),
                Tables\Columns\BooleanColumn::make('passport_status')->label('Status Paspor')->sortable(),
                Tables\Columns\TextColumn::make('nama_sesuai_paspor')->default('-')->label('Nama Sesuai Paspor'),
                Tables\Columns\TextColumn::make('nomor_paspor')->default('-')->label('Nomor Paspor'),
                Tables\Columns\TextColumn::make('tanggal_issued_paspor')
                    ->label('Tanggal Terbit Paspor')
                    ->date() // ->default('-')
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_expired')
                    ->label('Tanggal Expired Paspor')
                    ->date() // ->default('-')
                    ->sortable(),
                Tables\Columns\TextColumn::make('permintaan')->label('Permintaan Paspor')->default('-')->sortable(),
                Tables\Columns\BooleanColumn::make('meningitis_vaccine_status')->label('Status Vaksin Meningitis')->sortable(),
                Tables\Columns\TextColumn::make('source_of_information')->label('Sumber Informasi')->sortable(),
                Tables\Columns\TextColumn::make('agent_number')->label('Nomor Agen')->sortable(),
                Tables\Columns\ImageColumn::make('image')->label('Gambar'),
            ])
            ->filters([
                //
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()->label('Hapus Massal')])])
            ->headerActions([
                Action::make('Export ke Excel')
                    ->icon('heroicon-o-document')
                    // ->action(fn (array $data) => Excel::download(new PendaftaranExport('tanggal', '2025-02-20', null, null), 'pendaftaran.xlsx'))
                    // ->action(fn (array $data) => Excel::download(new PendaftaranExport('tahun', null, null, 2025), 'pendaftaran.xlsx'))
                    // ->action(fn (array $data) => Excel::download(new PendaftaranExport('bulan', null, 2, 2025), 'pendaftaran.xlsx'))
                    // ->action(fn (array $data) => Excel::download(new PendaftaranExport('semua', null, null, null), 'pendaftaran.xlsx'))
                    ->form([
                        Forms\Components\Select::make('filter_by')
                            ->label('Pilih Berdasarkan')
                            ->options([
                                'tanggal' => 'Tanggal',
                                'bulan' => 'Bulan',
                                'tahun' => 'Tahun',
                                'semua' => 'Semua',
                            ])
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(function ($state, callable $set) {
                                // Reset fields based on selected filter
                                if ($state === 'tanggal') {
                                    $set('tanggal', null);
                                    $set('bulan', null);
                                    $set('tahun', null);
                                } elseif ($state === 'bulan') {
                                    $set('tanggal', null);
                                    $set('tahun', null);
                                } elseif ($state === 'tahun') {
                                    $set('tanggal', null);
                                    $set('bulan', null);
                                } elseif ($state === 'semua') {
                                    $set('tanggal', null);
                                    $set('bulan', null);
                                    $set('tahun', null);
                                }
                            }),

                        Forms\Components\DatePicker::make('tanggal')->label('Pilih Tanggal')->hidden(fn($get) => $get('filter_by') !== 'tanggal'),

                        Forms\Components\Select::make('bulan')
                            ->label('Pilih Bulan')
                            ->options([
                                1 => 'Januari',
                                2 => 'Februari',
                                3 => 'Maret',
                                4 => 'April',
                                5 => 'Mei',
                                6 => 'Juni',
                                7 => 'Juli',
                                8 => 'Agustus',
                                9 => 'September',
                                10 => 'Oktober',
                                11 => 'November',
                                12 => 'Desember',
                            ])
                            ->hidden(fn($get) => $get('filter_by') !== 'bulan'),

                        Forms\Components\TextInput::make('tahun')->label('Pilih Tahun')->type('number')->hidden(fn($get) => $get('filter_by') !== 'tahun' && $get('filter_by') !== 'bulan')->required(),
                    ])
                    ->action(fn(array $data) => 
                    $data['filter_by'] === 'semua' 
                        ? Excel::download(new PendaftaranExport('semua', null, null, null), 'pendaftaran.xlsx') 
                        : ($data['filter_by'] === 'bulan' 
                            ? Excel::download(new PendaftaranExport('bulan', null, $data['bulan'], $data['tahun']), 'pendaftaran.xlsx') 
                            : ($data['filter_by'] === 'tahun' 
                                ? Excel::download(new PendaftaranExport('tahun', null, null, $data['tahun']), 'pendaftaran.xlsx') 
                                : Excel::download(new PendaftaranExport('tanggal', Carbon::parse($data['tanggal'])->format('Y-m-d'), null, null), 'pendaftaran.xlsx')
                            )
                        )
                    )
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

    public static function generateMemberId(?string $agent_number = null): string
    {
        $currentYear = Carbon::now()->format('y');
        $currentMonth = Carbon::now()->format('m');

        $lastMemberId = Pendaftaran::whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->orderBy('member_id', 'desc')
            ->value('member_id');

        $lastNumber = $lastMemberId ? (int) substr($lastMemberId, -3) : 0;

        $newNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);

        // dd($agent_number);
        if (empty($agent_number)) {
            return "A01-{$currentYear}{$currentMonth}{$newNumber}";
        } else {
            return "{$agent_number}-{$currentYear}{$currentMonth}{$newNumber}";
        }
    }
}
