<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'users';

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
