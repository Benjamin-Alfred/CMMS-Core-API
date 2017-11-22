<?php

namespace Api\Requests;

use Dingo\Api\Http\FormRequest;

class EquipmentTypeRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
	    	'name' => 'required|max:100',
	    	'description' => 'required|max:255'
    	];
	}
}