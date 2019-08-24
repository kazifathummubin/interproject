<?php

namespace App\Http\Controllers;

use App\logo;
use Illuminate\Http\Request;
use Citco\Carbon;
use Intervention\Image\Facades\Image;


class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $logos= logo::orderBy('created_at','desc')->get();
        return view ('backend.logo.index', compact('logos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.logo.create');
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

        if($request->hasFile('logo')){
            $file= $request->file('logo');
            $data['logo']= $this->imageUpload($file);

        }
        else{
            $data['logo']=null;
        }

        if($request->hasFile('favicon')){
            $file= $request->file('favicon');
            $data['favicon']= $this->fimageUpload($file);

        }
        else{
            $data['favicon']=null;
        }



        logo::create($data);
        session()->flash('msg','logo Inserted Successfully');
        return redirect(route('logo.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\topper  $topper
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\topper  $topper
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $logo=logo::find($id);
        return view ('backend/logo/edit',compact('logo'));
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
        $logo = logo::find($id);
        $data=$request->all();

        if($request->hasFile('logo')){
            $file= $request->file('logo');
            $data['logo']= $this->imageUpload($file);

        }
        else{
            $data['logo']=null;
        }

        if($request->hasFile('favicon')){
            $file= $request->file('favicon');
            $data['favicon']= $this->fimageUpload($file);

        }
        else{
            $data['favicon']=null;
        }

        $logo->update($data);
        session()->flash('msg','logo Updated Successfully');
        return redirect(route('logo.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\topper  $topper
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        logo::destroy($id);
        session()->flash('msg','logo Deleted Successfully');
        return redirect(route('logo.index'));
    }
    public function imageUpload($file)
    {
        $path= 'backend/assets/images/logo/';
        $ImageName= Carbon::now();
        $ImageName= str_replace([' ',':'], '-',$ImageName);
        $string = rand(0,999);
        $image_file_name=$ImageName.$string.'.'.$file->getClientOriginalExtension();
        Image::make($file)->fit(215,70)->save($path.$image_file_name);
        return $image_file_name;

    }
    public function fimageUpload($file)
    {
        $path= 'backend/assets/images/logo/';
        $ImageName= Carbon::now();
        $ImageName= str_replace([' ',':'], '-',$ImageName);
        $string = rand(0,999);
        $image_file_name=$ImageName.$string.'.'.$file->getClientOriginalExtension();
        Image::make($file)->fit(32,32)->save($path.$image_file_name);
        return $image_file_name;

    }
}
