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
        Schema::create('profiles', function (Blueprint $table) {

            $table->id();

            /** имя */
            $table->string('name');

            /** фамилия */
            $table->string('surname')->nullable();

            /** возраст */
            $table->integer('age');

            /** пол */
            $table->string('gender');

            /** хобби */
            $table->string('hobby')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
