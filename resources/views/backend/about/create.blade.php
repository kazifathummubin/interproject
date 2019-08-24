@extends('backend.layout.app')
@section('pageTitle','create about ')
@section('content')

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            {!! Form::open(['method'=>'post','route'=>'about.store','files'=>true,'class'=>'form-group']) !!} <br>
                            <h6>Create image for <span class="badge badge-pill badge-info">aboutcontentimage</span></h6>
                            {!! Form::file('aboutcontentimage',['class'=>'form-control','id'=>'image43', 'placeholder'=>'aboutcontentimage']) !!}<br>
                            <img  class="img-thumbnail"  id="preview43" src="" width="70px" height="60px"/><br>

                            <h6>Create about tiltle <span class="badge badge-pill badge-info">aboutcontent</span></h6>
                            {!! Form::textarea('aboutcontent', null,['class'=>'form-control', 'placeholder'=>'aboutcontent']) !!}<br>

                            <h6>Create about our team <span class="badge badge-pill badge-info">ourteam_title</span></h6>
                            {!! Form::text('ourteam_title', null,['class'=>'form-control', 'placeholder'=>'ourteam_title']) !!}<br>

                            <h6>Create image for <span class="badge badge-pill badge-info">ourteam_photo1</span></h6>
                            {!! Form::file('ourteam_photo1',['class'=>'form-control','id'=>'image44','placeholder'=>'ourteam_photo1']) !!}<br>
                            <img  class="img-thumbnail"  id="preview44" src="" width="70px" height="60px"/><br>
                            <h6>Create about our team <span class="badge badge-pill badge-info">ourteam1</span></h6>
                            {!! Form::textarea('ourteam1', null,['class'=>'form-control', 'placeholder'=>'ourteam1']) !!}<br>


                            <h6>Create image for <span class="badge badge-pill badge-info">ourteam_photo2</span></h6>
                            {!! Form::file('ourteam_photo2',['class'=>'form-control','id'=>'image45','placeholder'=>'ourteam_photo2']) !!}<br>
                            <img  class="img-thumbnail"  id="preview45" src="" width="70px" height="60px"/><br>
                            <h6>Create about our team <span class="badge badge-pill badge-info">ourteam2</span></h6>
                            {!! Form::textarea('ourteam2', null,['class'=>'form-control', 'placeholder'=>'ourteam2']) !!}<br>


                            <h6>Create image for <span class="badge badge-pill badge-info">ourteam_photo3</span></h6>
                            {!! Form::file('ourteam_photo3',['class'=>'form-control','id'=>'image46','placeholder'=>'ourteam_photo3']) !!}<br>
                            <img  class="img-thumbnail"  id="preview46" src="" width="70px" height="60px"/><br>
                            <h6>Create about our team <span class="badge badge-pill badge-info">ourteam3</span></h6>
                            {!! Form::textarea('ourteam3', null,['class'=>'form-control', 'placeholder'=>'ourteam3']) !!}<br>

                            <h6>Create about our client <span class="badge badge-pill badge-info">ourclint_title</span></h6>
                            {!! Form::text('ourclint_title', null,['class'=>'form-control', 'placeholder'=>'ourclint_title']) !!}<br>

                            <h6>Create image for <span class="badge badge-pill badge-info">ourclint_photo1</span></h6>
                            {!! Form::file('ourclint_photo1',['class'=>'form-control','id'=>'image47', 'placeholder'=>'ourclint_photo1']) !!}<br>
                            <img class="img-thumbnail" id="preview47" src="" width="70px" height="60px"/><br>

                            {!! Form::file('ourclint_photo2',['class'=>'form-control','id'=>'image48', 'placeholder'=>'ourclint_photo2']) !!}<br>
                            <img class="img-thumbnail" id="preview48" src="" width="70px" height="60px"/><br>

                            {!! Form::file('ourclint_photo3',['class'=>'form-control','id'=>'image49', 'placeholder'=>'ourclint_photo3']) !!}<br>
                            <img class="img-thumbnail" id="preview49" src="" width="70px" height="60px"/><br>

                            {!! Form::file('ourclint_photo4',['class'=>'form-control','id'=>'image50', 'placeholder'=>'ourclint_photo4']) !!}<br>
                            <img class="img-thumbnail" id="preview50" src="" width="70px" height="60px"/><br>

                            {!! Form::file('ourclint_photo5',['class'=>'form-control','id'=>'image51', 'placeholder'=>'ourclint_photo5']) !!}<br>
                            <img class="img-thumbnail" id="preview51" src="" width="70px" height="60px"/><br>

                            {!! Form::file('ourclint_photo6',['class'=>'form-control','id'=>'image52', 'placeholder'=>'ourclint_photo6']) !!}<br>
                            <img class="img-thumbnail" id="preview52" src="" width="70px" height="60px"/><br>

                            {!! Form::file('ourclint_photo7',['class'=>'form-control','id'=>'image53', 'placeholder'=>'ourclint_photo7']) !!}<br>
                            <img class="img-thumbnail" id="preview53" src="" width="70px" height="60px"/><br>

                            {!! Form::file('ourclint_photo8',['class'=>'form-control','id'=>'image54', 'placeholder'=>'ourclint_photo8']) !!}<br>
                            <img class="img-thumbnail" id="preview54" src="" width="70px" height="60px"/><br>

                            {!! Form::file('ourclint_photo9',['class'=>'form-control','id'=>'image55', 'placeholder'=>'ourclint_photo9']) !!}<br>
                            <img class="img-thumbnail" id="preview55" src="" width="70px" height="60px"/><br>

                            {!! Form::file('ourclint_photo10',['class'=>'form-control','id'=>'image56', 'placeholder'=>'ourclint_photo10']) !!}<br>
                            <img class="img-thumbnail" id="preview56" src="" width="70px" height="60px"/><br>

                            {!! Form::file('ourclint_photo11',['class'=>'form-control','id'=>'image57', 'placeholder'=>'ourclint_photo11']) !!}<br>
                            <img class="img-thumbnail" id="preview57" src="" width="70px" height="60px"/><br>


                            <br><br>
                            {!! Form::button('Create about', ['class'=>'btn btn-outline-purple btn-lg  waves-effect waves-light','type'=>'submit']) !!}
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
        CKEDITOR.replace( 'aboutcontent');
        CKEDITOR.replace( 'ourteam1');
        CKEDITOR.replace( 'ourteam2');
        CKEDITOR.replace( 'ourteam3');

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