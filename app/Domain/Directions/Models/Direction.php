<?php

namespace App\Domain\Directions\Models;


use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    protected $fillable =
    [
        'name',
        'is_active'
    ];
}
