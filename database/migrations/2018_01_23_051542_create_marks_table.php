<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('marks', function (Blueprint $table) {
            $table->increments('markid');
            $table->string('marks');
             
            $table->integer('subjects_id')->unsigned();
            $table->foreign('subjects_id')->references('id')->on('subjects');
            //$table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('marks');
    }
    
}
