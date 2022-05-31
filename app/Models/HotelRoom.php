<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hotel;
use App\Models\AccommodationRoom;


class HotelRoom extends Model
{
    use HasFactory;

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function lighted_rooms()
    {
        return $this->belongsTo(AccommodationRoom::class);
    }
}
