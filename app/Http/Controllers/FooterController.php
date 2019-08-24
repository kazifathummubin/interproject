<?php

namespace App\Http\Controllers;

use App\footer;
use Illuminate\Http\Request;
use Citco\Carbon;
use Intervention\Image\Facades\Image;


class FooterController extends Controller
{
    public function index()
    {
        $footers= footer::orderBy('created_at','desc')->get();
        return view ('backend.footer.index', compact('footers'));
    }

    /**


     */
    public function create()
    {
        return view ('backend.footer.create');
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

        if($request->hasFile('footerbackground')){
            $file= $request->file('footerbackground');
            $data['footerbackground']= $this->bimageUpload($file);

        }
        else{
            $data['footerbackground']=null;
        }

        if($request->hasFile('footerimage1')){
            $file= $request->file('footerimage1');
            $data['footerimage1']= $this->fimageUpload($file);

        }
        else{
            $data['footerimage1']=null;
        }

        if($request->hasFile('footerimage2')){
            $file= $request->file('footerimage2');
            $data['footerimage2']= $this->fimageUpload($file);

        }
        else{
            $data['footerimage2']=null;
        }

        if($request->hasFile('footerimage3')){
            $file= $request->file('footerimage3');
            $data['footerimage3']= $this->fimageUpload($file);

        }
        else{
            $data['footerimage3']=null;
        }

        if($request->hasFile('footerimage4')){
            $file= $request->file('footerimage4');
            $data['footerimage4']= $this->fimageUpload($file);

        }
        else{
            $data['footerimage4']=null;
        }
        if($request->hasFile('footerimage5')){
            $file= $request->file('footerimage5');
            $data['footerimage5']= $this->fimageUpload($file);

        }
        else{
            $data['footerimage5']=null;
        }

        if($request->hasFile('footerimage6')){
            $file= $request->file('footerimage6');
            $data['footerimage6']= $this->fimageUpload($file);

        }
        else{
            $data['footerimage6']=null;
        }

        if($request->hasFile('footerimage7')){
            $file= $request->file('footerimage7');
            $data['footerimage7']= $this->fimageUpload($file);

        }
        else{
            $data['footerimage7']=null;
        }

        if($request->hasFile('footerimage8')){
            $file= $request->file('footerimage8');
            $data['footerimage8']= $this->fimageUpload($file);

        }
        else{
            $data['footerimage8']=null;
        }

        if($request->hasFile('footericon1')){
            $file= $request->file('footericon1');
            $data['footericon1']= $this->cimageUpload($file);

        }
        else{
            $data['footericon1']=null;
        }

        if($request->hasFile('footericon2')){
            $file= $request->file('footericon2');
            $data['footericon2']= $this->cimageUpload($file);

        }
        else{
            $data['footericon2']=null;
        }

        if($request->hasFile('footericon3')){
            $file= $request->file('footericon3');
            $data['footericon3']= $this->cimageUpload($file);

        }
        else{
            $data['footericon4']=null;
        }

        if($request->hasFile('footericon4')){
            $file= $request->file('footericon4');
            $data['footericon4']= $this->cimageUpload($file);

        }
        else{
            $data['footericon5']=null;
        }

        if($request->hasFile('footericon5')){
            $file= $request->file('footericon5');
            $data['footericon5']= $this->cimageUpload($file);

        }
        else{
            $data['footericon5']=null;
        }

//dd($data);
        footer::create($data);

        session()->flash('msg','');
        return redirect(route('footer.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\topper  $topper
     * @return \Illuminate\Http\Response
     */
    public function show()
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
        $footer=footer::find($id);
        return view ('backend/footer/edit',compact('footer'));
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
        $footer = footer::find($id);
        $data=$request->all();
        if($request->hasFile('footerbackground')){
            $file= $request->file('footerbackground');
            $data['footerbackground']= $this->bimageUpload($file);

        }
        else{
            $data['footerbackground']=$footer->footerbackground;
        }

        if($request->hasFile('footerimage1')){
            $file= $request->file('footerimage1');
            $data['footerimage1']= $this->fimageUpload($file);

        }
        else{
            $data['footerimage1']=$footer->footerimage1;
        }

        if($request->hasFile('footerimage2')){
            $file= $request->file('footerimage2');
            $data['footerimage2']= $this->fimageUpload($file);

        }
        else{
            $data['footerimage2']=$footer->footerimage2;
        }

        if($request->hasFile('footerimage3')){
            $file= $request->file('footerimage3');
            $data['footerimage3']= $this->fimageUpload($file);

        }
        else{
            $data['footerimage3']=$footer->footerimage3;
        }

        if($request->hasFile('footerimage4')){
            $file= $request->file('footerimage4');
            $data['footerimage4']= $this->fimageUpload($file);

        }
        else{
            $data['footerimage4']=$footer->footerimage4;
        }
        if($request->hasFile('footerimage5')){
            $file= $request->file('footerimage5');
            $data['footerimage5']= $this->fimageUpload($file);

        }
        else{
            $data['footerimage5']=$footer->footerimage5;
        }

        if($request->hasFile('footerimage6')){
            $file= $request->file('footerimage6');
            $data['footerimage6']= $this->fimageUpload($file);

        }
        else{
            $data['footerimage6']=$footer->footerimage6;
        }

        if($request->hasFile('footerimage7')){
            $file= $request->file('footerimage7');
            $data['footerimage7']= $this->fimageUpload($file);

        }
        else{
            $data['footerimage7']=$footer->footerimage7;
        }

        if($request->hasFile('footerimage8')){
            $file= $request->file('footerimage8');
            $data['footerimage8']= $this->fimageUpload($file);

        }
        else{
            $data['footerimage8']=$footer->footerimage8;
        }

        if($request->hasFile('footericon1')){
            $file= $request->file('footericon1');
            $data['footericon1']= $this->cimageUpload($file);

        }
        else{
            $data['footericon1']=$footer->footericon1;
        }

        if($request->hasFile('footericon2')){
            $file= $request->file('footericon2');
            $data['footericon2']= $this->cimageUpload($file);

        }
        else{
            $data['footericon2']=$footer->footericon2;
        }

        if($request->hasFile('footericon3')){
            $file= $request->file('footericon3');
            $data['footericon3']= $this->cimageUpload($file);

        }
        else{
            $data['footericon3']=$footer->footericon3;
        }

        if($request->hasFile('footericon4')){
            $file= $request->file('footericon4');
            $data['footericon4']= $this->cimageUpload($file);

        }
        else{
            $data['footericon4']=$footer->footericon4;
        }

        if($request->hasFile('footericon5')){
            $file= $request->file('footericon5');
            $data['footericon5']= $this->cimageUpload($file);

        }
        else{
            $data['footericon5']=$footer->footericon5;
        }

        $footer->update($data);
        session()->flash('msg','');
        return redirect(route('footer.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\topper  $topper
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        footer::destroy($id);
        return redirect(route('footer.index'));
    }
    public function fimageUpload($file)
    {
        $path= 'backend/assets/images/footer/';
        $ImageName= Carbon::now();
        $ImageName= str_replace([' ',':'], '-',$ImageName);
        $string = rand(0,999);
        $image_file_name=$ImageName.$string.'.'.$file->getClientOriginalExtension();
        Image::make($file)->fit(560,280)->save($path.$image_file_name);
        return $image_file_name;

    }
    public function cimageUpload($file)
    {
        $path= 'backend/assets/images/footer/';
        $ImageName= Carbon::now();
        $ImageName= str_replace([' ',':'], '-',$ImageName);
        $string = rand(0,999);
        $image_file_name=$ImageName.$string.'.'.$file->getClientOriginalExtension();
        Image::make($file)->fit(32,32)->save($path.$image_file_name);
        return $image_file_name;

    }
    public function bimageUpload($file)
    {
        $path= 'backend/assets/images/footer/';
        $ImageName= Carbon::now();
        $ImageName= str_replace([' ',':'], '-',$ImageName);
        $string = rand(0,999);
        $image_file_name=$ImageName.$string.'.'.$file->getClientOriginalExtension();
        Image::make($file)->fit(1440,772)->save($path.$image_file_name);
        return $image_file_name;

    }
}
