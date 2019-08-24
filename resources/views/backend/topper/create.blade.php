@extends('backend.layout.app')
@section('pageTitle','Topper create')
@section('content')
    <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            {!! Form::open(['method'=>'post','route'=>'topper.store','files'=>true,'class'=>'form-group']) !!} <br>
                            <h6>Create image for <span class="badge badge-pill badge-info">Topper</span></h6>
                            {!! Form::file('icon1', ['class'=>'form-control','id'=>'image15', 'placeholder'=>'icon1']) !!}<br>
                            <img  class="img-thumbnail"  id="preview15" src="" width="70px" height="60px"/><br>
                            {!! Form::text('itext1', null,['class'=>'form-control', 'placeholder'=>'itext1']) !!}<br>
                            {!! Form::file('icon2', ['class'=>'form-control','id'=>'image16', 'placeholder'=>'icon1']) !!}<br>
                            <img  class="img-thumbnail"  id="preview16" src="" width="70px" height="60px"/><br>
                            {!! Form::text('itext2', null,['class'=>'form-control', 'placeholder'=>'itext1']) !!}<br>
                            {!! Form::file('flag1', ['class'=>'form-control','id'=>'image17', 'placeholder'=>'flag1']) !!}<br>
                            <img  class="img-thumbnail"  id="preview17" src="" width="70px" height="60px"/><br>
                            {!! Form::text('ftext1', null,['class'=>'form-control', 'placeholder'=>'ftext1']) !!}<br>
                            {!! Form::file('flag2', ['class'=>'form-control','id'=>'image18', 'placeholder'=>'flag2']) !!}<br>
                            <img  class="img-thumbnail"  id="preview18" src="" width="70px" height="60px"/><br>
                            {!! Form::text('ftext2', null,['class'=>'form-control', 'placeholder'=>'ftext2']) !!}<br>
                            {!! Form::file('flag3', ['class'=>'form-control','id'=>'image19', 'placeholder'=>'flag3']) !!}<br>
                            <img  class="img-thumbnail"  id="preview19" src="" width="70px" height="60px"/><br>
                            {!! Form::text('ftext3', null,['class'=>'form-control', 'placeholder'=>'ftext3']) !!}<br>
            <br><br>
            {{--{!! Form::radio('color_id', null,['class'=>'form-control', 'placeholder'=>'Choose One']) !!}<br>--}}
            {{--{!! Form::radio('size_id', null,['class'=>'form-control', 'placeholder'=>'Choose One']) !!}<br>--}}

                            {!! Form::button('Create topper', ['class'=>'btn btn-outline-purple btn-lg  waves-effect waves-light','type'=>'submit']) !!}
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