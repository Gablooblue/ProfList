<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('schools', function (Blueprint $table)
	    {	    
       		$table->increments('id');
		$table->string('name')->unique();
		$table->binary('icon');
		$table->integer('ProfAmount');
		$table->string('contact');
		$table->string('address');
		$table->integer('average');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::drop('schools');
    }
}
