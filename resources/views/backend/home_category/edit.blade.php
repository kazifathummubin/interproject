@extends('backend.layout.app')
@section('pageTitle',' product category part Edit')
@section('content')
    <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">


                            {!! Form::open(['method'=>'put','route'=>array('home_category.update',$home_category->id),'class'=>'form-group', 'files' => true]) !!} <br>
                            {!! Form::text('title', $home_category->title,['class'=>'form-control', 'placeholder'=>'title']) !!}<br>
                            {!! Form::file('icon1', null, ['class'=>'form-control', 'placeholder'=>'icon1']) !!}<br>
                            <img class="img-thumbnail" src="{{asset('backend/assets/images/home_category')}}/{{  $home_category->icon1 }}"  width="100px" height="80px" data-holder-rendered="true">
                            {!! Form::text('text1', $home_category->text1,['class'=>'form-control', 'placeholder'=>'text1']) !!}<br>
                            {!! Form::file('icon2', null,['class'=>'form-control', 'placeholder'=>'icon2']) !!}<br>
                            <img class="img-thumbnail" src="{{asset('backend/assets/images/home_category')}}/{{  $home_category->icon2 }}"   width="100px" height="80px" data-holder-rendered="true">
                            {!! Form::text('text2', $home_category->text2,['class'=>'form-control', 'placeholder'=>'text2']) !!}<br>
                            {!! Form::file('icon3', null, ['class'=>'form-control', 'placeholder'=>'icon3']) !!}<br>
                            <img class="img-thumbnail" src="{{asset('backend/assets/images/home_category')}}/{{  $home_category->icon3 }}"  width="100px" height="80px" data-holder-rendered="true">
                            {!! Form::text('text3', $home_category->text3,['class'=>'form-control', 'placeholder'=>'text3']) !!}<br>
                            {!! Form::file('icon4', null,['class'=>'form-control', 'placeholder'=>'icon4']) !!}<br>
                            <img class="img-thumbnail" src="{{asset('backend/assets/images/home_category')}}/{{  $home_category->icon4 }}"   width="100px" height="80px" data-holder-rendered="true">
                            {!! Form::text('text4', $home_category->text4,['class'=>'form-control', 'placeholder'=>'text4']) !!}<br>
                            {!! Form::file('icon5', null,['class'=>'form-control', 'placeholder'=>'icon5']) !!}<br>
                            <img class="img-thumbnail" src="{{asset('backend/assets/images/home_category')}}/{{  $home_category->icon5 }}"   width="100px" height="80px" data-holder-rendered="true">
                            {!! Form::text('text5', $home_category->text5,['class'=>'form-control', 'placeholder'=>'text5']) !!}<br>

                            <br><br>
                            {{--{!! Form::radio('color_id', null,['class'=>'form-control', 'placeholder'=>'Choose One']) !!}<br>--}}
                            {{--{!! Form::radio('size_id', null,['class'=>'form-control', 'placeholder'=>'Choose One']) !!}<br>--}}

                            {!! Form::button('Update home category', ['type'=>'submit', 'class'=>'btn btn-outline-pink btn-lg waves-effect waves-light']) !!}
                            {!! Form::close() !!}


                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


    {{--<script>--}}
    {{--CKEDITOR.replace( 'body' );--}}
    {{--</script>--}}

@endsection

