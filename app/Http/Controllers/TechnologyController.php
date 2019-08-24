<?php

namespace App\Http\Controllers;

use App\Technology;
use Illuminate\Http\Request;
use Citco\Carbon;
use Intervention\Image\Facades\Image;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $technologies= Technology::orderBy('created_at','desc')->get();
        return view ('backend.technology.index', compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.technology.create');
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

        if($request->hasFile('techphoto')){
            $file= $request->file('techphoto');
            $data['techphoto']= $this->imageUpload($file);

        }
        else{
            $data['techphoto']=null;
        }

        Technology::create($data);
        session()->flash('msg','Technology Inserted Successfully');
        return redirect(route('technology.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $technology=Technology::find($id);
        return view ('backend/technology/show',compact('technology'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $technology=Technology::find($id);
        return view ('backend/technology/edit',compact('technology'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $technology = Technology::find($id);
        $data=$request->all();

        if($request->hasFile('techphoto')){
            $file= $request->file('techphoto');
            $data['techphoto']= $this->imageUpload($file);

        }
        else{
            $data['techphoto']=$technology->techphoto;
        }


        $technology->update($data);
        session()->flash('msg','technology Updated Successfully');
        return redirect(route('technology.index'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Technology  $technology
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Technology::destroy($id);
        session()->flash('msg','Technology Deleted Successfully');
        return redirect(route('technology.index'));
    }

    public function imageUpload($file)
    {
        $path= 'backend/assets/images/technology/';
        $ImageName= Carbon::now();
        $ImageName= str_replace([' ',':'], '-',$ImageName);
        $string = rand(0,999);
        $image_file_name=$ImageName.$string.'.'.$file->getClientOriginalExtension();
        Image::make($file)->fit(1000,500)->save($path.$image_file_name);
        return $image_file_name;

    }


}
