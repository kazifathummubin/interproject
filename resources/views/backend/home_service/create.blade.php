@extends('backend.layout.app')
@section('pageTitle','home_service create')
@section('content')
    <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            {!! Form::open(['method'=>'post','route'=>'home_service.store','files'=>true,'class'=>'form-group']) !!} <br>
                            <h6>Create  sevice part  <span class="badge badge-pill badge-info">background</span></h6>
                            {!! Form::file('background', ['class'=>'form-control','id'=>'image28', 'placeholder'=>'background']) !!}<br>
                            <img class="img-thumbnail" id="preview28" src="" width="100px" height="100px"/><br>
                            <h6>Create service title  <span class="badge badge-pill badge-info">Title</span></h6>
                            {!! Form::text('title', null,['class'=>'form-control', 'placeholder'=>'title']) !!}<br>
                            <h6>Create services   <span class="badge badge-pill badge-info">image</span></h6>
                            {!! Form::file('icon1', ['class'=>'form-control','id'=>'image29', 'placeholder'=>'icon1']) !!}<br>
                            <img class="img-thumbnail"  id="preview29" src="" width="100px" height="80px"/><br>
                            {!! Form::text('text1', null,['class'=>'form-control', 'placeholder'=>'text1']) !!}<br>
                            {!! Form::file('icon2', ['class'=>'form-control','id'=>'image30', 'placeholder'=>'icon1']) !!}<br>
                            <img class="img-thumbnail"  id="preview30" src="" width="100px" height="80px"/><br>
                            {!! Form::text('text2', null,['class'=>'form-control', 'placeholder'=>'text2']) !!}<br>
                            {!! Form::file('icon3', ['class'=>'form-control','id'=>'image31', 'placeholder'=>'icon3']) !!}<br>
                            <img class="img-thumbnail"  id="preview31" src="" width="100px" height="80px"/><br>
                            {!! Form::text('text3', null,['class'=>'form-control', 'placeholder'=>'text3']) !!}<br>
                            {!! Form::file('icon4', ['class'=>'form-control','id'=>'image32', 'placeholder'=>'icon4']) !!}<br>
                            <img class="img-thumbnail"  id="preview32" src="" width="100px" height="80px"/><br>
                            {!! Form::text('text4', null,['class'=>'form-control', 'placeholder'=>'text4']) !!}<br>
                            {!! Form::file('icon5', ['class'=>'form-control','id'=>'image33', 'placeholder'=>'icon5']) !!}<br>
                            <img class="img-thumbnail"  id="preview33" src="" width="100px" height="80px"/><br>
                            {!! Form::text('text5', null,['class'=>'form-control', 'placeholder'=>'text5']) !!}<br>
                            {!! Form::file('icon6', ['class'=>'form-control','id'=>'image34', 'placeholder'=>'icon6']) !!}<br>
                            <img class="img-thumbnail"  id="preview34" src="" width="100px" height="80px"/><br>
                            {!! Form::text('text6', null,['class'=>'form-control', 'placeholder'=>'text6']) !!}<br>
                            {!! Form::file('icon7', ['class'=>'form-control','id'=>'image35', 'placeholder'=>'icon7']) !!}<br>
                            <img class="img-thumbnail"  id="preview35" src="" width="100px" height="80px"/><br>
                            {!! Form::text('text7', null,['class'=>'form-control', 'placeholder'=>'text7']) !!}<br>
                            {!! Form::file('icon8', ['class'=>'form-control','id'=>'image36', 'placeholder'=>'icon8']) !!}<br>
                            <img class="img-thumbnail"  id="preview36" src="" width="100px" height="80px"/><br>
                            {!! Form::text('text8', null,['class'=>'form-control', 'placeholder'=>'text8']) !!}<br>
                            {!! Form::button('Create home_service', ['class'=>'btn btn-outline-purple btn-lg  waves-effect waves-light','type'=>'submit']) !!}
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