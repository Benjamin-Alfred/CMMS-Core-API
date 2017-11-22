<?php

namespace Api\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
	public function transform(User $user)
	{
		return [
			'id' 	=> (int) $user->id,
			'first_nname'  => $user->first_nname,
			'middle_name'  => $user->middle_name,
			'last_name'  => $user->last_name,
			'email_address'	=> $user->email_address,
			'mobile_phone'	=> $user->mobile_phone,
			'organizational_affiliation'	=> $user->organizational_affiliation,
			'password'	=> $user->passwords
		];
	}
}