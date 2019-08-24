<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Citco\Carbon;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts= About::orderBy('created_at','desc')->get();
        return view ('backend.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.about.create');
    }

    /**
     *

     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();

        if($request->hasFile('aboutcontentimage')){
            $file= $request->file('aboutcontentimage');
            $data['aboutcontentimage']= $this->bimageUpload($file);

        }
        else{
            $data['aboutcontentimage']=null;
        }

        if($request->hasFile('ourteam_photo1')){
            $file= $request->file('ourteam_photo1');
            $data['ourteam_photo1']= $this->timageUpload($file);

        }
        else{
            $data['ourteam_photo1']=null;
        }

        if($request->hasFile('ourteam_photo2')){
            $file= $request->file('ourteam_photo2');
            $data['ourteam_photo2']= $this->timageUpload($file);

        }
        else{
            $data['ourteam_photo2']=null;
        }

        if($request->hasFile('ourteam_photo3')){
            $file= $request->file('ourteam_photo3');
            $data['ourteam_photo3']= $this->timageUpload($file);

        }
        else{
            $data['ourteam_photo3']=null;
        }

        if($request->hasFile('ourclint_photo1')){
            $file= $request->file('ourclint_photo1');
            $data['ourclint_photo1']= $this->imageUpload($file);

        }
        else{
            $data['ourclint_photo1']=null;
        }
        if($request->hasFile('ourclint_photo2')){
            $file= $request->file('ourclint_photo2');
            $data['ourclint_photo2']= $this->imageUpload($file);

        }
        else{
            $data['ourclint_photo2']=null;
        }

        if($request->hasFile('ourclint_photo3')){
            $file= $request->file('ourclint_photo3');
            $data['ourclint_photo3']= $this->imageUpload($file);

        }
        else{
            $data['ourclint_photo3']=null;
        }

        if($request->hasFile('ourclint_photo4')){
            $file= $request->file('ourclint_photo4');
            $data['ourclint_photo4']= $this->imageUpload($file);

        }
        else{
            $data['ourclint_photo4']=null;
        }

        if($request->hasFile('ourclint_photo5')){
            $file= $request->file('ourclint_photo5');
            $data['ourclint_photo5']= $this->imageUpload($file);

        }
        else{
            $data['ourclint_photo5']=null;
        }

        if($request->hasFile('ourclint_photo6')){
            $file= $request->file('ourclint_photo6');
            $data['ourclint_photo6']= $this->imageUpload($file);

        }
        else{
            $data['ourclint_photo6']=null;
        }

        if($request->hasFile('ourclint_photo7')){
            $file= $request->file('ourclint_photo7');
            $data['ourclint_photo7']= $this->imageUpload($file);

        }
        else{
            $data['ourclint_photo7']=null;
        }

        if($request->hasFile('ourclint_photo8')){
            $file= $request->file('ourclint_photo8');
            $data['ourclint_photo8']= $this->imageUpload($file);

        }
        else{
            $data['ourclint_photo8']=null;
        }

        if($request->hasFile('ourclint_photo9')){
            $file= $request->file('ourclint_photo9');
            $data['ourclint_photo9']= $this->imageUpload($file);

        }
        else{
            $data['ourclint_photo9']=null;
        }

        if($request->hasFile('ourclint_photo10')){
            $file= $request->file('ourclint_photo10');
            $data['ourclint_photo10']= $this->imageUpload($file);

        }
        else{
            $data['ourclint_photo10']=null;
        }
        if($request->hasFile('ourclint_photo11')){
            $file= $request->file('ourclint_photo11');
            $data['ourclint_photo11']= $this->imageUpload($file);

        }
        else{
            $data['ourclint_photo11']=null;
        }

        //dd($data);
        About::create($data);

        session()->flash('msg','');
        return redirect(route('about.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $about=About::find($id);
        return view ('backend/about/show',compact('about'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about=About::find($id);
        return view ('backend/about/edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $about = About::find($id);
        $data=$request->all();
        if($request->hasFile('aboutcontentimage')){
            $file= $request->file('aboutcontentimage');
            $data['aboutcontentimage']= $this->bimageUpload($file);

        }
        else{
            $data['aboutcontentimage']=$about->aboutcontentimage;
        }

        if($request->hasFile('ourteam_photo1')){
            $file= $request->file('ourteam_photo1');
            $data['ourteam_photo1']= $this->timageUpload($file);

        }
        else{
            $data['ourteam_photo1']=$about->ourteam_photo1;
        }

        if($request->hasFile('ourteam_photo2')){
            $file= $request->file('ourteam_photo2');
            $data['ourteam_photo2']= $this->timageUpload($file);

        }
        else{
            $data['ourteam_photo2']=$about->ourteam_photo2;
        }

        if($request->hasFile('ourteam_photo3')){
            $file= $request->file('ourteam_photo3');
            $data['ourteam_photo3']= $this->timageUpload($file);

        }
        else{
            $data['ourteam_photo3']=$about->ourteam_photo3;
        }

        if($request->hasFile('ourclint_photo1')){
            $file= $request->file('ourclint_photo1');
            $data['ourclint_photo1']= $this->imageUpload($file);

        }
        else{
            $data['ourclint_photo1']=$about->ourclint_photo1;
        }
        if($request->hasFile('ourclint_photo2')){
            $file= $request->file('ourclint_photo2');
            $data['ourclint_photo2']= $this->imageUpload($file);

        }
        else{
            $data['ourclint_photo2']=$about->ourclint_photo2;
        }

        if($request->hasFile('ourclint_photo3')){
            $file= $request->file('ourclint_photo3');
            $data['ourclint_photo3']= $this->imageUpload($file);

        }
        else{
            $data['ourclint_photo3']=$about->ourclint_photo3;
        }

        if($request->hasFile('ourclint_photo4')){
            $file= $request->file('ourclint_photo4');
            $data['ourclint_photo4']= $this->imageUpload($file);

        }
        else{
            $data['ourclint_photo4']=$about->ourclint_photo4;
        }

        if($request->hasFile('ourclint_photo5')){
            $file= $request->file('ourclint_photo5');
            $data['ourclint_photo5']= $this->imageUpload($file);

        }
        else{
            $data['ourclint_photo5']=$about->ourclint_photo5;
        }

        if($request->hasFile('ourclint_photo6')){
            $file= $request->file('ourclint_photo6');
            $data['ourclint_photo6']= $this->imageUpload($file);

        }
        else{
            $data['ourclint_photo6']=$about->ourclint_photo6;
        }

        if($request->hasFile('ourclint_photo7')){
            $file= $request->file('ourclint_photo7');
            $data['ourclint_photo7']= $this->imageUpload($file);

        }
        else{
            $data['ourclint_photo7']=$about->ourclint_photo7;
        }

        if($request->hasFile('ourclint_photo8')){
            $file= $request->file('ourclint_photo8');
            $data['ourclint_photo8']= $this->imageUpload($file);

        }
        else{
            $data['ourclint_photo8']=$about->ourclint_photo8;
        }

        if($request->hasFile('ourclint_photo9')){
            $file= $request->file('ourclint_photo9');
            $data['ourclint_photo9']= $this->imageUpload($file);

        }
        else{
            $data['ourclint_photo9']=$about->ourclint_photo9;
        }

        if($request->hasFile('ourclint_photo10')){
            $file= $request->file('ourclint_photo10');
            $data['ourclint_photo10']= $this->imageUpload($file);

        }
        else{
            $data['ourclint_photo10']=$about->ourclint_photo10;
        }
        if($request->hasFile('ourclint_photo11')){
            $file= $request->file('ourclint_photo11');
            $data['ourclint_photo11']= $this->imageUpload($file);

        }
        else{
            $data['ourclint_photo11']=$about->ourclint_photo11;
        }
        $about->update($data);
        session()->flash('msg','');
        return redirect(route('about.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        About::destroy($id);
        session()->flash('msg','about Deleted Successfully');
        return redirect(route('about.index'));
    }


    public function bimageUpload($file)
    {
        $path= 'backend/assets/images/about/';
        $ImageName= Carbon::now();
        $ImageName= str_replace([' ',':'], '-',$ImageName);
        $string = rand(0,999);
        $image_file_name=$ImageName.$string.'.'.$file->getClientOriginalExtension();
        Image::make($file)->fit(1500,1800)->save($path.$image_file_name);
        return $image_file_name;

    }
    public function timageUpload($file)
    {
        $path= 'backend/assets/images/about/';
        $ImageName= Carbon::now();
        $ImageName= str_replace([' ',':'], '-',$ImageName);
        $string = rand(0,999);
        $image_file_name=$ImageName.$string.'.'.$file->getClientOriginalExtension();
        Image::make($file)->fit(264,400)->save($path.$image_file_name);
        return $image_file_name;

    }
    public function imageUpload($file)
    {
        $path= 'backend/assets/images/about/';
        $ImageName= Carbon::now();
        $ImageName= str_replace([' ',':'], '-',$ImageName);
        $string = rand(0,999);
        $image_file_name=$ImageName.$string.'.'.$file->getClientOriginalExtension();
        Image::make($file)->save($path.$image_file_name);
        return $image_file_name;

    }
}
