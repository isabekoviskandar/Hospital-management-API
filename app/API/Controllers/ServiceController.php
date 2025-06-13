<?php


namespace App\API\Controllers;

use App\API\Request\CreateServiceRequest;
use App\API\Request\UpdateServiceRequest;
use App\Domain\Actions\Services\Create;
use App\Domain\Actions\Services\Destroy;
use App\Domain\Actions\Services\Get;
use App\Domain\Actions\Services\Update;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Get $getServices)
    {
        return $getServices->handle();
    }

    public function create(CreateServiceRequest $request , Create $create)
    {
        return $create->handle($request);
    }

    public function update(UpdateServiceRequest $request , Update $update ,  $id)
    {
        return $update->handle($request , $id);
    }

    public function destroy(Destroy $destroy ,  $id)
    {
        return $destroy->handle($id);
    }
}
