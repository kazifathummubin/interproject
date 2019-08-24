@extends('backend.layout.app')
@section('pageTitle','News create')
@section('content')

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            {!! Form::open(['method'=>'post','route'=>'news.store','files'=>true,'class'=>'form-group']) !!} <br>

                            <h6>Create news  <span class="badge badge-pill badge-info">title</span></h6>
                            {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'techtitle']) !!}<br>

                            <h6>Create news <span class="badge badge-pill badge-info">news_description</span></h6>
                            {!! Form::textarea('news_description', null,['class'=>'form-control','placeholder'=>'news_description']) !!}<br>

                            <h6>Create news  <span class="badge badge-pill badge-info">image</span></h6>
                            {!! Form::file('news_photo', ['class'=>'form-control','id'=>'image76', 'placeholder'=>'news_photo']) !!}<br>
                            <img class="img-thumbnail"  id="preview76" src="" width="70px" height="60px"/><br>

                            <br><br>
                            {!! Form::button('Create news', ['class'=>'btn btn-outline-purple btn-lg  waves-effect waves-light','type'=>'submit']) !!}
                            {!! Form::close() !!}


                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'news_description' );
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