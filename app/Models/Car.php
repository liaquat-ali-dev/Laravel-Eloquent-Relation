<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['make', 'model', 'color', 'year'];

    public function registration()
    {
        return $this->hasOne(Registration::class);
    }
}
