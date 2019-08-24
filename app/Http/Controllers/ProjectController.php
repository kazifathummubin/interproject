<?php

namespace App\Http\Controllers;

use App\Category;
use Citco\Carbon;
use App\Project;
use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::with(['category'])->get();

        return view('backend/project/index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::pluck('name', 'id');

        return view('backend.project.create', compact('category'));
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

        if($request->hasFile('project_photo1')){
            $file= $request->file('project_photo1');
            $data['project_photo1']= $this->imageUpload($file);

        }
        else{
            $data['project_photo1']=null;
        }

        if($request->hasFile('project_photo2')){
            $file= $request->file('project_photo2');
            $data['project_photo2']= $this->imageUpload($file);

        }
        else{
            $data['project_photo2']=null;
        }

        if($request->hasFile('project_photo3')){
            $file= $request->file('project_photo3');
            $data['project_photo3']= $this->imageUpload($file);

        }
        else{
            $data['project_photo3']=null;
        }

        if($request->hasFile('project_photo4')){
            $file= $request->file('project_photo4');
            $data['project_photo4']= $this->imageUpload($file);

        }
        else{
            $data['project_photo4']=null;
        }


//dd($data);
        Project::create($data);
        session()->flash('msg','Category Inserted Successfully');
        return redirect(route('project.index'));

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::pluck('name', 'id');
        $project = Project::with(['category'])->findOrFail($id);
        return view('backend.project.edit', compact('project', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $data = $request->all();
        if ($request->hasFile('project_photo1 ')) {
            $image = $request->file('project_photo1 ');
            $data['project_photo1 '] = $this->imageUpload($image);

        } else {
            $data['project_photo1 '] =  $project->project_photo1;
        }

        if ($request->hasFile('project_photo2 ')) {
            $image = $request->file('project_photo2 ');
            $data['project_photo2 '] = $this->imageUpload($image);

        } else {
            $data['project_photo2 '] =  $project->project_photo2;
        }

        if ($request->hasFile('project_photo3 ')) {
            $image = $request->file('project_photo3 ');
            $data['project_photo3 '] = $this->imageUpload($image);

        } else {
            $data['project_photo3 '] = $project->project_photo3;
        }

        if ($request->hasFile('project_photo4 ')) {
            $image = $request->file('project_photo4 ');
            $data['project_photo4 '] = $this->imageUpload($image);

        } else {
            $data['project_photo4 '] = $project->project_photo4;
        }

        $project->update($data);
        session()->flash('msg', 'Product Updated Successfully');
        return redirect(route('project.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        session()->flash('msg', 'Product Deleted Successfully');
        return redirect(route('product.index'));
    }
    public function imageUpload($file)
    {
        $path= 'backend/assets/images/project/';
        $ImageName= Carbon::now();
        $ImageName= str_replace([' ',':'], '-',$ImageName);
        $string = rand(0,999);
        $image_file_name=$ImageName.$string .'.'.$file->getClientOriginalExtension();
        Image::make($file)->fit(600,420)->save($path.$image_file_name);
        return $image_file_name;

    }

    public function byCategory($id)
    {

       $projects = Project::where('category_id', $id)->get();
        $title = Category::findOrFail($id);
        $title = $title->name;
        return view('backend/project/byCategory', compact('projects', 'title'));
    }
}
