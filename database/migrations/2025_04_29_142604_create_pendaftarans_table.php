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
            // $table->string('member_id');
            $table->string('member_id')->unique();
            $table->string('full_name');
            $table->string('phone_number');
            $table->date('date_of_birth');
            $table->string('national_id_number');
            $table->string('family_id_number');
            $table->string('gender');
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
            $table->text('notes')->nullable();
            $table->string('source_of_information');
            $table->string('agent_number')->nullable();
            $table->string('image')->nullable();

            $table->string('nama_sesuai_paspor')->nullable();
            $table->string('nomor_paspor')->nullable();
            $table->date('tanggal_issued_paspor')->nullable();
            $table->date('tanggal_expired')->nullable();
            $table->string('permintaan')->nullable();

            $table->unsignedBigInteger('id_paket')->nullable();
            $table->foreign('id_paket')->references('id')->on('pakets')->onDelete('set null');

            $table->unsignedBigInteger('id_haji')->nullable();
            $table->foreign('id_haji')->references('id')->on('hajis')->onDelete('set null');

            $table->unsignedBigInteger('id_badal')->nullable();
            $table->foreign('id_badal')->references('id')->on('badals')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pendaftarans', function (Blueprint $table) {
            $table->dropForeign(['id_paket']);
            $table->dropColumn('id_paket');

            $table->dropForeign(['id_haji']);
            $table->dropColumn('id_haji');

            $table->dropForeign(['id_badal']);
            $table->dropColumn('id_badal');
        });
    }
};
