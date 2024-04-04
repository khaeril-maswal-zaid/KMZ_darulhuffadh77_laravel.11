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
        Schema::create('ikdhs', function (Blueprint $table) {
            $table->id();
            $table->string('cabang');
            $table->unsignedBigInteger('alumni_id');
            $table->timestamps();

            $table->foreign('alumni_id')->references('id')->on('alumnis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ikdhs');
    }
};
