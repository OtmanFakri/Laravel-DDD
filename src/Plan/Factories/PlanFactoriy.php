<?php
namespace Src\Plan\Factories;
use Src\Plan\ValoueObjects\PlansValoueObjects;

class PlanFactoriy
{

    public static function create(array $plan): PlansValoueObjects
    {
        return new PlansValoueObjects(
            name: $plan['name'],
            description: $plan['description'],
            price: $plan['price'],
            signup_fee: $plan['signup_fee'],
            invoice_period: $plan['invoice_period'],
            invoice_interval: $plan['invoice_interval'],
            trial_period: $plan['trial_period'],
            trial_interval: $plan['trial_interval'],
            sort_order: $plan['sort_order'],
            currency: $plan['currency'],
            features: $plan['features'],
        );
    }

}
