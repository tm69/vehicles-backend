<?php

namespace App\Rules;

class VehicleType
{
    const SEDAN = 'sedan';
    const MOTOBYKE = 'motorbike';
    public static $types = [self::SEDAN, self::MOTOBYKE];
}
