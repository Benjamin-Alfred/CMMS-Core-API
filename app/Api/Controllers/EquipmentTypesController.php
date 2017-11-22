<?php

namespace Api\Controllers;

use App\EquipmentType;
use App\Http\Requests;
use Illuminate\Http\Request;
use Api\Requests\EquipmentTypeRequest;
use Api\Transformers\EquipmentTypeTransformer;

/**
 * @Resource('EquipmentTypes', uri='/equipmenttypes')
 */
class EquipmentTypesController extends BaseController
{

    public function __construct() 
    {
        $this->middleware('jwt.auth');
    }

    /**
     * Show all equipmentTypes
     *
     * Get a JSON representation of all the equipmentTypes
     * 
     * @Get('/')
     */
    public function index()
    {
        return $this->collection(EquipmentType::all(), new EquipmentTypeTransformer);
    }

    /**
     * Store a new equipmentType in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EquipmentTypeRequest $request)
    {
        return EquipmentType::create($request->only(['name', 'description']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->item(EquipmentType::findOrFail($id), new EquipmentTypeTransformer);
    }

    /**
     * Update the equipmentType in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EquipmentTypeRequest $request, $id)
    {
        $equipmentType = EquipmentType::findOrFail($id);
        $equipmentType->update($request->only(['name', 'description']));
        return $equipmentType;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return EquipmentType::destroy($id);
    }
}
