<?php

namespace App\Http\Controllers;

use App\home_category;
use Illuminate\Http\Request;
use Citco\Carbon;
use Intervention\Image\Facades\Image;


class HomeCategoryController extends Controller
{
    public function index()
    {

        $home_categories= home_category::orderBy('created_at','desc')->get();
        return view ('backend.home_category.index', compact('home_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.home_category.create');
    }

    /**
     * protected $fillable=['title','icon1','text1','icon2','text2','icon3','text3',
    'icon4','text4','icon5','text5'];
     */
    public function store(Request $request)
    {

        $data=$request->all();

        if($request->hasFile('icon1')){
            $file= $request->file('icon1');
            $data['icon1']= $this->imageUpload($file);

        }
        else{
            $data['icon1']=null;
        }

        if($request->hasFile('icon2')){
            $file= $request->file('icon2');
            $data['icon2']= $this->imageUpload($file);

        }
        else{
            $data['icon2']=null;
        }
        if($request->hasFile('icon3')){
            $file= $request->file('icon3');
            $data['icon3']= $this->imageUpload($file);

        }
        else{
            $data['icon3']=null;
        }
        if($request->hasFile('icon4')){
            $file= $request->file('icon4');
            $data['icon4']= $this->imageUpload($file);

        }
        else{
            $data['icon4']=null;
        }
        if($request->hasFile('icon5')){
            $file= $request->file('icon5');
            $data['icon5']= $this->imageUpload($file);

        }
        else{
            $data['icon5']=null;
        }


        home_category::create($data);
        session()->flash('msg','');
        return redirect(route('home_category.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\topper  $topper
     * @return \Illuminate\Http\Response
     */
    public function show(home_category $home_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\topper  $topper
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $topper=Topper::find($topper);
//        return view ('backend/topper/edit',compact('topper'));

        $home_category=home_category::find($id);
        return view ('backend/home_category/edit',compact('home_category'));
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
        $home_category = home_category::find($id);
        $data= $request->all();
        if($request->hasFile('icon1')){
            $file= $request->file('icon1');
            $data['icon1']= $this->imageUpload($file);

        }
        else{
            $data['icon1']=$home_category->icon1;
        }

        if($request->hasFile('icon2')){
            $file= $request->file('icon2');
            $data['icon2']= $this->imageUpload($file);

        }
        else{
            $data['icon2']=$home_category->icon2;
        }
        if($request->hasFile('icon3')){
            $file= $request->file('icon3');
            $data['icon3']= $this->imageUpload($file);

        }
        else{
            $data['icon3']=$home_category->icon3;
        }
        if($request->hasFile('icon4')){
            $file= $request->file('icon4');
            $data['icon4']= $this->imageUpload($file);

        }
        else{
            $data['icon4']=$home_category->icon4;
        }
        if($request->hasFile('icon5')){
            $file= $request->file('icon5');
            $data['icon5']= $this->imageUpload($file);

        }
        else{
            $data['icon5']=$home_category->icon5;
        }

        $home_category->update($data);
        session()->flash('msg','home_category Updated Successfully');
        return redirect(route('home_category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\topper  $topper
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        home_category::destroy($id);
        session()->flash('msg','home_category Deleted Successfully');
        return redirect(route('home_category.index'));
    }
    public function imageUpload($file)
    {
        $path= 'backend/assets/images/home_category/';
        $ImageName= Carbon::now();
        $ImageName= str_replace([' ',':'], '-',$ImageName);
        $string = rand(0,999);
        $image_file_name=$ImageName.$string.'.'.$file->getClientOriginalExtension();
        Image::make($file)->fit(86,200)->save($path.$image_file_name);
        return $image_file_name;

    }
}
