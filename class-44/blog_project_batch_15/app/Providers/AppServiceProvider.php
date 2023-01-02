<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Setting;
use View;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('frontEnd.include.header', function ($view){
            $view->with('categories', Category::where('status',1)->get())
            ->with('settings', Setting::first());
        });
        View::composer('frontEnd.include.footer', function ($view){
            $view->with('categories', Category::where('status',1)->get())
            ->with(
                'blogs', DB::table('blogs')->join('categories','categories.id','blogs.category_id')->select('blogs.*','categories.category_name')->take(5)->get());
        });
        View::composer('admin.master', function ($view){
            $view->with('settings', Setting::first());
        });
    }
}
