<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYtdTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ytd', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('completes_ytd_used');
            $table->integer('completes_ytd_available');
            $table->integer('support_ytd_used');
            $table->integer('support_ytd_available');
            $table->integer('training_ytd_used');
            $table->integer('training_ytd_available');
            $table->integer('client_id')->unsigned();
			$table->timestamps();
		});


        Schema::table('ytd', function($table) {
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
		Schema::drop('ytd');
	}

}
