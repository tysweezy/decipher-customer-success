<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('emailsent', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('apr_14');
			$table->integer('may_14');
			$table->integer('jun_14');
			$table->integer('jul_14');
			$table->integer('aug_14');
			$table->integer('sep_14');
			$table->integer('oct_14');
			$table->integer('nov_14');
			$table->integer('dec_14');
			$table->integer('jan_15');
			$table->integer('feb_15');
			$table->integer('client_id')->unsigned();
			$table->timestamps();
		});


        Schema::table('emailsent', function($table) {
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
		Schema::drop('emailsents');
	}

}
