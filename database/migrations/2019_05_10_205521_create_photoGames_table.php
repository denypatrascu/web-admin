<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotoGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photoGames', function (Blueprint $table) {
            $table->increments('photo_id');
            $table->integer('width');
            $table->integer('height');
            $table->string('title');

            $table->foreign('photo_id')
                ->references('media_id')
                ->on('media')
                ->onDelete('cascade');

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
        Schema::dropIfExists('photoGames');
    }
}
