@extends('backend.layout.app')
@section('pageTitle','home about part  Edit')
@section('content')
    <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">


                            {!! Form::open(['method'=>'put','route'=>array('home_about.update',$home_about->id),'class'=>'form-group', 'files' => true]) !!} <br>
                            {!! Form::text('title', $home_about->title,['class'=>'form-control', 'placeholder'=>'title']) !!}<br>
                            {!! Form::textarea('details', $home_about->details,['class'=>'form-control', 'placeholder'=>'details']) !!}<br>
                            {!! Form::file('photo',  ['class'=>'form-control', 'placeholder'=>'photo']) !!}<br>
                            <img class="img-thumbnail"  src="{{asset('backend/assets/images/home_about')}}/{{ $home_about->photo }}" width="100px" height="80px" data-holder-rendered="true">
                            <br><br>
                            {!! Form::button('Update about', ['class'=>'btn btn-outline-purple btn-lg  waves-effect waves-light','type'=>'submit']) !!}
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
    <script>
    CKEDITOR.replace( 'details' );
    </script>

@endsection

