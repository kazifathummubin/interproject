@extends('backend.layout.app')
@section('pageTitle','contact create')
@section('content')

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            {!! Form::open(['method'=>'post','route'=>'contact.store','files'=>true,'class'=>'form-group']) !!} <br>

                            <h6>Create Contact  <span class="badge badge-pill badge-info">title</span></h6>
                            {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'title']) !!}<br>

                            <h6>Create Contact <span class="badge badge-pill badge-info">getintouch</span></h6>
                            {!! Form::textarea('getintouch', null,['class'=>'form-control','placeholder'=>'getintouch']) !!}<br>

                            <h6>Create Contact <span class="badge badge-pill badge-info">factory</span></h6>
                            {!! Form::textarea('factory', null,['class'=>'form-control','placeholder'=>'factory']) !!}<br>

                            <h6>Create Contact <span class="badge badge-pill badge-info">hours</span></h6>
                            {!! Form::textarea('hours', null,['class'=>'form-control','placeholder'=>'hours']) !!}<br>

                            <br><br>
                            {!! Form::button('Create contact', ['class'=>'btn btn-outline-purple btn-lg  waves-effect waves-light','type'=>'submit']) !!}
                            {!! Form::close() !!}


                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
    <script>
//        CKEDITOR.disableAutoInline = true;
        CKEDITOR.replace( 'getintouch' );
        CKEDITOR.replace( 'factory' );
        CKEDITOR.replace( 'hours' );
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