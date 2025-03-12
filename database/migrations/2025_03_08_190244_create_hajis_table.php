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
        Schema::create('hajis', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->boolean('visibility');
            $table->string('subtitle');
            $table->json('keunggulan');
            $table->json('facilities');
            $table->bigInteger('harga_paket');
            $table->json('tidak_termasuk');
            $table->json('akomodasi');
            $table->json('gratis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hajis');
    }
};
