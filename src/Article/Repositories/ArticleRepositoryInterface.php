<?php
namespace Src\Article\Repositories;
use App\Models\Article;
use Src\Article\ValueObjects\PostValueObjects;

interface ArticleRepositoryInterface
{
    public function create(PostValueObjects $postValueObjects): Article;
    //public function update(PostValueObjects $postValueObjects, Article $article): Article;
    //public function delete(Article $article): void;
    //public function find(int $id): Article;

}
