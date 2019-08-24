<?php

namespace App\Http\Controllers;

use App\home_product;
use Illuminate\Http\Request;
use Citco\Carbon;
use Intervention\Image\Facades\Image;
class HomeProductController extends Controller
{
    /**
     * ['title','photo1','photo2','photo3','photo4','photo5','photo6'];
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home_products = home_product::orderBy('created_at','asc')->get();
        return view ('backend.home_product.index', compact('home_products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.home_product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
public function store(Request $request)
    {
        $data = $request->all();

        if($request->hasFile('photo1')){
            $image= $request->file('photo1');
            $data['photo1']= $this->imageUpload($image);
            //1. need to save image in folder
            //2. rename-> insert into database
        }
        else{
            $data['photo1'] = null;
        }

        if($request->hasFile('photo2')){
            $image= $request->file('photo2');
            $data['photo2']= $this->imageUpload($image);
            //1. need to save image in folder
            //2. rename-> insert into database
        }
        else{
            $data['photo2'] = null;
        }

        if($request->hasFile('photo3')){
            $image= $request->file('photo3');
            $data['photo3']= $this->imageUpload($image);
            //1. need to save image in folder
            //2. rename-> insert into database
        }
        else{
            $data['photo3'] = null;
        }

        if($request->hasFile('photo4')){
            $image= $request->file('photo4');
            $data['photo4']= $this->imageUpload($image);
            //1. need to save image in folder
            //2. rename-> insert into database
        }
        else{
            $data['photo4'] = null;
        }
        if($request->hasFile('photo5')){
            $image= $request->file('photo5');
            $data['photo5']= $this->imageUpload($image);
            //1. need to save image in folder
            //2. rename-> insert into database
        }
        else{
            $data['photo5'] = null;
        }
        if($request->hasFile('photo6')){
            $image= $request->file('photo6');
            $data['photo6']= $this->imageUpload($image);
            //1. need to save image in folder
            //2. rename-> insert into database
        }
        else{
            $data['photo6'] = null;
        }

        home_product::create($data);
        session()->flash('msg','Category Inserted Successfully');
        return redirect(route('home_product.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\home_product  $home_product
     * @return \Illuminate\Http\Response
     */
    public function show(home_product $home_product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\home_product  $home_product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $home_product=home_product::find($id);
        return view ('backend/home_product/edit',compact('home_product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\home_product  $home_product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $home_product = home_product::find($id);
        $data=$request->all();

        if($request->hasFile('photo1')){
            $file= $request->file('photo1');
            $data['photo1']= $this->imageUpload($file);

        }
        else{
            $data['photo1']=$home_product->photo1;
        }

        if($request->hasFile('photo2')){
            $file= $request->file('photo2');
            $data['photo2']= $this->imageUpload($file);

        }
        else{
            $data['photo2']=$home_product->photo2;
        }

        if($request->hasFile('photo3')){
            $file= $request->file('photo3');
            $data['photo3']= $this->imageUpload($file);

        }
        else{
            $data['photo3']=$home_product->photo3;
        }

        if($request->hasFile('photo4')){
            $file= $request->file('photo4');
            $data['photo4']= $this->imageUpload($file);

        }
        else{
            $data['photo4']=$home_product->photo4;
        }

        if($request->hasFile('photo5')){
            $file= $request->file('photo5');
            $data['photo5']= $this->imageUpload($file);

        }
        else{
            $data['photo5']=$home_product->photo5;
        }
        if($request->hasFile('photo6')){
            $file= $request->file('photo6');
            $data['photo6']= $this->imageUpload($file);

        }
        else{
            $data['photo6']=$home_product->photo6;
        }

       $home_product->update($data);
        session()->flash('msg','Category Inserted Successfully');
        return redirect(route('home_product.index'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\home_product  $home_product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        home_product::destroy($id);
        session()->flash('msg','Brand Deleted Successfully');
        return redirect(route('home_product.index'));
    }

    public function imageUpload($file)
    {

        $path= 'backend/assets/images/home_product/';
        $ImageName= Carbon::now();
        $ImageName= str_replace([' ',':'], '-',$ImageName);
        $string = rand(0,999);
        $image_file_name=$ImageName.$string .'.'.$file->getClientOriginalExtension();
        Image::make($file)->fit(600,420)->save($path.$image_file_name);
        return $image_file_name;

    }
}
