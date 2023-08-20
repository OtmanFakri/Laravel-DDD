<?php

namespace Src\Article\Resources;


use Src\User\Resources\UserResource;
use TiMacDonald\JsonApi\JsonApiResource;

class ArticleRousource extends JsonApiResource
{


    public function toArray($request) : array
    {
        $user=UserResource::make($this->user);
        return [
            'title' => $this->title,
            'body' => $this->body,
            'relation' =>[
                'user'=> $user
            ]
        ];
    }
}
