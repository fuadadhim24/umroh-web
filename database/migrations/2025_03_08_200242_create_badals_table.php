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
        Schema::create('badals', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->json('image');
            $table->string('subtitle');
            $table->bigInteger('harga_paket');
            $table->json('facilities');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('badals');
    }
};
