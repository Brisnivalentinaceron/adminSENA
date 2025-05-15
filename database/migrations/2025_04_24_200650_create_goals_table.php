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
        Schema::create('goals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->unsignedBigInteger('player_id');
            $table->foreign('player_id')
                ->references('id')
                ->on('Players')
                ->ondelete('cascade')
                ->onupdate('cascade');
            $table->unsignedBigInteger('game_id');
            $table->foreign('game_id')
                    ->references('id')
                    ->on('Games')
                    ->ondelete('cascade')
                    ->onupdate('cascade');
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
        Schema::dropIfExists('goals');
    }
};
