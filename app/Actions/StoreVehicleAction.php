<?php


namespace App\Actions;

use App\DTO\StoreVehicleDTO;
use App\Models\Vehicle;
use App\Rules\VehicleType;

class StoreVehicleAction
{
    public function execute(StoreVehicleDTO $storeVehicleDTO): void {
        Vehicle::create([
            'sedan' => $storeVehicleDTO->sedan,
            'model' => $storeVehicleDTO->model,
            'horse_power' => $storeVehicleDTO->horse_power,
            'tires' => $storeVehicleDTO->tires,
        ]);
    }
}
