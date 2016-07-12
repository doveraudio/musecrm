<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAudiofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audiofiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('filename');
            $table->string('type');
            $table->string('description');
            $table->string('length');
            $table->integer('bitrate');
            $table->integer('bitdepth');
            
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
        Schema::drop('audiofiles');
    }
}
