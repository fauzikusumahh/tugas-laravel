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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title', 45);
            $table->text('summary');
            $table->integer('year');
            $table->string('poster', 255);
            $table->unsignedBigInteger('genre_id'); // Tambahkan kolom genre_id
            $table->foreign('genre_id')->references('id')->on('genres'); // Tentukan foreign key
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
