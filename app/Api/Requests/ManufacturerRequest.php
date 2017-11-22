<?php

namespace Api\Requests;

use Dingo\Api\Http\FormRequest;

class ManufacturerRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
	    	'name' => 'required|max:100',
	    	'address' => 'required|max:255'
    	];
	}
}