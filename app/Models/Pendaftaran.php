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
        'id_agen',
        'image',
    ];
}