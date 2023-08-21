<?php
namespace Src\Article\Repositories;

use App\Models\Article;
use Src\Article\ValueObjects\PostValueObjects;

class ArticleRepository implements ArticleRepositoryInterface
{

    public function create(PostValueObjects $postValueObjects): Article
    {
        return Article::create([
            'title' => $postValueObjects->title,
            'body' => $postValueObjects->body,
            'user_id' => $postValueObjects->user_id,
        ]);
    }

}
