<?php
namespace Src\Plan\Repositories;

use Rinvex\Subscriptions\Models\Plan;
use Src\Plan\ValoueObjects\PlansValoueObjects;

interface PlanRepositoriesInterface
{

    public static function Store(PlansValoueObjects $planId): Plan;
}
