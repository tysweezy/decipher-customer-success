<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBugsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bugs', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('bug_name');
            $table->string('bug_link');
            $table->integer('client_id')->unsigned();
			$table->timestamps();
		});


        Schema::table('bugs', function($table) {
            $table->foreign('client_id')->references('id')->on('clients');
        });

    }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bugs');
	}

}
