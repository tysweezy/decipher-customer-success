<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model {

	protected $table = 'surveys';

	protected $fillable = [
		'apr_14_created',
		'apr_14_launched',
		'may_14_created',
		'may_14_launched',
		'jun_14_created',
		'jun_14_launched',
		'jul_14_created',
		'jul_14_launched',
		'aug_14_created',
		'aug_14_launched',
		'sep_14_created',
		'sep_14_launched',
		'oct_14_created',
		'oct_14_launched',
		'nov_14_created',
		'nov_14_launched',
		'dec_14_created',
		'dec_14_launched',
		'jan_15_created',
		'jan_15_launched', 
		'feb_15_created',
		'feb_15_launched',
		'client_id'
	];

	public function client()
	{
		$this->hasOne('Client');
	}

}
