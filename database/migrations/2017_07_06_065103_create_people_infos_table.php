<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('people_id')->unsigned();
            $table->foreign('people_id')->references('id')->on('people')->onDelete('cascade')->onUpdate('cascade');

            $table->string('marriage_anniversary');
            $table->string('address');

            $table->string('husband_name');
            $table->string('husband_image');
            $table->string('husband_dob');
            $table->string('husband_bg');
            $table->string('husband_age');
            $table->string('husband_occupation');

            $table->string('wife_name');
            $table->string('wife_image');
            $table->string('wife_dob');
            $table->string('wife_bg');
            $table->string('wife_age');
            $table->string('wife_occupation');




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
        Schema::dropIfExists('people_infos');
    }
}
