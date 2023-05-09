<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ai_la_trieu_phus', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('question');
            $table->string('correct_answer');
            $table->string('incorrect_1');
            $table->string('incorrect_2');
            $table->string('incorrect_3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ai_la_trieu_phus');
    }
};
