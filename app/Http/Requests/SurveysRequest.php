<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SurveysRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'apr_14_created'   => 'integer',
			'apr_14_launched'  => 'integer',
			'may_14_created'   => 'integer',
			'may_14_launched'  => 'integer',
			'jun_14_created'   => 'integer',
			'jun_14_launched'  => 'integer',
			'jul_14_created'   => 'integer',
			'jul_14_launched'  => 'integer',
			'aug_14_created'   => 'integer',
			'aug_14_launched'  => 'integer',
			'sep_14_created'   => 'integer',
			'sep_14_launched'  => 'integer',
			'oct_14_created'   => 'integer',
			'oct_14_launched'  => 'integer',
			'nov_14_created'   => 'integer',
			'nov_14_launched'  => 'integer',
			'dec_14_created'   => 'integer',
			'dec_14_launched'  => 'integer',
			'jan_15_created'   => 'integer',
			'jan_15_launched'  => 'integer',
			'feb_15_created'   => 'integer',
			'feb_15_launched'  => 'integer'
		];
	}

}
