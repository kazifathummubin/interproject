@extends('backend.layout.app')
@section('pageTitle','Project Edit')
@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            {!! Form::open(['method'=>'put','route'=>['project.update',$project->id ],'class'=>'form-group', 'files'=>true]) !!} <br>
                            {!! Form::text('title',$project->title, ['class'=>'form-control', 'placeholder'=>'title Name']) !!}<br>
                            {!! Form::textarea('project_description', $project->project_description ,['class'=>'form-control', 'placeholder'=>'project Description']) !!}<br>
                            <small class="text-info">Insert Gallery  Photo</small> <br>
                            {!! Form::file('project_photo1', ['class'=>'form-control','id'=>'', 'placeholder'=>'project_photo1']) !!}<br>
                            <img class="img-thumbnail"  src="{{asset('backend/assets/images/project')}}/{{ $project->project_photo1 }}" width="50px" data-holder-rendered="true"><br>
                            {!! Form::file('project_photo2', ['class'=>'form-control','id'=>'', 'placeholder'=>'project_photo2']) !!}<br>
                            <img class="img-thumbnail"  src="{{asset('backend/assets/images/project')}}/{{ $project->project_photo2 }}" width="50px" data-holder-rendered="true"><br>
                            {!! Form::file('project_photo3', ['class'=>'form-control','id'=>'', 'placeholder'=>'project_photo3']) !!}<br>
                            <img class="img-thumbnail"  src="{{asset('backend/assets/images/project')}}/{{ $project->project_photo3 }}" width="50px" data-holder-rendered="true"><br>
                            {!! Form::file('project_photo4', ['class'=>'form-control','id'=>'', 'placeholder'=>'project_photo4']) !!}<br><br>
                            <img class="img-thumbnail"  src="{{asset('backend/assets/images/project')}}/{{ $project->project_photo4 }}" width="50px" data-holder-rendered="true"><br>
                            {!! Form::select('category_id', $category,$project->category->id,['class'=>'form-control', 'placeholder'=>'Choose One']) !!}<br>

                            <br><br>
                            {{--{!! Form::radio('color_id', null,['class'=>'form-control', 'placeholder'=>'Choose One']) !!}<br>--}}
                            {{--{!! Form::radio('size_id', null,['class'=>'form-control', 'placeholder'=>'Choose One']) !!}<br>--}}

                            {!! Form::button('Update Project', ['type'=>'submit', 'class'=>'btn btn-outline-pink btn-lg waves-effect waves-light']) !!}
                            {!! Form::close() !!}


                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'project_description');

    </script>

@endsection

