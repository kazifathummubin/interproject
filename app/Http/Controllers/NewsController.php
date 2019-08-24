<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Citco\Carbon;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news= News::orderBy('created_at','desc')->get();
        return view ('backend.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data=$request->all();

        if($request->hasFile('news_photo')){
            $file= $request->file('news_photo');
            $data['news_photo']= $this->imageUpload($file);

        }
        else{
            $data['news_photo']=null;
        }

   //    dd($data);
        News::create($data);
        session()->flash('msg','news Inserted Successfully');
        return redirect(route('news.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news=News::find($id);
        return view ('backend/news/edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $data=$request->all();

        if($request->hasFile('news_photo')){
            $file= $request->file('news_photo');
            $data['news_photo']= $this->imageUpload($file);

        }
        else{
            $data['techphoto']=$news->news_photo;
        }


        $news->update($data);
        session()->flash('msg','news Updated Successfully');
        return redirect(route('news.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::destroy($id);
        session()->flash('msg','News Deleted Successfully');
        return redirect(route('news.index'));
    }


    public function imageUpload($file)
    {
        $path= 'backend/assets/images/news/';
        $ImageName= Carbon::now();
        $ImageName= str_replace([' ',':'], '-',$ImageName);
        $string = rand(0,999);
        $image_file_name=$ImageName.$string.'.'.$file->getClientOriginalExtension();
        Image::make($file)->fit(1000,500)->save($path.$image_file_name);
        return $image_file_name;

    }
}
