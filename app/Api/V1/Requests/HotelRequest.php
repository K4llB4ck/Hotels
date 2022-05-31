<?php

namespace App\Api\V1\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelRequest extends FormRequest
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


    public function messages()
    {
        return [
            "nit.required" => "El nit es requerido",
            "nit.unique" => "El  NIT proporcionado ya se encuentra registrado en nuestro sistema",
            "name.required" => "El nombre del hotel es requerido",
            "street.required" => "La dirección del hotel es requerida",
            "city.required" => "La ciudad del hotel es requerida",
            "rooms.required" => "La cantidad de habitaciones del hotel es requerido"
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "nit" => "required|unique:hotels",
            "name" => "required",
            "street" => "required",
            "city" => "required",
            "rooms" => "required|numeric"
        ];
    }
}
