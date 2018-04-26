<?php

// Author  : Hasan El Jabir
// Date    : 17-09-2017

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbProfile extends Migration
{
    public function up()
    {
        Schema::create('tb_profile', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_profile');
    }
}
