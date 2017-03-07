<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('professor_comments', function (Blueprint $table)
	{		    
	    $table->increments('id');
	    $table->integer('prof_id')->unsigned();
	    $table->foreign('prof_id')
		    ->references('id')
		    ->on('professors')
	    	    ->onDelete('cascade');
	    $table->longText('comment');
	    $table->string('author');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::dropIfExists('professor_comments');
    }
}
