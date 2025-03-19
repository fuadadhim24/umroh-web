<?php

namespace App\Exports;

use App\Models\Pendaftaran;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Sheet;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use App\Models\Paket;

class PendaftaranExport implements FromCollection, WithHeadings, WithStyles, WithColumnWidths
{
    protected $filterBy;
    protected $date;
    protected $month;
    protected $year;

    public function __construct($filterBy, $date = null, $month = null, $year = null)
    {
        $this->filterBy = $filterBy;
        $this->date = $date;
        $this->month = $month;
        $this->year = $year;
    }

    public function collection()
    {
        $query = Pendaftaran::query();

        // Apply filters based on the selected criteria
        if ($this->filterBy === 'tanggal' && $this->date) {
            $query->whereDate('created_at', $this->date);
        } elseif ($this->filterBy === 'bulan' && $this->month && $this->year) {
            $query->whereYear('created_at', $this->year)->whereMonth('created_at', $this->month);
        } elseif ($this->filterBy === 'tahun' && $this->year) {
            $query->whereYear('created_at', $this->year);
        }

        // $title_paket = Paket->paket_title = $pendaftaran->paket->title ?? null;
        // dd($query->with('paket')->get());
        return $query
            ->with('paket')
            ->get()
            ->map(function ($pendaftaran) {
                return [
                    'member_id' => $pendaftaran->member_id ?? '-',
                    'full_name' => $pendaftaran->full_name ?? '-',
                    'paket_title' => $pendaftaran->paket->title ?? '-',
                    'created_at' => $pendaftaran->created_at ?? '-',
                    'phone_number' => $pendaftaran->phone_number ?? '-',
                    'date_of_birth' => $pendaftaran->date_of_birth ?? '-',
                    'national_id_number' => $pendaftaran->national_id_number ?? '-',
                    'family_id_number' => $pendaftaran->family_id_number ?? '-',
                    'gender' => $pendaftaran->gender ?? '-',
                    'marital_status' => $pendaftaran->marital_status ?? '-',
                    'occupation' => $pendaftaran->occupation ?? '-',
                    'father_name' => $pendaftaran->father_name ?? '-',
                    'address' => $pendaftaran->address ?? '-',
                    'province' => $pendaftaran->province ?? '-',
                    'city_regency' => $pendaftaran->city_regency ?? '-',
                    'district' => $pendaftaran->district ?? '-',
                    'sub_district_village' => $pendaftaran->sub_district_village ?? '-',
                    'email' => $pendaftaran->email ?? '-',
                    'passport_status' => isset($pendaftaran->passport_status) ? ($pendaftaran->passport_status == '1' ? 'Aktif' : 'Tidak Aktif') : '-',
                    'meningitis_vaccine_status' => $pendaftaran->meningitis_vaccine_status ?? '-',
                    'nama_sesuai_paspor' => $pendaftaran->nama_sesuai_paspor ?? '-',
                    'nomor_paspor' => $pendaftaran->nomor_paspor ?? '-',
                    'tanggal_issued_paspor' => $pendaftaran->tanggal_issued_paspor ?? '-',
                    'tanggal_expired' => $pendaftaran->tanggal_expired ?? '-',
                    'permintaan' => $pendaftaran->permintaan ?? '-',
                    'source_of_information' => $pendaftaran->source_of_information ?? '-',
                    'agent_number' => $pendaftaran->agent_number ?? '-',
                ];
            });

        // return $query->with('paket')->select(
        //    'member_id',
        //     'full_name',
        //     'paket',
        //     'created_at',
        //     'phone_number',
        //     'date_of_birth',
        //     'national_id_number',
        //     'marital_status',
        //     'occupation',
        //     'father_name',
        //     'address',
        //     'province',
        //     'city_regency',
        //     'district',
        //     'sub_district_village',
        //     'email',
        //     'passport_status',
        //     'meningitis_vaccine_status',
        //     'nama_sesuai_paspor',
        //     'nomor_paspor',
        //     'tanggal_issued_paspor',
        //     'tanggal_expired',
        //     'permintaan',
        //     'source_of_information',
        //     'agent_number',
        // )->get();
    }

    public function headings(): array
    {
        return [
            'ID Member',
            'Nama Lengkap',
            'Nama Paket',
            'Terdaftar Pada',
            'Nomor Telepon',
            'Tanggal Lahir',
            'Nomor KTP',
            'Nomor KK',
            'Jenis Kelamin',
            'Status Pernikahan',
            'Pekerjaan',
            'Nama Ayah',
            'Alamat',
            'Provinsi',
            'Kota/Kabupaten',
            'Kecamatan',
            'Kelurahan/Desa',
            'Email',
            'Status Paspor',
            'Status Vaksin Meningitis',
            'Nama Sesuai Paspor',
            'Nomor Paspor',
            'Tanggal Terbit Paspor',
            'Tanggal Expired Paspor',
            'Permintaan Paspor',
            'Sumber Informasi',
            'Nomor Agen',
            // 'Foto',
        ];
    }

    // Adding styles to headers and columns
    public function styles(Worksheet $sheet): void
    {
        // Mengubah tipe pengembalian menjadi void
        // // Add title
        // $sheet->setCellValue('A1', 'Pendaftar El-Aqsho');
        // $sheet->mergeCells('A1:T1'); // Merge across the columns
        // $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(16);
        // $sheet->getStyle('A1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

        // $filterText = 'Filter berdasarkan: ' . $this->filterBy;
        //     $sheet->setCellValue('A2', $filterText);
        //     $sheet->mergeCells('A2:T2'); // Merge across the columns
        //     $sheet->getStyle('A2')->getFont()->setSize(12);
        //     $sheet->getStyle('A2')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

        //     // Set header row (now in row 4)
        $sheet->getStyle('A1:AA1')->applyFromArray([
            'borders' => [
                'top' => ['borderStyle' => Border::BORDER_THIN],
                'bottom' => ['borderStyle' => Border::BORDER_THIN],
                'left' => ['borderStyle' => Border::BORDER_THIN],
                'right' => ['borderStyle' => Border::BORDER_THIN],
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
                'vertical' => Alignment::VERTICAL_CENTER,
            ],
            'font' => [
                'bold' => true,
                'size' => 12,
            ],
        ]);

        // Set borders for the body rows
        $highestRow = $sheet->getHighestRow();
        if ($highestRow >= 5) {
            // Ensure there is data below the header
            $sheet->getStyle('A5:AA' . $highestRow)->applyFromArray([
                'borders' => [
                    'top' => ['borderStyle' => Border::BORDER_THIN],
                    'left' => ['borderStyle' => Border::BORDER_THIN],
                ],
                'alignment' => [
                    'horizontal' => Alignment::HORIZONTAL_LEFT,
                    'vertical' => Alignment::VERTICAL_TOP,
                ],
            ]);
        }
    }

    // Set column widths for better visibility and margin
    public function columnWidths(): array
    {
        return [
            'A' => 20,
            'B' => 20,
            'C' => 20,
            'D' => 15,
            'E' => 15,
            'F' => 20,
            'G' => 20,
            'H' => 30,
            'I' => 25,
            'J' => 20,
            'K' => 20,
            'L' => 25,
            'M' => 20,
            'N' => 20,
            'O' => 20,
            'P' => 20,
            'Q' => 20,
            'R' => 30,
            'S' => 20,
            'T' => 20,
            'U' => 20,
            'V' => 20,
            'W' => 20,
            'X' => 20,
            'Y' => 20,
            'Z' => 20,
            'AA' => 20,
        ];
    }
}
