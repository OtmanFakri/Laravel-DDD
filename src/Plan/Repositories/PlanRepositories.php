<?php

namespace Src\Plan\Repositories;
use Rinvex\Subscriptions\Models\Plan;
use Rinvex\Subscriptions\Models\PlanFeature;
use Src\Plan\ValoueObjects\PlansValoueObjects;

class PlanRepositories implements PlanRepositoriesInterface
{
    public static function Store(PlansValoueObjects $plansValoueObjects): Plan
    {
        $plan = app('rinvex.subscriptions.plan')
            ->create($plansValoueObjects->toArray());

        foreach ($plansValoueObjects->features as $feature) {
            $planFeature = new PlanFeature($feature);
            $plan->features()->save($planFeature);
        }

        return $plan;
    }
}

