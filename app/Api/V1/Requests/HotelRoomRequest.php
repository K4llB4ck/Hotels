<?php

namespace App\Api\V1\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            "hotel" => "required|exists:hotels,id",
            "assignation" => "required|uniqued:hotel_rooms,|exists:accommodation_rooms,id",
            "rooms" => "required|numeric"
        ];
    }
}
