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
        Schema::create('kulikuler_penguruses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kulikuler_id');
            $table->unsignedBigInteger('santri_id');
            $table->string('devisi', 50);
            $table->string('description', 121);
            $table->timestamps();

            $table->foreign('santri_id')->references('id')->on('tholabas');
            $table->foreign('kulikuler_id')->references('id')->on('kulikulers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kulikuler_penguruses');
    }
};
