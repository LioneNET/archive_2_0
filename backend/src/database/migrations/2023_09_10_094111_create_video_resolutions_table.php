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
        Schema::create('video_resolutions', function (Blueprint $table) {
            $table->id();
            $table->string('resolution');
            $table->text('path_to_m3u8');
            $table->foreignId('file_card_id')->comment('Карточка файла')->constrained('file_cards');
            $table->integer('process')->default(0)->comment('Прогресс');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_resolutions');
    }
};
