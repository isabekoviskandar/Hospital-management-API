<?php

namespace App\Domain\Directions\Models;

use App\Domain\Services\Model\Service;
use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    protected $fillable =
    [
        'name',
        'status'
    ];

    public function service()
    {
        return $this->hasMany(Service::class , 'direction_id');
    }
}
