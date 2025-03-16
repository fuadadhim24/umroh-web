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
        Schema::create('pakets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->json('image');
            $table->boolean('visibility');
            $table->string('short_description');
            $table->bigInteger('price');
            $table->json('advantages');
            $table->json('facilities');
            $table->json('additional_services');
            $table->json('bonuses');
            $table->json('exclusions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakets');
    }
};
