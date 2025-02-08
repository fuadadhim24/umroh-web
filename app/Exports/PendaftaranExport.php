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

class PendaftaranExport implements FromCollection, WithHeadings, WithStyles, WithColumnWidths
{
    public function collection()
    {
        return Pendaftaran::select(
            'full_name',
            'phone_number',
            'date_of_birth',
            'national_id_number',
            'marital_status',
            'occupation',
            'father_name',
            'address',
            'province',
            'city_regency',
            'district',
            'sub_district_village',
            'email',
            'passport_status',
            'meningitis_vaccine_status',
            'name_as_per_passport',
            'notes',
            'source_of_information',
            'image'
        )->get();
    }

    public function headings(): array
    {
        return [
            'Nama Lengkap',
            'Nomor Telepon',
            'Tanggal Lahir',
            'Nomor KTP',
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
            'Catatan',
            'Sumber Informasi',
            'Foto',
        ];
    }


    // Adding styles to headers and columns
    public function styles(Worksheet $sheet): array
    {
        // Set border for the header row
        $sheet->getStyle('A1:T1')->applyFromArray([
            'borders' => [
                'top'    => ['borderStyle' => Border::BORDER_THIN],
                'bottom' => ['borderStyle' => Border::BORDER_THIN],
                'left'   => ['borderStyle' => Border::BORDER_THIN],
                'right'  => ['borderStyle' => Border::BORDER_THIN],
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_CENTER,
                'vertical' => Alignment::VERTICAL_CENTER,
            ],
            'font' => [
                'bold' => true,
                'size' => 12,
            ]
        ]);

        // Set borders for the body rows and apply top and left margins
        $sheet->getStyle('A2:T' . ($sheet->getHighestRow()))->applyFromArray([
            'borders' => [
                'top'    => ['borderStyle' => Border::BORDER_THIN],
                'left'   => ['borderStyle' => Border::BORDER_THIN],
            ],
            'alignment' => [
                'horizontal' => Alignment::HORIZONTAL_LEFT,
                'vertical' => Alignment::VERTICAL_TOP,
            ],
        ]);

        return [];
    }

    // Set column widths for better visibility and margin
    public function columnWidths(): array
    {
        return [
            'A' => 20,
            'B' => 15,
            'C' => 15,
            'D' => 20,
            'E' => 15,
            'F' => 20,
            'G' => 20,
            'H' => 30,
            'I' => 15,
            'J' => 20,
            'K' => 20,
            'L' => 25,
            'M' => 20,
            'N' => 20,
            'O' => 20,
            'P' => 15,
            'Q' => 15,
            'R' => 30,
            'S' => 20,
            'T' => 15,
        ];
    }
}
