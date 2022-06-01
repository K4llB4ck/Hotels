<?php

namespace App\Api\V1\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Hotel;



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


    public function validateAvailableRooms($hotel, $rooms, $asignation, $fail)
    {

        var_dump($hotel);
        $hotel  = Hotel::find($hotel);
        //Validación hotel existente
        if (!$hotel) return $fail("El hotel es invalido");

        //validación asignación unica tipo de cuarto y acomodación
        $alreadyAssigned = $hotel->roomAssignement()->wherePivot("hotel_id", $hotel->id)->wherePivot("accomodation_rooms_id", $asignation)->get();
        if ($alreadyAssigned->count() > 0) return $fail("Ya se encuentra una asignación de acomodación para el tipo de cuarto elegido");

        $room_assignated =  $hotel->roomAssignement->sum("assignements.room_quanty");
        $check =  ($rooms + $room_assignated) < $hotel->rooms;
        if (!$check) {
            return $fail("El numero de cuartos ${rooms} excede la cantidad de asignación permitida");
        }
    }



    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [

            "assignation" => "required|exists:accommodation_rooms,id",
            "rooms" => "required|numeric",
            "hotel" => ["required", function ($attribute, $value, $fail) {
                $rooms = $this->validator->getData()['rooms'];
                $asignation = $this->validator->getData()['assignation'];
                $this->validateAvailableRooms($value, $rooms, $asignation, $fail);
            }]
        ];
    }

    public function mesages()
    {
        return [
            "hotel.required" => "El id de hotel es requerido",
            "rooms.required" => "El numero de cuartos a asignar son requeridos",
            "assignation.required" => "El id de asignación es requerido"
        ];
    }
}
