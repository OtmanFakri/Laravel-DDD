<?php
namespace Src\Article\Repositories;

use App\Models\Article;
use App\Models\User;
use Spatie\QueryBuilder\QueryBuilder;
use Src\Article\Resources\ArticleRousource;
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

    public static function delete(Article $article): bool
    {
        $article->delete();
        return true;
    }

    public static function find(int $id): ArticleRousource
    {
        $article=QueryBuilder::for(
            Article::where('id', $id)
        )
            ->allowedIncludes(['user'])
            ->firstOrFail();

        return ArticleRousource::make($article);

    }
}
