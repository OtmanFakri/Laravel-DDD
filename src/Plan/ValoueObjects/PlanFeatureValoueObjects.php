<?php

namespace Src\Plan\ValoueObjects;

class PlanFeatureValoueObjects
{


    public function __construct(
        public string $plan_id,
        public string $slug,
        public string $name,
        public string $description,
        public string $value,
        public string $resettable_period,
        public string $resettable_interval,
        public string $sort_order,
    )
    {
    }

    public function toArray(): array
    {
        return [
            'plan_id' => $this->plan_id,
            'slug' => $this->slug,
            'name' => $this->name,
            'description' => $this->description,
            'value' => $this->value,
            'resettable_period' => $this->resettable_period,
            'resettable_interval' => $this->resettable_interval,
            'sort_order' => $this->sort_order,
        ];
    }
}
