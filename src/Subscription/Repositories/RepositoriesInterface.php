<?php

namespace Src\Subscription\Repositories;
use Rinvex\Subscriptions\Models\PlanSubscription;
use Src\Subscription\Resources\SubscriptionResource;

interface RepositoriesInterface
{
    public static function all();
    //public function create(array $data);
    //public function update(array $data, $id);
    //public function delete($id);
    public static function find(PlanSubscription $subscription) : SubscriptionResource;

}
