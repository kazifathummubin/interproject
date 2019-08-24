<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Project;

class fontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view ('fontend/page/index');
    }

    public function about()
    {
        return view ('fontend/page/about');
    }

    public function product()
    {
        return view ('fontend/page/product');
    }

    public function service()
    {
        return view ('fontend/page/service');
    }
    public function productbyCategory($id)
    {

        $products = Product::where('category_id', $id)->get();
        $title = Category::findOrFail($id);
        $title = $title->name;

        return view('fontend/page/productbycategory', compact('products', 'title'));
    }


    public function project()
    {
        return view ('fontend/page/project');
    }
    public function projectbyCategory($id)
    {
        $projects = Project::where('category_id', $id)->get();
        $title = Category::findOrFail($id);
        $title = $title->name;
        return view('fontend/page/projectbycategory', compact('projects', 'title'));


    }


    public function technology()
    {
        return view ('fontend/page/technology');
    }

    public function news()
    {
        return view ('fontend/page/news');
    }

    public function contact()
    {
        return view ('fontend/page/contact');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
