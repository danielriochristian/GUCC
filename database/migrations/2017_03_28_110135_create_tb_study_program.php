<?php

// Author  : Hasan El Jabir
// Date    : 17-09-2017

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbStudyProgram extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_study_program', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('information');
            $table->string('image');
            $table->string('accreditation');
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
        Schema::dropIfExists('tb_study_program');
    }
}
