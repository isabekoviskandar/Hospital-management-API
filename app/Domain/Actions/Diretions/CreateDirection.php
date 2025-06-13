<?php

namespace App\Domain\Actions\Diretions;

use App\API\Request\CreateDirectionRequest;
use App\API\Resources\DirectionsResource;
use App\Domain\Directions\Models\Direction;

class CreateDirection
{
    public function handle(CreateDirectionRequest $request)
    {
        $direction =  Direction::create($request->validated());

        return new DirectionsResource($direction);
    }
}
