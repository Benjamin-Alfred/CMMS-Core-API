<?php

namespace Api\Controllers;

use App\Facility;
use App\Http\Requests;
use Illuminate\Http\Request;
use Api\Requests\FacilityRequest;
use Api\Transformers\FacilityTransformer;

/**
 * @Resource('Facilities', uri='/facilities')
 */
class FacilitiesController extends BaseController
{

    public function __construct() 
    {
        $this->middleware('jwt.auth');
    }

    /**
     * Show all facilities
     *
     * Get a JSON representation of all the facilities
     * 
     * @Get('/')
     */
    public function index()
    {
        return $this->collection(Facility::all(), new FacilityTransformer);
    }

    /**
     * Store a new facility in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FacilityRequest $request)
    {
        return Facility::create($request->only(['MFL_code', 'name', 'registration_number', 'KEPH_level', 
            'facility_type', 'owner', 'regulatory_body', 'beds', 'cots', 'county', 'constituency',
            'sub_county', 'ward', 'operation_status', 'open_whole_day', 'open_public_holidays', 'open_weekends',
            'open_late_night', 'service_names', 'approved', 'public_visible', 'closed']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->item(Facility::findOrFail($id), new FacilityTransformer);
    }

    /**
     * Update the facility in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FacilityRequest $request, $id)
    {
        $facility = Facility::findOrFail($id);
        $facility->update($request->only(['MFL_code', 'name', 'registration_number', 'KEPH_level', 
            'facility_type', 'owner', 'regulatory_body', 'beds', 'cots', 'county', 'constituency',
            'sub_county', 'ward', 'operation_status', 'open_whole_day', 'open_public_holidays', 'open_weekends',
            'open_late_night', 'service_names', 'approved', 'public_visible', 'closed']));
        
        return $facility;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Facility::destroy($id);
    }
}
