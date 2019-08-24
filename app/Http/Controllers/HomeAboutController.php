<?php

namespace App\Http\Controllers;

use App\home_about;
use Illuminate\Http\Request;
use Citco\Carbon;
use Intervention\Image\Facades\Image;
class HomeAboutController extends Controller
{
    public function index()
    {

        $home_abouts= home_about::orderBy('created_at','desc')->get();
        return view ('backend.home_about.index', compact('home_abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.home_about.create');
    }

    /**
     * protected $fillable=['title','icon1','text1','icon2','text2','icon3','text3',
    'icon4','text4','icon5','text5'];
     */
    public function store(Request $request)
    {

        $data=$request->all();
        if($request->hasFile('photo')){
            $file= $request->file('photo');
            $data['photo']= $this->imageUpload($file);

        }
        else{
            $data['photo']=null;
        }

        home_about::create($data);
        session()->flash('msg','');
        return redirect(route('home_about.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\topper  $topper
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\topper  $topper
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $home_about= home_about::find($id);
        return view('backend/home_about/edit',compact('home_about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\topper  $topper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $home_about = home_about::find($id);
        $data= $request->all();
        if($request->hasFile('photo')){
            $file= $request->file('photo');
            $data['photo']= $this->imageUpload($file);

        }
        else{
            $data['photo']=$home_about->photo;
        }

        $home_about->update($data);
        session()->flash('msg','home_about Updated Successfully');
        return redirect(route('home_about.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\topper  $topper
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        home_about::destroy($id);
        session()->flash('msg','home_about Deleted Successfully');
        return redirect(route('home_about.index'));
    }
    public function imageUpload($file)
    {
        $path= 'backend/assets/images/home_about/';
        $ImageName= Carbon::now();
        $ImageName= str_replace([' ',':'], '-',$ImageName);
        $string = rand(0,999);
        $image_file_name=$ImageName.$string.'.'.$file->getClientOriginalExtension();
        Image::make($file)->fit(800,600)->save($path.$image_file_name);
        return $image_file_name;

    }
}
