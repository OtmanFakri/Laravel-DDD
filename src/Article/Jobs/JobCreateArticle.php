<?php

namespace Src\Article\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Src\Article\Repositories\ArticleRepository;
use Src\Article\ValueObjects\PostValueObjects;

class JobCreateArticle implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(
        public PostValueObjects $postValueObjects,
    )
    {

    }


    public function handle():void
    {
        ArticleRepository::create(
            $this->postValueObjects
        );
    }
}
