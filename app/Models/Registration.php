<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $fillable = ['car_id', 'registration_number'];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
