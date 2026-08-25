<?php

namespace App\Console\Commands;

use App\Models\Author;
use App\Models\Gallery;
use App\Models\Post;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap.';

    public function handle()
    {
        $sitemap = Sitemap::create()
            ->add(Url::create('/'))
            ->add(Url::create('/introduction'))
            ->add(Url::create('/vision-purpose-and-mission'))
            ->add(Url::create('/core-values'))
            ->add(Url::create('/statement-of-faith'))
            ->add(Url::create('/message-from-the-president'))
            ->add(Url::create('/board-members'))
            ->add(Url::create('/advisors'))
            ->add(Url::create('/faculty'))
            ->add(Url::create('/academic-programs/certificate-in-theology-c-th'))
            ->add(Url::create('/academic-programs/diploma-in-theology-dip-th'))
            ->add(Url::create('/academic-programs/bachelor-of-theology-b-th'))
            ->add(Url::create('/academic-programs/m-a-in-christian-missions'))
            ->add(Url::create('/posts'))
            ->add(Url::create('/galleries'))
            ->add(Url::create('/support-us'));

        Post::all()->each(function (Post $post) use ($sitemap) {
            $sitemap->add(Url::create("/post/{$post->slug}")->setLastModificationDate($post->updated_at));
        });

        Gallery::all()->each(function (Gallery $gallery) use ($sitemap) {
            $sitemap->add(Url::create("/galleries/{$gallery->slug}")->setLastModificationDate($gallery->updated_at));
        });

        Author::all()->each(function (Author $author) use ($sitemap) {
            $sitemap->add(Url::create("/{$author->slug}/posts")->setLastModificationDate($author->updated_at));
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully.');
    }
}
