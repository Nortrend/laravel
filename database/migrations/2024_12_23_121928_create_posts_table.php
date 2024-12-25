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
        Schema::create('posts', function (Blueprint $table) {

            /** id публикации */
            $table->id();

            /** название поста */
            $table->string('title');

            /** содержание поста */
            $table->text('content');

            /** количество реакций */
            $table->unsignedBigInteger('likes')->nullable();

            /** опубликован ли пост */
            $table->boolean('is_published')->default(true);

            /** дата публикации и изменения */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
