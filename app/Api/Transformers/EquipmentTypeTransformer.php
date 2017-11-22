<?php

namespace Api\Transformers;

use App\EquipmentType;
use League\Fractal\TransformerAbstract;

class EquipmentTypeTransformer extends TransformerAbstract
{
	public function transform(EquipmentType $equipmentType)
	{
		return [
			'id' 	=> (int) $equipmentType->id,
			'name'  => $equipmentType->name,
			'address'	=> $equipmentType->description
		];
	}
}