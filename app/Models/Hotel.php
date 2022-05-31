<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AccommodationRoom;

class Hotel extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function roomAssignement()
    {

        return $this->belongsToMany(
            AccommodationRoom::class,
            "hotel_rooms",
            "hotel_id",
            "accomodation_rooms_id"
        )->as("assignements")->withTimestamps()->withPivot("room_quanty");
    }
}
