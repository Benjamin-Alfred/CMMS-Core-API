<?php

namespace Api\Requests;

use Dingo\Api\Http\FormRequest;

class DogRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
	    	'name' => 'required|max:100',
	    	'age' => 'required|numeric|between:0,40'
    	];
	}
}