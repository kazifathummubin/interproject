@extends('backend.layout.app')
@section('pageTitle','home_product create')
@section('content')
    <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            {!! Form::open(['method'=>'post','route'=>'home_product.store','files'=>true,'class'=>'form-group']) !!} <br>
                            <h6>Create product title  <span class="badge badge-pill badge-info">Title</span></h6>
                            {!! Form::text('title', null,['class'=>'form-control', 'placeholder'=>'title']) !!}<br>
                            <h6>Create image of image <span class="badge badge-pill badge-info">all product image</span></h6>
                            {!! Form::file('photo1', ['class'=>'form-control','id'=>'image22', 'placeholder'=>'photo1']) !!}<br>
                            <img class="img-thumbnail"  id="preview22" src="" width="70px" height="60px"/><br>
                            {!! Form::file('photo2', ['class'=>'form-control','id'=>'image23', 'placeholder'=>'photo2']) !!}<br>
                            <img class="img-thumbnail"  id="preview23" src="" width="70px" height="60px"/><br>
                            {!! Form::file('photo3', ['class'=>'form-control','id'=>'image24', 'placeholder'=>'photo3']) !!}<br>
                            <img class="img-thumbnail"  id="preview24" src="" width="70px" height="60px"/><br>
                            {!! Form::file('photo4', ['class'=>'form-control','id'=>'image25', 'placeholder'=>'photo4']) !!}<br>
                            <img class="img-thumbnail"  id="preview25" src="" width="70px" height="60px"/><br>
                            {!! Form::file('photo5', ['class'=>'form-control','id'=>'image26', 'placeholder'=>'photo5']) !!}<br>
                            <img class="img-thumbnail"  id="preview26" src="" width="70px" height="60px"/><br>
                            {!! Form::file('photo6', ['class'=>'form-control','id'=>'image27', 'placeholder'=>'photo6']) !!}<br>
                            <img class="img-thumbnail"  id="preview27" src="" width="70px" height="60px"/><br>
            <br><br>
            {{--{!! Form::radio('color_id', null,['class'=>'form-control', 'placeholder'=>'Choose One']) !!}<br>--}}
            {{--{!! Form::radio('size_id', null,['class'=>'form-control', 'placeholder'=>'Choose One']) !!}<br>--}}


                            {!! Form::button('Create home_product', ['class'=>'btn btn-outline-purple btn-lg  waves-effect waves-light','type'=>'submit']) !!}
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