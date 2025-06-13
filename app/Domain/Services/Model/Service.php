<?php

namespace App\Domain\Services\Model;

use App\Domain\Directions\Models\Direction;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'direction_id',
        'name',
        'status',
        'price',
    ];

    public function direction()
    {
        return $this->belongsTo(Direction::class , 'direction_id');
    }
}
