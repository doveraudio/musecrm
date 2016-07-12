<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videofiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('filename');
            $table->string('type');
            $table->string('description');
            $table->integer('width');
            $table->integer('height');
            $table->integer('fps');
            $table->integer('filesize');
            
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
        Schema::drop('videofiles');
    }
}
