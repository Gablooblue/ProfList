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
	    Schema::create('universities', function (Blueprint $table)
	    {	    
       		$table->increments('id');
		$table->string('name')->unique();
		$table->binary('icon');
		$table->string('contact');
		$table->string('address');
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::dropIfExists('universities');
    }
}
