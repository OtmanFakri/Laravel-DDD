<?php
namespace Src\Article\Repositories;
use App\Models\Article;
use Src\Article\ValueObjects\PostValueObjects;
use Src\Article\ValueObjects\UpdateValueObjects;

interface ArticleRepositoryInterface
{
    public static function create(PostValueObjects $postValueObjects): Article;
    public static function update(UpdateValueObjects $postValueObjects, Article $article): Article;
    //public function delete(Article $article): void;
    //public function find(int $id): Article;


}
