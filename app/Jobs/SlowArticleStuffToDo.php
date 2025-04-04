<?php

namespace App\Jobs;

use App\Models\Article;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class SlowArticleStuffToDo implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public Article $article
    ) { }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Some really slow complex stuff that needs to be done
        // - Sending a mail to the editors
        // - Regenerating the images and reziing them and watermarking them
        // - Send out a push notification
        dump('Doing some slow stuff for article: ' . $this->article->id);
        sleep(5);
        dump('Done with slow stuff for article: ' . $this->article->id);
    }
}
