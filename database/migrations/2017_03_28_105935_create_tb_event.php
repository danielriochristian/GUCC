<?php

// Author  : Hasan El Jabir
// Date    : 17-09-2017

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_event', function (Blueprint $table) {
          $table->increments('id');
          // $table->smallInteger('id_category')->default('1');
          $table->string('title');
          $table->text('content');
          $table->date('date');
          $table->string('place');
          $table->timestamps();
          $table->softDeletes();
          $table->smallInteger('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_event');
    }
}
