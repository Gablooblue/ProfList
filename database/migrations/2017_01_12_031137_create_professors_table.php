<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('professors', function (Blueprint $table)
	{	    
	    $table->increments('id');
	    $table->integer('university_id')->unsigned();
	    $table->foreign('university_id')
		    ->references('id')
		    ->on('universities')
	    	    ->onDelete('cascade');
	    $table->string('fname', 50);
	    $table->string('lname', 50);
	    $table->string('mname' , 5);
	    $table->string('class', 100);
	    $table->integer('likes');
	    $table->integer('dislikes');
	    $table->binary('icon');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::dropIfExists('professors');
    }
}
