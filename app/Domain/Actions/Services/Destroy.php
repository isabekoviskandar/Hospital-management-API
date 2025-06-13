<?php

namespace App\Domain\Actions\Services;

use App\Domain\Services\Model\Service;

class Destroy{

    public function handle($id)
    {
        $service = Service::findOrFail($id);

        $service->delete();

        return response()->json([
            'message' => 'Service deleted successfully'
        ]);
    }
}