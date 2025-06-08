<?php

namespace App\API\Controllers;

use App\API\Request\CreateDirectionRequest;
use App\API\Request\UpdateDirectionRequest;
use App\Domain\Actions\Diretions\CreateDirection;
use App\Domain\Actions\Diretions\DeleteDirection;
use App\Domain\Actions\Diretions\GetDirections;
use App\Domain\Actions\Diretions\UpdateDirections as DiretionsUpdateDirections;
use App\Domain\Actions\UpdateDirections;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DirectionController extends Controller
{

    public function index(GetDirections $getDirections)
    {
        $directions = $getDirections->handle();
        return response()->json($directions);
    }

    public function create(CreateDirectionRequest $request , CreateDirection $createDirection)
    {
        $direction = $createDirection->handle($request);
        return response()->json($direction,201);
    }

    public function update(UpdateDirectionRequest $request , DiretionsUpdateDirections  $updateDirections , $id)
    {
        $direction = $updateDirections->handle($request , $id);
        return response()->json($direction,201);
    }

    public function destroy(DeleteDirection $deleteDirection, $id)
    {
        $direction = $deleteDirection->handle($id);
        return response()->json([
            'message' => 'Direction deleted succesfully'
        ]);
    }

}
