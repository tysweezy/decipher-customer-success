<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('surveys', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('apr_14_created');
			$table->integer('apr_14_launched');
			$table->integer('may_14_created');
			$table->integer('may_14_launched');
			$table->integer('jun_14_created');
			$table->integer('jun_14_launched');
			$table->integer('jul_14_created');
			$table->integer('jul_14_launched');
			$table->integer('aug_14_created');
			$table->integer('aug_14_launched');
			$table->integer('sep_14_created');
			$table->integer('sep_14_launched');
			$table->integer('oct_14_created');
			$table->integer('oct_14_launched');
			$table->integer('nov_14_created');
			$table->integer('nov_14_launched');
			$table->integer('dec_14_created');
			$table->integer('dec_14_launched');
			$table->integer('jan_15_created');
			$table->integer('jan_15_launched');
			$table->integer('feb_15_created');
			$table->integer('feb_15_launched');
			$table->integer('client_id')->unsigned();
			$table->timestamps();
		});


        Schema::table('surveys', function($table) {
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
		Schema::drop('surveys');
	}

}
