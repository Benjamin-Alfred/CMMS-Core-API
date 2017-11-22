<?php

namespace Api\Transformers;

use App\Facility;
use League\Fractal\TransformerAbstract;

class FacilityTransformer extends TransformerAbstract
{
	public function transform(Facility $facility)
	{
		return [
			'id' 		=> (int) $facility->id,
			'MFL_code'	=> $facility->MFL_code,
			'name'		=> $facility->name,
			'registration_number'	=> $facility->registration_number,
			'KEPH_level'		=> $facility->KEPH_level,
                  'facility_type'		=> $facility->facility_type,
                  'owner'			=> $facility->owner,
                  'regulatory_body'	      => $facility->regulatory_body,
                  'beds'			=> (int)$facility->beds,
                  'cots'			=> (int)$facility->cots,
                  'county'		=> $facility->county,
                  'constituency'	=> $facility->constituency,
                  'sub_county'	=> $facility->sub_county,
                  'ward'			=> $facility->ward,
                  'operation_status'	=> (boolean)$facility->operation_status,
                  'open_whole_day'		=> (boolean)$facility->open_whole_day,
                  'open_public_holidays'	=> (boolean)$facility->open_public_holidays,
                  'open_weekends'		=> (boolean)$facility->open_weekends,
                  'open_late_night'		=> (boolean)$facility->open_late_night,
                  'service_names'		=> $facility->service_names,
                  'approved'			=> (boolean)$facility->approved,
                  'public_visible'	      => (boolean)$facility->public_visible,
                  'closed'			=> (boolean)$facility->closed
		];
	}
}