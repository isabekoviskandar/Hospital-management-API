<?php


namespace App\Domain\Actions\Services;

use App\API\Request\CreateServiceRequest;
use App\API\Resources\ServiceResource;
use App\Domain\Services\Model\Service;

class Create{

    public function handle(CreateServiceRequest $request)
    {
        $service = Service::create($request->validated());
        return new ServiceResource($service);
    }
}