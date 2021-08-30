<?php

namespace App\Http\Requests;

use App\DTO\StoreVehicleDTO;
use App\Rules\VehicleType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreVehicleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type' => ['required', Rule::in(VehicleType::$types)],
            'model' => ['required'],
            'horse_power' => ['required', 'numeric', 'min:0', 'max:1000']
        ];
    }

    public function toDTO(): StoreVehicleDTO
    {
        return new StoreVehicleDTO([
            'sedan' => $this->type == VehicleType::SEDAN,
            'model' => $this->model,
            'horse_power' => intval($this->horse_power),
            'tires' => $this->type == VehicleType::SEDAN ? 4 : 2,
        ]);
    }
}
