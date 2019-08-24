<?php

namespace App\Providers;

use App\About;
use App\Category;
use App\Contact;
use App\footer;
use App\home_about;
use App\home_category;
use App\home_product;
use App\home_service;
use App\logo;
use App\Slider;
use App\menu;
use App\News;
use App\Product;
use App\Project;
use App\topper;
use App\Service;
use App\Technology;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }






    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $abouts= About::orderBy('created_at','desc')->get();
        $categories=Category::With('product','project')->get();
        $contacts= Contact::orderBy('created_at','desc')->get();
        $footers = footer::orderBy('created_at','asc')->get();
        $home_abouts = home_about::orderBy('created_at','asc')->get();
        $home_categories = home_category::orderBy('created_at','asc')->get();
        $home_products = home_product::orderBy('created_at','asc')->get();
        $home_services = home_service::orderBy('created_at','asc')->get();
        $logos= logo::orderBy('created_at','desc')->get();
        $menus = menu::with('submenu')->orderBy('order','asc')->get();
        $news= News::orderBy('created_at','desc')->get();
        $products = Product::all();
        $projects = Project::all();
        $services= Service::orderBy('created_at','desc')->get();
        $technologies= Technology::orderBy('created_at','desc')->get();
        $toppers = topper::orderBy('created_at','asc')->get();
        $sliders = Slider::orderBy('created_at','asc')->get();


        $category_sidebar = Category::all();
        View::share(['category_sidebar'=>$category_sidebar,'menus'=>$menus,'logos'=>$logos,
            'toppers'=>$toppers ,'contacts'=>$contacts,'abouts'=>$abouts,'categories'=>$categories,
            'footers'=>$footers,'home_abouts'=>$home_abouts,'home_categories'=>$home_categories,
            'home_products'=>$home_products,'home_services'=>$home_services,'news'=>$news,'products'=>$products,
            'projects'=>$projects,'services'=>$services,'technologies'=>$technologies,'sliders'=>$sliders

        ]);
    }
}
