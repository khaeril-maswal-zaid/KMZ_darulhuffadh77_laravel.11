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
        Schema::create('blog_categories', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('user_id'); //maker
            $table->string('oleh'); //poster
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('excerpt');
            $table->text('body1');
            $table->text('body2');
            $table->string('picture1')->default('default.jpg');
            $table->string('picture2')->nullable();
            $table->string('picture3')->nullable();
            $table->boolean('album');
            $table->integer('visit')->default(50);
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('blog_categories');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs_category');
        Schema::dropIfExists('blogs');
    }
};
