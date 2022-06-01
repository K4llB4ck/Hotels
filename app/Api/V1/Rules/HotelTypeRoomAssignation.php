<?php

namespace App\Api\V1\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Contracts\Validation\DataAwareRule;
use App\Models\Hotel;


class HotelTypeRoomAssignation implements Rule, DataAwareRule
{

    /**
     * All of the data under validation.
     *
     * @var array
     */
    protected $data = [];


    public $messageValidation;


    /**
     * Set the data under validation.
     *
     * @param  array  $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $hotel  = Hotel::find($value);
        if (!$hotel) {
            $this->messageValidation = "El hotel no es valido";
            return false;
        }


        //validación asignación unica tipo de cuarto y acomodación
        $alreadyAssigned = $hotel->roomAssignement()->wherePivot("hotel_id", $hotel->id)->wherePivot("accomodation_rooms_id", $this->data["assignation"])->get();
        if ($alreadyAssigned->count() > 0) {
            $this->messageValidation = "Ya se encuentra una asignación de acomodación para el tipo de cuarto elegido";
            return false;
        }

        
        //validación limite de asignación
        $room_assignated =  $hotel->roomAssignement->sum("assignements.room_quanty");
        $rooms = $this->data['rooms'];
        $check =  ($rooms + $room_assignated) < $hotel->rooms;
        if (!$check) {
            $this->messageValidation = "El numero de cuartos ${rooms} excede la cantidad de asignación permitida";
            return false;
        }



        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->messageValidation;
    }
}
