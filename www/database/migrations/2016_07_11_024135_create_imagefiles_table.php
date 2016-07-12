<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagefilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagefiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('filename');
            $table->string('type');
            $table->string('description');
            $table->integer('width');
            $table->integer('height');
            $table->integer('dpi');
            
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
        Schema::drop('imagefiles');
    }
}
