<?php

namespace Api\Requests;

use Dingo\Api\Http\FormRequest;

class FacilityRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
	    	'MFL_code' => 'required|max:20',
	    	'name' => 'required|max:100',
            'beds' => 'required|numeric|max:5',
            'cots' => 'required|numeric|max:5',
            'county' => 'required|max:50'
    	];
	}
}