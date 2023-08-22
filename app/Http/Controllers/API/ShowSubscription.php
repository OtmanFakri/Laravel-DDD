<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Rinvex\Subscriptions\Models\PlanSubscription;
use Src\Subscription\Repositories\RepositorySubscription;

class ShowSubscription extends Controller
{

    public function __invoke(Request $request, PlanSubscription $subscription)
    {

        $Subscription = RepositorySubscription::find($subscription);
        return response()
            ->json(
                    $Subscription,200);

    }
}
