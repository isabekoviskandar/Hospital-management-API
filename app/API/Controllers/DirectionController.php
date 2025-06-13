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
        return $getDirections->handle();
    }

    public function create(CreateDirectionRequest $request , CreateDirection $createDirection)
    {
        return $createDirection->handle($request);
    }

    public function update(UpdateDirectionRequest $request , DiretionsUpdateDirections  $updateDirections , $id)
    {
        return $updateDirections->handle($request , $id);
    }

    public function destroy(DeleteDirection $deleteDirection, $id)
    {
        $direction = $deleteDirection->handle($id);
        return response()->json([
            'message' => 'Direction deleted succesfully'
        ]);
    }

}
