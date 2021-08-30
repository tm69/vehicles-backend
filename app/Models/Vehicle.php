<?php

namespace App\Models;

use App\Rules\VehicleType;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'sedan',
        'model',
        'horse_power',
        'tires',
    ];

    protected $appends = ['type'];

    public function getTypeAttribute(){
        return $this->attributes['sedan'] ? VehicleType::SEDAN : VehicleType::MOTOBYKE;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('d/m/Y H:i');
    }
}
