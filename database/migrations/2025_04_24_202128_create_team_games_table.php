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
        Schema::create('team_games', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('team_id');
            $table->foreign('team_id')
                ->references('id')
                ->on('teams')
                ->ondelete('cascade')
                ->onupdate('cascade');
            $table->unsignedBigInteger('game_id');
            $table->foreign('game_id')
                    ->references('id')
                    ->on('games')
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
        Schema::dropIfExists('team_games');
    }
};
