<?php

namespace App\Http\Controllers;

use App\topper;
use Illuminate\Http\Request;
use Citco\Carbon;
use Intervention\Image\Facades\Image;


class TopperController extends Controller
{

    public function index()
    {
        $toppers = topper::orderBy('created_at','asc')->get();
       return view ('backend.topper.index', compact('toppers'));

    }


    public function create()
    {
        return view ('backend.topper.create');
    }


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

        if($request->hasFile('flag1')){
            $file= $request->file('flag1');
            $data['flag1']= $this->imageUpload($file);

        }
        else{
            $data['flag1']=null;
        }

        if($request->hasFile('flag2')){
            $file= $request->file('flag2');
            $data['flag2']= $this->imageUpload($file);

        }
        else{
            $data['flag2']=null;
        }

        if($request->hasFile('flag3')){
            $file= $request->file('flag3');
            $data['flag3']= $this->imageUpload($file);

        }
        else{
            $data['flag3']=null;
        }

        topper::create($data);
        session()->flash('msg','Category Inserted Successfully');
        return redirect(route('topper.index'));

    }


    public function show(topper $topper)
    {
        //
    }


    public function edit($id)
    {
        $topper=topper::find($id);
        return view ('backend/topper/edit',compact('topper'));
    }


    public function update(Request $request, $id)
    {
        $topper = topper::find($id);
        $data= $request->all();
        if($request->hasFile('icon1')){
            $file= $request->file('icon1');
            $data['icon1']= $this->cimageUpload($file);

        }
        else{
            $data['icon1']= $topper->icon1;
        }
        if($request->hasFile('icon2')){
            $file= $request->file('icon2');
            $data['icon2']= $this->cimageUpload($file);

        }
        else{
            $data['icon2']=$topper->icon2;
        }

        if($request->hasFile('flag1')){
            $file= $request->file('flag1');
            $data['flag1']= $this->imageUpload($file);

        }
        else{
            $data['flag1']= $topper->flag1;
        }

        if($request->hasFile('flag2')){
            $file= $request->file('flag2');
            $data['flag2']= $this->imageUpload($file);

        }
        else{
            $data['flag2']=$topper->flag2;
        }

        if($request->hasFile('flag3')){
            $file= $request->file('flag3');
            $data['flag3']= $this->imageUpload($file);

        }
        else{
            $data['flag3']=$topper->flag3;
        }

        $topper->update($data);
        session()->flash('msg','topper Updated Successfully');
        return redirect(route('topper.index'));
    }


    public function destroy($id)
    {
        topper::destroy($id);
        session()->flash('msg','Brand Deleted Successfully');
        return redirect(route('topper.index'));
    }
    public function imageUpload($file)
    {
        $path= 'backend/assets/images/topper/';
        $ImageName= Carbon::now();
        $ImageName= str_replace([' ',':'], '-',$ImageName);
        $string = rand(0,999);
        $image_file_name=$ImageName.$string .'.'.$file->getClientOriginalExtension();
        Image::make($file)->fit(24,16)->save($path.$image_file_name);
        return $image_file_name;

    }
    public function cimageUpload($file)
    {
        $path= 'backend/assets/images/topper/';
        $ImageName= Carbon::now();
        $ImageName= str_replace([' ',':'], '-',$ImageName);
        $string = rand(0,999);
        $image_file_name=$ImageName.$string .'.'.$file->getClientOriginalExtension();
        Image::make($file)->fit(18,14)->save($path.$image_file_name);
        return $image_file_name;

    }


}
