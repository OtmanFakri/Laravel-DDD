<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use Src\Subscription\Repositories\RepositorySubscription;
use Src\Subscription\Resources\SubscriptionResource;

class IndexSubscription
{

    public function __invoke(Request $request)
    {
        return response()
            ->json(
                SubscriptionResource::collection( RepositorySubscription::all())
                ,200);

    }
}
