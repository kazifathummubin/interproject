@extends('backend.layout.app')
@section('pageTitle','create product ')
@section('content')

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">

                            {!! Form::open(['method'=>'post','route'=>'product.store','class'=>'form-group', 'files'=>true]) !!} <br>
                            {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Product Name']) !!}<br>
                            {!! Form::textarea('body', null,['class'=>'form-control', 'placeholder'=>'Product Description']) !!}<br>
                            <small class="text-danger">Each keyword should seperated by comma (,)</small>
                            {!! Form::text('keyword', null,['class'=>'form-control', 'placeholder'=>'Keyword']) !!}<br>
                            {!! Form::text('price', null,['class'=>'form-control', 'placeholder'=>'Price']) !!}<br>
                            {!! Form::text('discount', null,['class'=>'form-control', 'placeholder'=>'Discount']) !!}<br>
                            {!! Form::number('stock', null,['class'=>'form-control', 'placeholder'=>'Stock']) !!}<br>
                            {!! Form::number('sku', null,['class'=>'form-control', 'placeholder'=>'sku']) !!}<br>
                            <small class="text-info">Insert Feature Photo</small> <br>
                            {!! Form::file('feature_photo',['class'=>'form-control','id'=>'image58', 'placeholder'=>'Feature Photo']) !!}<br>
                            <img class="img-thumbnail" id="preview58" src="" width="70px" height="60px"/><br>
                            <small class="text-info">Insert Gallery  Photo</small> <br>
                            {!! Form::file('photo1', ['class'=>'form-control','id'=>'image59', 'placeholder'=>'Feature Photo']) !!}<br>
                            <img class="img-thumbnail" id="preview59" src="" width="70px" height="60px"/><br>
                            {!! Form::file('photo2', ['class'=>'form-control','id'=>'image60', 'placeholder'=>'Feature Photo']) !!}<br>
                            <img class="img-thumbnail" id="preview60" src="" width="70px" height="60px"/><br>
                            {!! Form::file('photo3', ['class'=>'form-control','id'=>'image61', 'placeholder'=>'Feature Photo']) !!}<br>
                            <img class="img-thumbnail" id="preview61" src="" width="70px" height="60px"/><br>
                            {!! Form::file('photo4', ['class'=>'form-control','id'=>'image62', 'placeholder'=>'Feature Photo']) !!}<br><br>
                            <img class="img-thumbnail" id="preview62" src="" width="70px" height="60px"/><br>
                            {!! Form::select('category_id', $category,0,['class'=>'form-control', 'placeholder'=>'Select Category']) !!}<br>
                            <br><br>
                            {!! Form::button('Create footer', ['class'=>'btn btn-outline-purple btn-lg  waves-effect waves-light','type'=>'submit']) !!}
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
        CKEDITOR.replace( 'body');

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