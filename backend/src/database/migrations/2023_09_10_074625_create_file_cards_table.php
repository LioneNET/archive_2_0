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
        Schema::create('file_cards', function (Blueprint $table) {
            $table->id();
            $table->string('title', 512);
            $table->string('resolution', 128)->nullable()->comment('Разрешение');
            $table->text('path')->nullable()->comment('Ссылка на файл');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('duration')->nullable()->comment('длительность в секундах');
            $table->foreignId('category_id')->nullable()->comment('длительность в секундах')->constrained('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file_cards');
    }
};
