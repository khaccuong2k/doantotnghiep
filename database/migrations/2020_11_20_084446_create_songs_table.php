<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_type')->unsigned();
            $table->foreign('id_type')->references('id')->on('type');
            $table->integer('id_singer')->unsigned();
            $table->foreign('id_singer')->references('id')->on('singers');
            $table->integer('id_country')->unsigned();
            $table->foreign('id_country')->references('id')->on('countrys');
            $table->integer('id_musician')->unsigned();
            $table->foreign('id_musician')->references('id')->on('musicians');
            $table->integer('id_album')->unsigned();
            $table->foreign('id_album')->references('id')->on('albums');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('name')->nullable();
            $table->string('img')->nullable();
            $table->string('price')->nullable();
            $table->string('file')->nullable();
            $table->text('des')->nullable();
            $table->string('views')->nullable();
            $table->string('bought')->nullable();
            $table->tinyInteger('copyright')->nullable();
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
        Schema::dropIfExists('songs');
    }
}
