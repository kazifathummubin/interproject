@extends('backend.layout.app')
@section('pageTitle','slider Edit')
@section('content')
    <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">


                            {!! Form::open(['method'=>'put','route'=>array('slider.update',$slider->id),'class'=>'form-group', 'files' => true]) !!} <br>
                            <h6>Upadated image slider_image <span class="badge badge-pill badge-info">slider_image</span></h6>
                            {!! Form::file('slider_image' ,['class'=>'form-control', 'placeholder'=>'slider_image']) !!}<br><br>
                            <img class="img-thumbnail"   src="{{asset('backend/assets/images/slider')}}/{{ $slider->slider_image }}" width="50px" data-holder-rendered="true"><br>
                            <h6>Updated image favicon <span class="badge badge-pill badge-info">favicon</span></h6>
                            {!! Form::textarea('slider_contant', $slider->slider_contant,['class'=>'form-control', 'placeholder'=>'slider_contant']) !!}<br><br>

                            <br><br>
                            {!! Form::button('Update slider', ['type'=>'submit', 'class'=>'btn btn-outline-pink btn-lg waves-effect waves-light']) !!}
                            {!! Form::close() !!}


                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


    <script>
    CKEDITOR.replace( 'slider_contant' );
    </script>

@endsection

