<?php

namespace Src\Subscription\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Src\User\Resources\UserResource;

class SubscriptionResource extends JsonResource
{

    public function toArray($request): array
    {
        return [
            //'id' => $this->id,
            'subscriber_type' => $this->subscriber_type,
            'subscriber_id' => $this->subscriber_id,
            'attributes'=>[
                'plan_id' => $this->plan_id,
                'slug' => $this->slug,
                'name' => $this->name,
                'description' => $this->description,
                'trial_ends_at' => $this->trial_ends_at,
                'starts_at' => $this->starts_at,
                'ends_at' => $this->ends_at,
                'cancels_at' => $this->cancels_at,
                'canceled_at' => $this->canceled_at,
                'timezone' => $this->timezone,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
                'deleted_at' => $this->deleted_at,
                'relation' => $this->relation,
            ],

            'relationship'=> [
               'subscriber'=> new UserResource($this->whenLoaded('subscriber')),
            ]
        ];

    }
}
