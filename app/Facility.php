<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $fillable = [ 'MFL_code', 'name', 'registration_number', 'KEPH_level', 
            'facility_type', 'owner', 'regulatory_body', 'beds', 'cots', 'county', 'constituency',
            'sub_county', 'ward', 'operation_status', 'open_whole_day', 'open_public_holidays', 'open_weekends',
            'open_late_night', 'service_names', 'approved', 'public_visible', 'closed' ];
}
