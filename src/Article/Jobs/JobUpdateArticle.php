<?php

namespace Src\Article\Jobs;

use App\Models\Article;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Src\Article\Repositories\ArticleRepository;
use Src\Article\ValueObjects\UpdateValueObjects;

class JobUpdateArticle implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(
        public UpdateValueObjects $postValueObjects,
        public Article $article
    )
    {


    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        ArticleRepository::update(
            $this->postValueObjects,
            $this->article
        );
    }
}
