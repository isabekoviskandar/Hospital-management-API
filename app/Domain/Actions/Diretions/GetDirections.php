<?php

namespace App\Domain\Actions\Diretions;


use App\API\Resources\DirectionsResource;
use App\Domain\Directions\Models\Direction;

class GetDirections{

    public function handle()
    {
        $directions = Direction::all();
        return DirectionsResource::collection($directions);
    }
}