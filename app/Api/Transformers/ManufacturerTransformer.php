<?php

namespace Api\Transformers;

use App\Manufacturer;
use League\Fractal\TransformerAbstract;

class ManufacturerTransformer extends TransformerAbstract
{
	public function transform(Manufacturer $manufacturer)
	{
		return [
			'id' 	=> (int) $manufacturer->id,
			'name'  => $manufacturer->name,
			'address'	=> $manufacturer->address
		];
	}
}