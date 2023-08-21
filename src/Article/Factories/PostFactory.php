<?php

namespace Src\Article\Factories;

use Src\Article\ValueObjects\PostValueObjects;
use Src\Article\ValueObjects\UpdateValueObjects;

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
    public static function update(array $updateValueObjects): UpdateValueObjects
    {
        return new UpdateValueObjects(
            title: $updateValueObjects['title'] ?? null,
            body: $updateValueObjects['body'] ?? null,
        );
    }

}
