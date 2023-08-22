<?php

namespace App\Http\Controllers\API\Plan;


use Src\Plan\Factories\PlanFactoriy;
use Src\Plan\Repositories\PlanRepositories;
use Src\Plan\Requests\PlanRequests;

class StorePlan
{

    public function __invoke(PlanRequests $request)
    {
        $plan=PlanFactoriy::create($request->validated());
        $create=PlanRepositories::Store($plan);
        return response()->json([
            'message' => 'Plan created successfully',
            'data' => $plan
        ], 201);
    }
}
