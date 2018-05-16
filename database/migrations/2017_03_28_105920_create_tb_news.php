<?php

// Author  : Hasan El Jabir
// Date    : 17-09-2017

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbNews extends Migration
{
    public function up()
    {
        Schema::create('tb_news', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('id_category')->default('1');
            $table->string('title');
            $table->text('content');
            $table->string('keyword');
            $table->string('slug');
            $table->boolean('status')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_news');
    }
}
