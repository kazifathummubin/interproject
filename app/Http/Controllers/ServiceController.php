<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Citco\Carbon;
use Intervention\Image\Facades\Image;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services= Service::orderBy('created_at','desc')->get();
        return view ('backend.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.service.create');
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

        if($request->hasFile('service_photo1')){
            $file= $request->file('service_photo1');
            $data['service_photo1']= $this->imageUpload($file);

        }
        else{
            $data['service_photo1']=null;
        }

        if($request->hasFile('service_photo2')){
            $file= $request->file('service_photo2');
            $data['service_photo2']= $this->imageUpload($file);

        }
        else{
            $data['service_photo2']=null;
        }

        if($request->hasFile('service_photo3')){
            $file= $request->file('service_photo3');
            $data['service_photo3']= $this->imageUpload($file);

        }
        else{
            $data['service_photo3']=null;
        }
        if($request->hasFile('service_photo4')){
            $file= $request->file('service_photo4');
            $data['service_photo4']= $this->imageUpload($file);

        }
        else{
            $data['service_photo4']=null;
        }

        if($request->hasFile('service_photo5')){
            $file= $request->file('service_photo5');
            $data['service_photo5']= $this->imageUpload($file);

        }
        else{
            $data['service_photo5']=null;
        }
        if($request->hasFile('service_photo6')){
            $file= $request->file('service_photo6');
            $data['service_photo6']= $this->imageUpload($file);

        }
        else{
            $data['service_photo6']=null;
        }
        if($request->hasFile('service_photo7')){
            $file= $request->file('service_photo7');
            $data['service_photo7']= $this->imageUpload($file);

        }
        else{
            $data['service_photo7']=null;
        }
        if($request->hasFile('service_photo8')){
            $file= $request->file('service_photo8');
            $data['service_photo8']= $this->imageUpload($file);

        }
        else{
            $data['service_photo8']=null;
        }
        if($request->hasFile('service_photo9')){
            $file= $request->file('service_photo9');
            $data['service_photo9']= $this->imageUpload($file);

        }
        else{
            $data['service_photo9']=null;
        }


        Service::create($data);
        session()->flash('msg','');
        return redirect(route('service.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service=Service::find($id);
        return view ('backend/service/show',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service=Service::find($id);
        return view ('backend/service/edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $data=$request->all();
        if($request->hasFile('service_photo1')){
            $file= $request->file('service_photo1');
            $data['service_photo1']= $this->imageUpload($file);

        }
        else{
            $data['service_photo1']=$service->service_photo1;
        }

        if($request->hasFile('service_photo2')){
            $file= $request->file('service_photo2');
            $data['service_photo2']= $this->imageUpload($file);

        }
        else{
            $data['service_photo2']=$service->service_photo2;
        }

        if($request->hasFile('service_photo3')){
            $file= $request->file('service_photo3');
            $data['service_photo3']= $this->imageUpload($file);

        }
        else{
            $data['service_photo3']=$service->service_photo3;
        }
        if($request->hasFile('service_photo4')){
            $file= $request->file('service_photo4');
            $data['service_photo4']= $this->imageUpload($file);

        }
        else{
            $data['service_photo4']=$service->service_photo4;
        }

        if($request->hasFile('service_photo5')){
            $file= $request->file('service_photo5');
            $data['service_photo5']= $this->imageUpload($file);

        }
        else{
            $data['service_photo5']=$service->service_photo5;
        }
        if($request->hasFile('service_photo6')){
            $file= $request->file('service_photo6');
            $data['service_photo6']= $this->imageUpload($file);

        }
        else{
            $data['service_photo6']=$service->service_photo6;
        }
        if($request->hasFile('service_photo7')){
            $file= $request->file('service_photo7');
            $data['service_photo7']= $this->imageUpload($file);

        }
        else{
            $data['service_photo7']=$service->service_photo7;
        }
        if($request->hasFile('service_photo8')){
            $file= $request->file('service_photo8');
            $data['service_photo8']= $this->imageUpload($file);

        }
        else{
            $data['service_photo8']=$service->service_photo8;
        }
        if($request->hasFile('service_photo9')){
            $file= $request->file('service_photo9');
            $data['service_photo9']= $this->imageUpload($file);

        }
        else{
            $data['service_photo9']=$service->service_photo9;
        }

        $service->update($data);
        session()->flash('msg','');
        return redirect(route('service.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::destroy($id);
        session()->flash('msg','');
        return redirect(route('service.index'));
    }


    public function imageUpload($file)
    {
        $path= 'backend/assets/images/service/';
        $ImageName= Carbon::now();
        $ImageName= str_replace([' ',':'], '-',$ImageName);
        $string = rand(0,999);
        $image_file_name=$ImageName.$string.'.'.$file->getClientOriginalExtension();
        Image::make($file)->fit(600,600)->save($path.$image_file_name);
        return $image_file_name;

    }
}
