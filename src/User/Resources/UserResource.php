<?php

namespace Src\User\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use TiMacDonald\JsonApi\JsonApiResource;

class UserResource extends JsonApiResource
{

    public function toArray($request): array
    {
        return [
            'type' => 'users',
            'id' => (string)$this->id,
            'attributes' => [
                'name' => $this->name,
                'email' => $this->email,
            ],

        ];
    }


}
