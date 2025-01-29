<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('phone_number');
            $table->date('date_of_birth');
            $table->string('national_id_number');
            $table->string('marital_status');
            $table->string('occupation');
            $table->string('father_name');
            $table->string('address');
            $table->string('province');
            $table->string('city_regency');
            $table->string('district');
            $table->string('sub_district_village');
            $table->string('email');
            $table->boolean('passport_status');
            $table->boolean('meningitis_vaccine_status');
            $table->string('name_as_per_passport');
            $table->text('notes')->nullable();
            $table->string('source_of_information');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
