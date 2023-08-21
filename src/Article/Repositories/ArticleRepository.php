<?php
namespace Src\Article\Repositories;

use App\Models\Article;
use App\Models\User;
use Src\Article\ValueObjects\PostValueObjects;

class ArticleRepository implements ArticleRepositoryInterface
{

    public static function create(PostValueObjects $postValueObjects) :Article
    {
        $test=auth()->user()->articles()->create($postValueObjects->toArray());
        return $test;
    }




}
