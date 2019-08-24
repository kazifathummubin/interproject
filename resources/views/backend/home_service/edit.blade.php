@extends('backend.layout.app')
@section('pageTitle','home_service Edit')
@section('content')
    <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            {!! Form::open(['method'=>'put','route'=>array('home_service.update',$home_service->id),'class'=>'form-group', 'files' => true]) !!} <br>

                            {!! Form::file('background', ['class'=>'form-control', 'placeholder'=>'background']) !!}<br>
                            <img class="img-thumbnail"  src="{{asset('backend/assets/images/home_service')}}/{{ $home_service->background }}" width="100px" height="80px" data-holder-rendered="true">
                            {!! Form::text('title',$home_service->title,['class'=>'form-control', 'placeholder'=>'title']) !!}<br>

                            {!! Form::file('icon1',['class'=>'form-control', 'placeholder'=>'icon1']) !!}<br>
                            <img class="img-thumbnail"  src="{{asset('backend/assets/images/home_service')}}/{{ $home_service->icon1 }}" width="100px" height="80px" data-holder-rendered="true">
                            {!! Form::text('text1', $home_service->text1,['class'=>'form-control', 'placeholder'=>'text1']) !!}<br>

                            {!! Form::file('icon2',['class'=>'form-control', 'placeholder'=>'icon2']) !!}<br>
                            <img class="img-thumbnail"  src="{{asset('backend/assets/images/home_service')}}/{{ $home_service->icon2 }}"  width="100px" height="80px" data-holder-rendered="true">
                            {!! Form::text('text2',  $home_service->text2,['class'=>'form-control', 'placeholder'=>'text2']) !!}<br>

                            {!! Form::file('icon3',['class'=>'form-control', 'placeholder'=>'icon3']) !!}<br>
                            <img class="img-thumbnail"  src="{{asset('backend/assets/images/home_service')}}/{{ $home_service->icon3 }}"  width="100px" height="80px" data-holder-rendered="true">
                            {!! Form::text('text3', $home_service->text3,['class'=>'form-control', 'placeholder'=>'text3']) !!}<br>

                            {!! Form::file('icon4',['class'=>'form-control', 'placeholder'=>'icon4']) !!}<br>
                            <img class="img-thumbnail"  src="{{asset('backend/assets/images/home_service')}}/{{ $home_service->icon4 }}" wwidth="100px" height="80px" data-holder-rendered="true">
                            {!! Form::text('text4',  $home_service->text4,['class'=>'form-control', 'placeholder'=>'text4']) !!}<br>

                            {!! Form::file('icon5',['class'=>'form-control', 'placeholder'=>'icon5']) !!}<br>
                            <img class="img-thumbnail"  src="{{asset('backend/assets/images/home_service')}}/{{ $home_service->text5 }}"  width="100px" height="80px" data-holder-rendered="true">
                            {!! Form::text('text5', $home_service->text5,['class'=>'form-control', 'placeholder'=>'text5']) !!}<br>

                            {!! Form::file('icon6',['class'=>'form-control', 'placeholder'=>'icon6']) !!}<br>
                            <img class="img-thumbnail"  src="{{asset('backend/assets/images/home_service')}}/{{ $home_service->text6 }}" width="100px" height="80px" data-holder-rendered="true">
                            {!! Form::text('text6',  $home_service->text6,['class'=>'form-control', 'placeholder'=>'text6']) !!}<br>

                            {!! Form::file('icon7',['class'=>'form-control', 'placeholder'=>'icon7']) !!}<br>
                            <img class="img-thumbnail"  src="{{asset('backend/assets/images/home_service')}}/{{ $home_service->icon7 }}"  width="100px" height="80px" data-holder-rendered="true">
                            {!! Form::text('text7', $home_service->text7,['class'=>'form-control', 'placeholder'=>'text7']) !!}<br>

                            {!! Form::file('icon8',['class'=>'form-control', 'placeholder'=>'icon8']) !!}<br>
                            <img class="img-thumbnail"  src="{{asset('backend/assets/images/home_service')}}/{{ $home_service->text8 }}" width="100px" height="80px" data-holder-rendered="true">
                            {!! Form::text('text8', $home_service->text8,['class'=>'form-control', 'placeholder'=>'text8']) !!}<br>
                            <br><br>
                            {!! Form::button('Update home_service', ['type'=>'submit', 'class'=>'btn btn-outline-pink btn-lg waves-effect waves-light']) !!}
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

