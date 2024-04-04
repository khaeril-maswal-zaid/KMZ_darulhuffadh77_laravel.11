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
        Schema::create('profil_pimpinans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // 'KAYAKNYA CUMA SATU TABLE DENGAN ARTIKEL/ POST'
            //----------------------------------------------------
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_pimpinans');
    }
};
