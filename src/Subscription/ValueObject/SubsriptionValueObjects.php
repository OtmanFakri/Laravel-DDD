<?php

// app/Domain/Subscription/Entities/SubscriptionValueObject.php

namespace Src\Subscription\ValueObjects;

class SubscriptionValueObject
{


    public function __construct(
        public string $name,
        public string $description,
        public float $price,
        public float $signupFee,
        public int $invoicePeriod,
        public string $invoiceInterval,
        public int $trialPeriod,
        public string $trialInterval,
        public int $sortOrder,
        public string $currency
    ) {

    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'signup_fee' => $this->signupFee,
            'invoice_period' => $this->invoicePeriod,
            'invoice_interval' => $this->invoiceInterval,
            'trial_period' => $this->trialPeriod,
            'trial_interval' => $this->trialInterval,
            'sort_order' => $this->sortOrder,
            'currency' => $this->currency,
        ];
    }

    // ... other getter methods for other attributes
}

