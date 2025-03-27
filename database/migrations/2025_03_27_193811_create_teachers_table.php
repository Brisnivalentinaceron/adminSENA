<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('email');
            $table->unsignedBigInteger('area_id');
            $table->foreign('area_id')
            ->references('id')
            ->on('areas')
            ->ondelete('cascade')
             ->onupdate('cascade');
            $table->unsignedBigInteger('trainig_center_id');
            $table->foreign('trainig_center_id')
            ->references('id')
            ->on('Trainig_Centers')
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
        Schema::dropIfExists('teachers');
    }
};
