<?php

namespace App\Http\Controllers;

use App\home_service;
use Illuminate\Http\Request;
use Citco\Carbon;
use Intervention\Image\Facades\Image;

class HomeServiceController extends Controller
{
    /**
     * ['title','background','icon1','text1','icon2','text2','icon3','text3',
    'icon4','text4','icon5','text5','icon6','text6','icon7','text7','icon8','text8'];
    }
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home_services = home_service::orderBy('created_at','asc')->get();
        return view ('backend.home_service.index', compact('home_services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.home_service.create');
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

            if($request->hasFile('background')){
                $file= $request->file('background');
                $data['background']= $this->imageUpload($file);

            }
            else{
                $data['background'] = null;
            }

            if($request->hasFile('icon1')){
                $file= $request->file('icon1');
                $data['icon1']= $this->imageUpload($file);

            }
            else{
                $data['icon1'] = null;
            }

            if($request->hasFile('icon2')){
                $file= $request->file('icon2');
                $data['icon2']= $this->imageUpload($file);

            }
            else{
                $data['icon2'] = null;
            }

            if($request->hasFile('icon3')){
                $file= $request->file('icon3');
                $data['icon3']= $this->imageUpload($file);

            }
            else{
                $data['icon3'] = null;
            }

              if($request->hasFile('icon4')){
                $file= $request->file('icon4');
                $data['icon4']= $this->imageUpload($file);

            }
            else{
                $data['icon4'] = null;
            }
              if($request->hasFile('icon5')){
                $file= $request->file('icon5');
                $data['icon5']= $this->imageUpload($file);

            }
            else{
                $data['icon5'] = null;
            }
              if($request->hasFile('icon6')){
                $file= $request->file('icon6');
                $data['icon6']= $this->imageUpload($file);

            }
            else{
                $data['icon6'] = null;
            }
              if($request->hasFile('icon7')){
                $file= $request->file('icon7');
                $data['icon7']= $this->imageUpload($file);

            }
            else{
                $data['icon7'] = null;
            }
              if($request->hasFile('icon8')){
                $file= $request->file('icon8');
                $data['icon8']= $this->imageUpload($file);

            }
            else{
                $data['icon8'] = null;
            }


            home_service::create($data);
            session()->flash('msg','Category Inserted Successfully');
            return redirect(route('home_service.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\home_service  $home_service
     * @return \Illuminate\Http\Response
     */
    public function show(home_service $home_service)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\home_service  $home_service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $home_service=home_service::find($id);
        return view ('backend/home_service/edit',compact('home_service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\home_service  $home_service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $home_service = home_service::find($id);
        $data=$request->all();

        if($request->hasFile('background')){
            $file= $request->file('background');
            $data['background']= $this->bimageUpload($file);

        }
        else{
            $data['background'] = $home_service->background;
        }

        if($request->hasFile('icon1')){
            $file= $request->file('icon1');
            $data['icon1']= $this->imageUpload($file);

        }
        else{
            $data['icon1'] = $home_service->icon1;
        }

        if($request->hasFile('icon2')){
            $file= $request->file('icon2');
            $data['icon2']= $this->imageUpload($file);

        }
        else{
            $data['icon2'] =$home_service->icon2;
        }

        if($request->hasFile('icon3')){
            $file= $request->file('icon3');
            $data['icon3']= $this->imageUpload($file);

        }
        else{
            $data['icon3'] = $home_service->icon3;
        }

        if($request->hasFile('icon4')){
            $file= $request->file('icon4');
            $data['icon4']= $this->imageUpload($file);

        }
        else{
            $data['icon4'] =$home_service->icon4;
        }
        if($request->hasFile('icon5')){
            $file= $request->file('icon5');
            $data['icon5']= $this->imageUpload($file);

        }
        else{
            $data['icon5'] = $home_service->icon5;
        }
        if($request->hasFile('icon6')){
            $file= $request->file('icon6');
            $data['icon6']= $this->imageUpload($file);

        }
        else{
            $data['icon6'] = $home_service->icon6;
        }
        if($request->hasFile('icon7')){
            $file= $request->file('icon7');
            $data['icon7']= $this->imageUpload($file);

        }
        else{
            $data['icon7'] =$home_service->icon7;
        }
        if($request->hasFile('icon8')){
            $file= $request->file('icon8');
            $data['icon8']= $this->imageUpload($file);

        }
        else{
            $data['icon8'] = $home_service->icon8;
        }


        $home_service->update($data);
        session()->flash('msg','Category Inserted Successfully');
        return redirect(route('home_service.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\home_service  $home_service
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        home_service::destroy($id);
        session()->flash('msg','Brand Deleted Successfully');
        return redirect(route('home_service.index'));
    }
    public function imageUpload($file)
    {
        $path= 'backend/assets/images/home_service/';
        $ImageName= Carbon::now();
        $ImageName= str_replace([' ',':'], '-',$ImageName);
        $string = rand(0,999);
        $image_file_name=$ImageName.$string.'.'.$file->getClientOriginalExtension();
        Image::make($file)->fit(98,98)->save($path.$image_file_name);
        return $image_file_name;

    }
    public function bimageUpload($file)
    {
        $path= 'backend/assets/images/home_service/';
        $ImageName= Carbon::now();
        $ImageName= str_replace([' ',':'], '-',$ImageName);
        $string = rand(0,999);
        $image_file_name=$ImageName.$string.'.'.$file->getClientOriginalExtension();
        Image::make($file)->fit(1900,640)->save($path.$image_file_name);
        return $image_file_name;

    }
}
