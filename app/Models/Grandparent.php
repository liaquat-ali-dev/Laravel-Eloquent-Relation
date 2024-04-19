<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grandparent extends Model
{
    use HasFactory;
    protected $table = 'grandparents';

    public function parents()
    {
        return $this->hasMany(Parent::class, 'grandparent_id');
    }

    public function children()
    {
        return $this->hasManyThrough(Child::class, Parent::class, 'grandparent_id', 'parent_id');
    }
}
