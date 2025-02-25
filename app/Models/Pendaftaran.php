<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'member_id',
        'full_name',
        'phone_number',
        'date_of_birth',
        'national_id_number',
        'family_id_number',
        'gender',
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
        'nama_sesuai_paspor',
        'nomor_paspor',
        'tanggal_issued_paspor',
        'tanggal_expired',
        'permintaan',
        'notes',
        'source_of_information',
        'agent_number',
        'image',
        'id_paket', 
    ];

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'id_paket');
    }
}