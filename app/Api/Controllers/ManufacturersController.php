<?php

namespace Api\Controllers;

use App\Manufacturer;
use App\Http\Requests;
use Illuminate\Http\Request;
use Api\Requests\ManufacturerRequest;
use Api\Transformers\ManufacturerTransformer;

/**
 * @Resource('Manufacturers', uri='/manufacturers')
 */
class ManufacturersController extends BaseController
{

    public function __construct() 
    {
        $this->middleware('jwt.auth');
    }

    /**
     * Show all manufacturers
     *
     * Get a JSON representation of all the manufacturers
     * 
     * @Get('/')
     */
    public function index()
    {
        return $this->collection(Manufacturer::all(), new ManufacturerTransformer);
    }

    /**
     * Store a new manufacturer in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ManufacturerRequest $request)
    {
        return Manufacturer::create($request->only(['name', 'address']));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->item(Manufacturer::findOrFail($id), new ManufacturerTransformer);
    }

    /**
     * Update the manufacturer in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ManufacturerRequest $request, $id)
    {
        $manufacturer = Manufacturer::findOrFail($id);
        $manufacturer->update($request->only(['name', 'address']));
        return $manufacturer;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Manufacturer::destroy($id);
    }
}
