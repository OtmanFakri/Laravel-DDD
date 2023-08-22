<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

use Src\Article\Jobs\JobCreateArticle;
use Src\Article\Jobs\JobUpdateArticle;
use Src\Article\Repositories\ArticleRepository;
use Src\Article\Requests\CreateRequests;
use Src\Article\Requests\UpdateRequests;
use Src\Article\Resources\ArticleRousource;
use Src\Article\Factories\PostFactory;


class ArticleController extends Controller
{
    /**
     * Create a new ArticleController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        $articles =QueryBuilder::for(Article::class)
            ->allowedIncludes(['user'])
            ->paginate(5);
        return ArticleRousource::collection($articles);
    }

    public function show(Article $article)
    {
        //$articles =QueryBuilder::for(Article::class)
        //    ->allowedIncludes(['user'])
        //    ->where('id',$article->id)
         //   ->first();

        return ArticleRepository::find($article->id);
    }

    public function store(CreateRequests $CreateArtocle)
    {

        //$article = new ArticleRepository();

        JobCreateArticle::dispatch(
            PostFactory::create($CreateArtocle->validated())
        );
       // $Storenew= $article->create(
        //    PostFactory::create($CreateArtocle->validated())
        //);
        //$article =$CreateArtocle->validated();

        return response()->json($CreateArtocle->validated(), 201);

    }

    public function update(UpdateRequests $request, Article $article)
    {
        //Autherization Policy

        //$update= ArticleRepository::update(
        //    PostFactory::update($request->validated()),
        //    $article
        //);
        JobUpdateArticle::dispatch(
            PostFactory::update($request->validated()),
            $article
        );


        return response()->json($request->validated(), 201);
    }

    public function delete(Article $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
}
