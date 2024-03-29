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
        Schema::create('thumbs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('file_card_id')
                ->comment('Ид карточки файла')
                ->constrained('file_cards')
                ->cascadeOnDelete();
            $table->text('path');
            $table->string('resolution')->comment('Разрешение миниатюры');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thumbs');
    }
};
