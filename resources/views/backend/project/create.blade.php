@extends('backend.layout.app')
@section('pageTitle','create project ')
@section('content')

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">

                            {!! Form::open(['method'=>'post','route'=>'project.store','class'=>'form-group', 'files'=>true]) !!} <br>
                            {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'title Name']) !!}<br>
                            {!! Form::textarea('project_description', null,['class'=>'form-control', 'placeholder'=>'project Description']) !!}<br>
                            <small class="text-info">Insert Gallery  Photo</small> <br>
                            {!! Form::file('project_photo1', ['class'=>'form-control','id'=>'image72', 'placeholder'=>'project_photo1']) !!}<br>
                            <img class="img-thumbnail" id="preview72" src="" width="70px" height="60px"/><br>
                            {!! Form::file('project_photo2', ['class'=>'form-control','id'=>'image73', 'placeholder'=>'project_photo2']) !!}<br>
                            <img class="img-thumbnail" id="preview73" src="" width="70px" height="60px"/><br>
                            {!! Form::file('project_photo3', ['class'=>'form-control','id'=>'image74', 'placeholder'=>'project_photo3']) !!}<br>
                            <img class="img-thumbnail" id="preview74" src="" width="70px" height="60px"/><br>
                            {!! Form::file('project_photo4', ['class'=>'form-control','id'=>'image75', 'placeholder'=>'project_photo4']) !!}<br><br>
                            <img class="img-thumbnail" id="preview75" src="" width="70px" height="60px"/><br>
                            {!! Form::select('category_id', $category,0,['class'=>'form-control', 'placeholder'=>'Select Category']) !!}<br>
                            <br><br>
                            {!! Form::button('Create project', ['class'=>'btn btn-outline-purple btn-lg  waves-effect waves-light','type'=>'submit']) !!}
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
        CKEDITOR.replace( 'project_description');

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