@extends('backend.layout.app')
@section('pageTitle','create service ')
@section('content')

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            {!! Form::open(['method'=>'post','route'=>'service.store','files'=>true,'class'=>'form-group']) !!} <br>
                            <h6>Create Service  for <span class="badge badge-pill badge-info">Title</span></h6>
                            {!! Form::text('title', null,['class'=>'form-control', 'placeholder'=>'title']) !!}<br>

                            <h6>Create Service  for <span class="badge badge-pill badge-info">service1</span></h6>
                            {!! Form::text('service1', null,['class'=>'form-control', 'placeholder'=>'service1']) !!}<br>
                            <h6>Create Service  for <span class="badge badge-pill badge-info">service_content1</span></h6>
                            {!! Form::textarea('service_content1', null,['class'=>'form-control', 'placeholder'=>'service_content1']) !!}<br>
                            <h6>Create image for <span class="badge badge-pill badge-info">service photo</span></h6>
                            {!! Form::file('service_photo1',['class'=>'form-control','id'=>'image63','placeholder'=>'service_photo1']) !!}<br>
                            <img  class="img-thumbnail"  id="preview63" src=""width="70px" height="60px"/><br>
                            {!! Form::file('service_photo2',['class'=>'form-control','id'=>'image64', 'placeholder'=>'service_photo2']) !!}<br>
                            <img class="img-thumbnail" id="preview64" src="" width="70px" height="60px"/><br>
                            {!! Form::file('service_photo3', ['class'=>'form-control','id'=>'image65', 'placeholder'=>'service_photo3']) !!}<br>
                            <img  class="img-thumbnail" id="preview65" src="" width="70px" height="60px"/><br>

                            <h6>Create Service  for <span class="badge badge-pill badge-info">service2</span></h6>
                            {!! Form::text('service2', null,['class'=>'form-control', 'placeholder'=>'service2']) !!}<br>
                            <h6>Create Service  for <span class="badge badge-pill badge-info">srvice_content2</span></h6>
                            {!! Form::textarea('service_content2', null,['class'=>'form-control', 'placeholder'=>'service_content2']) !!}<br>
                            <h6>Create image for <span class="badge badge-pill badge-info">service photo</span></h6>
                            {!! Form::file('service_photo4',['class'=>'form-control','id'=>'image66','placeholder'=>'service_photo4']) !!}<br>
                            <img  class="img-thumbnail"  id="preview66" src=""width="70px" height="60px"/><br>
                            {!! Form::file('service_photo5',['class'=>'form-control','id'=>'image67', 'placeholder'=>'service_photo5']) !!}<br>
                            <img class="img-thumbnail" id="preview67" src="" width="70px" height="60px"/><br>
                            {!! Form::file('service_photo6', ['class'=>'form-control','id'=>'image68', 'placeholder'=>'service_photo6']) !!}<br>
                            <img  class="img-thumbnail" id="preview68" src="" width="70px" height="60px"/><br>

                            <h6>Create Service  for <span class="badge badge-pill badge-info">service3</span></h6>
                            {!! Form::text('service3', null,['class'=>'form-control', 'placeholder'=>'service3']) !!}<br>
                            <h6>Create Service  for <span class="badge badge-pill badge-info">srvice_content3</span></h6>
                            {!! Form::textarea('service_content3', null,['class'=>'form-control', 'placeholder'=>'service_content3']) !!}<br>
                            <h6>Create image for <span class="badge badge-pill badge-info">service photo</span></h6>
                            {!! Form::file('service_photo7',['class'=>'form-control','id'=>'image69','placeholder'=>'service_photo7']) !!}<br>
                            <img  class="img-thumbnail"  id="preview69" src=""width="70px" height="60px"/><br>
                            {!! Form::file('service_photo8',['class'=>'form-control','id'=>'image70', 'placeholder'=>'service_photo2']) !!}<br>
                            <img class="img-thumbnail" id="preview70" src="" width="70px" height="60px"/><br>
                            {!! Form::file('service_photo9', ['class'=>'form-control','id'=>'image71', 'placeholder'=>'service_photo3']) !!}<br>
                            <img  class="img-thumbnail" id="preview71" src="" width="70px" height="60px"/><br>
                            <br><br>
                            {!! Form::button('Create service', ['class'=>'btn btn-outline-purple btn-lg  waves-effect waves-light','type'=>'submit']) !!}
                            {!! Form::close() !!}


                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
    <script>
        CKEDITOR.replace( 'service_content1');
        CKEDITOR.replace( 'service_content2');
        CKEDITOR.replace( 'service_content3');
    </script>


@endsection












{{--formopen	{!! Form::open() !!}--}}
{{--formclose	{!! Form::close() !!}--}}
{{--formtoken	{!! Form::token() !!}--}}
{{--formmodel	{!! Form::model($user, []) !!}--}}
{{--formlabel	{!! Form::label($for, $text, []) !!}--}}
{{--formtext	{!! Form::text($name, $value, []) !!}--}}
{{--formtextarea	{!! Form::textarea($name, $value, []) !!}--}}
{{--formpassword	{!! Form::password($name, []) !!}--}}
{{--formhidden	{!! Form::hidden($name, $value, []) !!}--}}
{{--formemail	{!! Form::email($name, $value, []) !!}--}}
{{--formfile	{!! Form::file($name, []) !!}--}}
{{--formcheckbox	{!! Form::checkbox($name, $value, $checked, []) !!}--}}
{{--formradio	{!! Form::radio($name, $value, $checked, []) !!}--}}
{{--formnumber	{!! Form::number($name, $value, []) !!}--}}
{{--formdate	{!! Form::date($name, \Illuminate\Support\Carbon::now(), []) !!}--}}
{{--formselect	{!! Form::select($name, $optionsArray, $defaultKey, []) !!}--}}
{{--formselectrange	{!! Form::selectRange($name, $min, $max), [] !!}--}}
{{--formselectmonth	{!! Form::selectMonth($name, []) !!}--}}
{{--formsubmit	{!! Form::submit($text, []) !!}--}}