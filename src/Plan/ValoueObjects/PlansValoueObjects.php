<?php
namespace Src\Plan\ValoueObjects;

class PlansValoueObjects
{


    public function __construct(
        public string $name,
        public string $description,
        public float $price,
        public float $signup_fee,
        public float $invoice_period,
        public string $invoice_interval,
        public int $trial_period,
        public string $trial_interval,
        public int $sort_order,
        public string $currency,
        public array $features = [],
    )
    {
    }
    public function addFeature(PlanFeatureValoueObjects $feature) {
        $this->features[] = $feature;
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'signup_fee' => $this->signup_fee,
            'invoice_period' => $this->invoice_period,
            'invoice_interval' => $this->invoice_interval,
            'trial_period' => $this->trial_period,
            'trial_interval' => $this->trial_interval,
            'sort_order' => $this->sort_order,
            'currency' => $this->currency,
            'features' => $this->features,
        ];
    }
}
