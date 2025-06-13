<?php


namespace App\Domain\Actions\Services;

use App\API\Resources\ServiceResource;
use App\Domain\Services\Model\Service;

class Get{

    public function handle()
    {
        $services = Service::all();
        return ServiceResource::collection($services);
    }
}
