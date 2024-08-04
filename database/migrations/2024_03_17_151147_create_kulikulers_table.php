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
        Schema::create('kulikulers', function (Blueprint $table) {
            $table->id();
            $table->string('enum');
            $table->string('name');
            $table->string('full_name');
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('kulikuler_personils', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kulikuler_id'); // Sekaligus sebagai kategori
            $table->unsignedBigInteger('santri_id');
            $table->string('devisi', 50);
            $table->string('description', 110);
            $table->timestamps();

            $table->foreign('kulikuler_id')->references('id')->on('kulikulers')->onDelete('cascade');
            $table->foreign('santri_id')->references('id')->on('tholabahs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kulikulers');
    }
};
