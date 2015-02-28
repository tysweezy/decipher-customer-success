<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class YtdRequest extends Request {

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
			'complete_ytd_used'           => 'required|integer',
			'complete_ytd_available'      => 'required|integer',
			'support_hours_ytd_used'      => 'required|integer',
			'support_hours_ytd_available' => 'required|integer',
			'training_ytd_used'           => 'required|integer',
			'training_ytd_available'      => 'required|integer'
		];
	}

}
