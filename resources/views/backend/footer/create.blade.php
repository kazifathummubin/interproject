@extends('backend.layout.app')
@section('pageTitle','create footer ')
@section('content')

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            {!! Form::open(['method'=>'post','route'=>'footer.store','files'=>true,'class'=>'form-group']) !!} <br>
                            <h6>Create image for <span class="badge badge-pill badge-info">footerbackground</span></h6>
                            {!! Form::file('footerbackground',['class'=>'form-control','id'=>'image1', 'placeholder'=>'footerbackground']) !!}<br>
                            <img  class="img-thumbnail"  id="preview1" src="" width="70px" height="60px"/><br>
                            <h6>Create image for <span class="badge badge-pill badge-info">footerimage</span></h6>
                            {!! Form::file('footerimage1',['class'=>'form-control','id'=>'image2','placeholder'=>'footerimage1']) !!}<br>
                            <img  class="img-thumbnail"  id="preview2" src=""width="70px" height="60px"/><br>
                            {!! Form::file('footerimage2',['class'=>'form-control','id'=>'image3', 'placeholder'=>'footerimage2']) !!}<br>
                            <img class="img-thumbnail" id="preview3" src="" width="70px" height="60px"/><br>
                            {!! Form::file('footerimage3', ['class'=>'form-control','id'=>'image4', 'placeholder'=>'footerimage3']) !!}<br>
                            <img  class="img-thumbnail" id="preview4" src="" width="70px" height="60px"/><br>
                            {!! Form::file('footerimage4', ['class'=>'form-control','id'=>'image5', 'placeholder'=>'footerimage4']) !!}<br>
                            <img  class="img-thumbnail" id="preview5" src="" width="70px" height="60px"/><br>
                            {!! Form::file('footerimage5', ['class'=>'form-control','id'=>'image6', 'placeholder'=>'footerimage5']) !!}<br>
                            <img  class="img-thumbnail" id="preview6" src="" width="70px" height="60px"/><br>
                            {!! Form::file('footerimage6', ['class'=>'form-control','id'=>'image7', 'placeholder'=>'footerimage6']) !!}<br>
                            <img  class="img-thumbnail" id="preview7" src="" width="70px" height="60px"/><br>
                            {!! Form::file('footerimage7',['class'=>'form-control','id'=>'image8', 'placeholder'=>'footerimage7']) !!}<br>
                            <img  class="img-thumbnail" id="preview8" src="" width="70px" height="60px"/><br>
                            {!! Form::file('footerimage8', ['class'=>'form-control','id'=>'image9', 'placeholder'=>'footerimage8']) !!}<br><hr>
                            <img  class="img-thumbnail" id="preview9" src=""width="70px" height="60px"/><br>
                            <h6>Create icon tiltle <span class="badge badge-pill badge-info">footertext1</span></h6>
                            {!! Form::textarea('footertext', null,['class'=>'form-control','placeholder'=>'footertext']) !!}<br>
                            <h6>Create image for <span class="badge badge-pill badge-info">footericon</span></h6>
                            {!! Form::file('footericon1',  ['class'=>'form-control','id'=>'image10', 'placeholder'=>'footericon1']) !!}<br>
                            <img  class="img-thumbnail" id="preview10" src="" width="70px" height="60px"/><br>
                            {!! Form::file('footericon2',  ['class'=>'form-control','id'=>'image11', 'placeholder'=>'footericon2']) !!}<br>
                            <img  class="img-thumbnail" id="preview11" src="" width="70px" height="60px"/><br>
                            {!! Form::file('footericon3',  ['class'=>'form-control','id'=>'image12', 'placeholder'=>'footericon3']) !!}<br>
                            <img class="img-thumbnail" id="preview12" src="" width="70px" height="60px"/><br>
                            {!! Form::file('footericon4',  ['class'=>'form-control','id'=>'image13', 'placeholder'=>'footericon4']) !!}<br>
                            <img  class="img-thumbnail" id="preview13" src="" width="70px" height="60px"/><br>
                            {!! Form::file('footericon5',  ['class'=>'form-control','id'=>'image14', 'placeholder'=>'footericon5']) !!}<br><hr>
                            <img  class="img-thumbnail" id="preview14" src="" width="70px" height="60px"/><br>
                            <h6>Create footer tiltle <span class="badge badge-pill badge-info">footertext2</span></h6>
                            {!! Form::textarea('text1', null,['class'=>'form-control', 'placeholder'=>'text1']) !!}<br>
                            <h6>Create footer tiltle <span class="badge badge-pill badge-info">footertext3</span></h6>
                            {!! Form::textarea('text2', null,['class'=>'form-control', 'placeholder'=>'text2']) !!}<br>
                            <h6>Create footer tiltle <span class="badge badge-pill badge-info">footertext4</span></h6>
                            {!! Form::textarea('text3', null,['class'=>'form-control', 'placeholder'=>'text3']) !!}<br>
                            <h6>Create footer tiltle <span class="badge badge-pill badge-info">footertext5</span></h6>
                            {!! Form::textarea('text4', null,['class'=>'form-control', 'placeholder'=>'text4']) !!}<br>
                            <h6>Create footer tiltle <span class="badge badge-pill badge-info">copyright</span></h6>
                            {!! Form::textarea('copyright', null,['class'=>'form-control', 'placeholder'=>'copyright']) !!}<br>


            <br><br>
            {{--{!! Form::radio('color_id', null,['class'=>'form-control', 'placeholder'=>'Choose One']) !!}<br>--}}
            {{--{!! Form::radio('size_id', null,['class'=>'form-control', 'placeholder'=>'Choose One']) !!}<br>--}}


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
        CKEDITOR.replace( 'footertext');
        CKEDITOR.replace( 'text1');
        CKEDITOR.replace( 'text2');
        CKEDITOR.replace( 'text3');
        CKEDITOR.replace( 'text4');
        CKEDITOR.replace( 'copyright');
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