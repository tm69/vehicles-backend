<?php


namespace App\DTO;

use Spatie\DataTransferObject\DataTransferObject;

class StoreVehicleDTO extends DataTransferObject
{
    public bool $sedan;
    public string $model;
    public int $horse_power;
    public int $tires;
}
