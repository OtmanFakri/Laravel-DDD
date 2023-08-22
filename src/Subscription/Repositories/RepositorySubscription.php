<?php

namespace Src\Subscription\Repositories;


use Rinvex\Subscriptions\Models\PlanSubscription;
use Spatie\QueryBuilder\QueryBuilder;
use Src\Subscription\Resources\SubscriptionResource;

class RepositorySubscription implements RepositoriesInterface
{

    public static function all()
    {
        $plans=QueryBuilder::for(
            PlanSubscription::class
        )
            ->allowedIncludes(['subscriber'])
            ->paginate(5);
        return $plans;
    }

    public static function find(PlanSubscription $subscription)  : SubscriptionResource
    {
        $Subscription = QueryBuilder::for(
            PlanSubscription::class
        )
            ->allowedIncludes(['subscriber'])
            ->where('id',$subscription->id)
            ->first();
        return new SubscriptionResource($Subscription);
    }
}
