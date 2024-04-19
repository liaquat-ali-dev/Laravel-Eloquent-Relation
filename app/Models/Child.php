<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;
    protected $table = 'children';

    public function parent()
    {
        return $this->belongsTo(Parent::class, 'parent_id');
    }
}
