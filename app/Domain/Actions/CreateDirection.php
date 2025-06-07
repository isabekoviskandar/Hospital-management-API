<?php

namespace App\Domain\Actions;


use App\API\Request\CreateDirectionRequest;
use App\API\Resources\DirectionsResource;
use App\Domain\Directions\Models\Direction;

class CreateDirection
{
    public function handle(CreateDirectionRequest $request)
    {
        $direction =  Direction::create([
            'name' => $request->name,
            'is_active' => $request->is_active,
        ]);

        return new DirectionsResource($direction);
    }
}
