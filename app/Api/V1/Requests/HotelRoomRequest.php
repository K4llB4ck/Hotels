<?php

namespace App\Api\V1\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Hotel;
use App\Api\V1\Rules\HotelTypeRoomAssignation;



class HotelRoomRequest extends FormRequest
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
            "hotel" => ["required", "numeric", new HotelTypeRoomAssignation],
            "assignation" => "required|exists:accommodation_rooms,id",
            "rooms" => "required|numeric"

        ];
    }

    public function mesages()
    {
        return [
            "hotel.required" => "El id de hotel es requerido",
            "hotel.numeric" => "adsasddsa",
            "rooms.required" => "El numero de cuartos a asignar son requeridos",
            "assignation.required" => "El id de asignación es requerido"
        ];
    }
}
