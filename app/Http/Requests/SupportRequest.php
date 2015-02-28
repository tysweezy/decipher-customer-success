<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SupportRequest extends Request {

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
			'apr_14'  => 'integer',
			'may_14'  => 'integer',
			'jun_14'  => 'integer',
			'jul_14'  => 'integer',
			'aug_14'  => 'integer',
			'sep_14'  => 'integer',
			'oct_14'  => 'integer',
			'nov_14'  => 'integer',
			'dec_14'  => 'integer',
			'jan_15'  => 'integer',
			'feb_15'  => 'integer'	
		];
	}

}
