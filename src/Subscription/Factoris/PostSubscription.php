<?php

namespace Src\Subscription\Factories;

class PostSubscription
{
    public static function create(array $postSubscription): PostSubscription
    {
        return new PostSubscription(
            name: $postSubscription['name'],
            description: $postSubscription['$description'],
            price: $postSubscription['price'],
            signupFee: $postSubscription['signupFee'],
            invoicePeriod: $postSubscription['invoicePeriod'],
            invoiceInterval: $postSubscription['invoiceInterval'],
            trialPeriod: $postSubscription['trialPeriod'],
            trialInterval: $postSubscription['trialInterval'],
            sortOrder: $postSubscription['sortOrder'],
            currency: $postSubscription['currency'],
            );
    }

    }


