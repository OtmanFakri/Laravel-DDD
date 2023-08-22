<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Rinvex\Subscriptions\Models\Plan;
use Rinvex\Subscriptions\Models\PlanFeature;
use Rinvex\Subscriptions\Models\PlanSubscription;
use Spatie\QueryBuilder\QueryBuilder;
use Src\Subscription\Resources\SubscriptionResource;

class Plans extends Controller
{


    public function Store()
    {


        $plans=QueryBuilder::for(
            PlanSubscription::class
        )
            ->allowedIncludes(['subscriber'])
            ->paginate(5);

        return response()
            ->json(
                SubscriptionResource::collection($plans)
                ,200);

    }
}
