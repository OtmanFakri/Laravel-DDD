<?php
namespace Src\Plan\Factories;


use Rinvex\Subscriptions\Models\PlanFeature;
use Src\Plan\ValoueObjects\PlanFeatureValoueObjects;

class PlanFeatureFactory
{
    public static function create(array $planFeature): PlanFeature
    {
        return new PlanFeature(
             $planFeature['plan_id'],
             $planFeature['slug'],
             $planFeature['name'],
             $planFeature['description'],
             $planFeature['value'],
             $planFeature['resettable_period'],
             $planFeature['resettable_interval'],
             $planFeature['sort_order'],
        );
    }

}
