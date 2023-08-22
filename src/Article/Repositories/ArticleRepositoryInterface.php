<?php
namespace Src\Article\Repositories;
use App\Models\Article;
use Src\Article\Resources\ArticleRousource;
use Src\Article\ValueObjects\PostValueObjects;
use Src\Article\ValueObjects\UpdateValueObjects;

interface ArticleRepositoryInterface
{
    public static function create(PostValueObjects $postValueObjects): Article;
    public static function update(UpdateValueObjects $postValueObjects, Article $article): Article;
    public static function delete(Article $article): bool;
    public static function find(int $id): ArticleRousource;


}
