<?php

namespace App\Http\Controllers;

use App\Actions\StoreVehicleAction;
use App\Http\Requests\StoreVehicleRequest;
use App\Models\Vehicle;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return response()->json($vehicles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVehicleRequest $request, StoreVehicleAction $storeVehicleAction)
    {
        $storeVehicleAction->execute($request->toDTO());

        return response()->json(['success' => true]);
    }

}
