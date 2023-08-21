<?php

namespace Src\Article\Factories;

use Src\Article\ValueObjects\PostValueObjects;

class PostFactory
{
    public static function create(array $postValueObjects): PostValueObjects
    {
        return new PostValueObjects(
            title: $postValueObjects['title'],
            body: $postValueObjects['body'],
            //user_id: $postValueObjects['user_id'],
        );
    }

}
