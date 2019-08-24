<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Citco\Carbon;
use Intervention\Image\Facades\Image;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders= Slider::orderBy('created_at','desc')->get();
        return view ('backend.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.slider.create');
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

        if($request->hasFile('slider_image')){
            $file= $request->file('slider_image');
            $data['slider_image']= $this->imageUpload($file);

        }
        else{
            $data['slider_image']=null;
        }

        Slider::create($data);
        session()->flash('msg','Slider Inserted Successfully');
        return redirect(route('slider.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider=Slider::find($id);
        return view ('backend/slider/edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);
        $data=$request->all();

        if($request->hasFile('slider_image')){
            $file= $request->file('slider_image');
            $data['slider_image']= $this->imageUpload($file);

        }
        else{
            $data['slider_image']= $slider->slider_image;
        }


        $slider->update($data);
        session()->flash('msg','slider Updated Successfully');
        return redirect(route('slider.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slider::destroy($id);
        session()->flash('msg','slider Deleted Successfully');
        return redirect(route('slider.index'));
    }

    public function imageUpload($file)
    {
        $path= 'backend/assets/images/slider/';
        $ImageName= Carbon::now();
        $ImageName= str_replace([' ',':'], '-',$ImageName);
        $string = rand(0,999);
        $image_file_name=$ImageName.$string.'.'.$file->getClientOriginalExtension();
        Image::make($file)->save($path.$image_file_name);
        return $image_file_name;

    }
}
