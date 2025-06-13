<?php

namespace App\Domain\Actions\Services;

use App\API\Request\UpdateServiceRequest;
use App\API\Resources\ServiceResource;
use App\Domain\Services\Model\Service;

class Update{

    public function handle(UpdateServiceRequest $request ,  $id)
    {
        $service = Service::findOrFail($id);

        $service->update($request->validated());

        return new ServiceResource($service);
    }
}