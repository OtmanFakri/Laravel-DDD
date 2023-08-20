<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Rinvex\Subscriptions\Models\PlanFeature;

class Plans extends Controller
{


    public function Store()
    {


        $user = User::find(1);
        $user->subscribedTo(2);
        //$subscriptions = app('rinvex.subscriptions.plan_subscription')->byPlanId(1)->get();
        $subscription = $user->activeSubscription();

        $bookingsOfSubscriber = app('rinvex.subscriptions.plan_subscription')->ofSubscriber($user)->get();

        return response()->json($subscription, 201);
    }
}
