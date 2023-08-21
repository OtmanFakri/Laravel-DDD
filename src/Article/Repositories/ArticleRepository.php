<?php
namespace Src\Article\Repositories;

use App\Models\Article;
use App\Models\User;
use Src\Article\ValueObjects\PostValueObjects;
use Src\Article\ValueObjects\UpdateValueObjects;

class ArticleRepository implements ArticleRepositoryInterface
{

    public static function create(PostValueObjects $postValueObjects) :Article
    {
        $test=auth()->user()->articles()->create($postValueObjects->toArray());
        return $test;
    }


    public static function update(UpdateValueObjects $updateValueObjects, Article $article): Article
    {
        // Get the old values of the article
        $oldValues = [
            'title' => $article->title,
            'body' => $article->body,
        ];

        // Apply the update
        $updatedValues = $updateValueObjects->applyUpdate($oldValues);

        //update the article
        $article->update($updatedValues);
        $article->save();

        return $article;
    }
}
