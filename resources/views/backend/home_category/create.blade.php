@extends('backend.layout.app')
@section('pageTitle','create product category part')
@section('content')
    <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            {!! Form::open(['method'=>'post','route'=>'home_category.store','files'=>true,'class'=>'form-group']) !!} <br>
                            <h6>Create category title  <span class="badge badge-pill badge-info">Title</span></h6>
                            {!! Form::text('title', null,['class'=>'form-control', 'placeholder'=>'title']) !!}<br>
                            <h6>Create image of categoty <span class="badge badge-pill badge-info">all cetagory icon</span></h6>
                            {!! Form::file('icon1', ['class'=>'form-control','id'=>'image37', 'placeholder'=>'icon1']) !!}<br>
                            <img class="img-thumbnail"  id="preview37" src="" width="70px" height="60px"/><br>
                            {!! Form::text('text1', null,['class'=>'form-control', 'placeholder'=>'text1']) !!}<br>
                            {!! Form::file('icon2', ['class'=>'form-control','id'=>'image38', 'placeholder'=>'icon2']) !!}<br>
                            <img class="img-thumbnail"  id="preview38" src="" width="70px" height="60px"/><br>
                            {!! Form::text('text2', null,['class'=>'form-control', 'placeholder'=>'text2']) !!}<br>
                            {!! Form::file('icon3', ['class'=>'form-control','id'=>'image39', 'placeholder'=>'icon3']) !!}<br>
                            <img class="img-thumbnail"  id="preview39" src="" width="70px" height="60px"/><br>
                            {!! Form::text('text3', null,['class'=>'form-control', 'placeholder'=>'text3']) !!}<br>
                            {!! Form::file('icon4', ['class'=>'form-control','id'=>'image40', 'placeholder'=>'icon4']) !!}<br>
                            <img class="img-thumbnail"  id="preview40" src="" width="70px" height="60px"/><br>
                            {!! Form::text('text4', null,['class'=>'form-control', 'placeholder'=>'text4']) !!}<br>
                            {!! Form::file('icon5', ['class'=>'form-control','id'=>'image41', 'placeholder'=>'icon5']) !!}<br>
                            <img class="img-thumbnail"  id="preview41" src="" width="70px" height="60px"/><br>
                            {!! Form::text('text5', null,['class'=>'form-control', 'placeholder'=>'text5']) !!}<br>
            <br><br>
            {{--{!! Form::radio('color_id', null,['class'=>'form-control', 'placeholder'=>'Choose One']) !!}<br>--}}
            {{--{!! Form::radio('size_id', null,['class'=>'form-control', 'placeholder'=>'Choose One']) !!}<br>--}}


                            {!! Form::button('Create home_category', ['class'=>'btn btn-outline-purple btn-lg  waves-effect waves-light','type'=>'submit']) !!}
                            {!! Form::close() !!}


                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


    {{--<script>--}}
        {{--CKEDITOR.replace( 'itext1' );--}}
    {{--</script>--}}

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