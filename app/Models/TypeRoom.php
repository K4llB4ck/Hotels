<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeRoom extends Model
{
    use HasFactory;

    protected $table = 'type_rooms';


    public function assignments()
    {
        return $this->belongsToMany(
            Accommodation::class,
            "accommodation_rooms",
            "type_id",
            "accommodation_id"
        )->as("accommodations")->withTimestamps();
    }
}
