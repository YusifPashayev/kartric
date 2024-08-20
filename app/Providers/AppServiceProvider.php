<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\CustomerReview;
use App\Models\Product;
use App\Models\Service;
use App\Observers\BlogObserver;
use App\Observers\CategoryObserver;
use App\Observers\CustomerReviewObserver;
use App\Observers\ProductObserver;
use App\Observers\ServiceObserver;
use Illuminate\Support\ServiceProvider;

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
        Service::observe(ServiceObserver::class);
        Product::observe(ProductObserver::class);
        Blog::observe(BlogObserver::class);
        CustomerReview::observe(CustomerReviewObserver::class);
        Category::observe(CategoryObserver::class);
        //
    }

    
}
