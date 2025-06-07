<?php


namespace App\Domain\Actions;

use App\Domain\Directions\Models\Direction;

class DeleteDirection{


    public function handle($id)
    {
        $direction = Direction::findOrFail($id);

        $direction->delete();
    }
}