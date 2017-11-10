<?php

namespace Api\Transformers;

use App\Dog;
use League\Fractal\TransformerAbstract;

class DogTransformer extends TransformerAbstract
{
	public function transform(Dog $dog)
	{
		return [
			'id' 	=> (int) $dog->id,
			'name'  => $dog->name,
			'age'	=> (int) $dog->age
		];
	}
}