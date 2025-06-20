<?php


namespace App\Domain\Actions\Diretions;


use App\API\Request\UpdateDirectionRequest;
use App\API\Resources\DirectionsResource;
use App\Domain\Directions\Models\Direction;

class UpdateDirections{


    public function handle(UpdateDirectionRequest $request , $id)
    {
        $direction = Direction::findOrFail($id);

        $direction->update($request->validated());

        return new DirectionsResource($direction);

    }
}