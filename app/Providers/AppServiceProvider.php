<?php

namespace App\Providers;

use App\Models\Author;
use App\Models\Gallery;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\ServiceProvider;
use Laravel\Head\Enums\OgType;
use Laravel\Head\Facades\Head;
use Laravel\Head\HeadBuilder;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::preventLazyLoading(! $this->app->isProduction());

        Head::defaults(function (HeadBuilder $head) {
            $head
                ->title('Kathmandu Bible Institute', suffix: ' - Kathmandu Bible Institute')
                ->description('Equipping leaders for the Church of Nepal.')
                ->canonical()
                ->og(siteName: 'Kathmandu Bible Institute', type: OgType::Website, image: asset('images/og-img-kbi.png'))
                ->searchableByRobots();
        });

        // Automatically update sitemap when content changes
        $updateSitemap = function () {
            Artisan::call('sitemap:generate');
        };

        Post::saved($updateSitemap);
        Post::deleted($updateSitemap);
        Gallery::saved($updateSitemap);
        Gallery::deleted($updateSitemap);
        Author::saved($updateSitemap);
        Author::deleted($updateSitemap);
    }
}
