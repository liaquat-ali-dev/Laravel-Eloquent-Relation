<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parent extends Model
{
    use HasFactory;
    protected $table = 'parents';

    public function grandparent()
    {
        return $this->belongsTo(Grandparent::class, 'grandparent_id');
    }

    public function children()
    {
        return $this->hasMany(Child::class, 'parent_id');
    }
}
