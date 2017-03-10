<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SchoolComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('university_comments', function (Blueprint $table){
		    $table->increments('id');
		    $table->integer('university_id')->unsigned();
		    $table->foreign('university_id')
			    ->references('id')  
			    ->on('universities')
			    ->onDelete('cascade');
		    $table->string('author');
		    $table->longText('comment');
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
	Schema::dropIfExits('university_comments');
    }
}
