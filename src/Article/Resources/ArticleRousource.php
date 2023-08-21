<?php

namespace Src\Article\Resources;


use App\Models\User;
use Src\User\Resources\UserResource;
use TiMacDonald\JsonApi\JsonApiResource;

class ArticleRousource extends JsonApiResource
{



    public function toArray($request) : array
    {

        return [
            'title' => $this->title,
            'body' => $this->body,
            'relationships' => [
                'user' => new UserResource($this->whenLoaded('user')),
            ],
        ];
    }


}
