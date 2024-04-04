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
        Schema::create('aktivitas_santris', function (Blueprint $table) {
            $table->id();
            $table->string('kategori', 50);
            $table->string('hari', 20);
            $table->string('waktu', 25);
            $table->string('agenda', 50);
            $table->string('picture');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aktivitas_santris');
    }
};
