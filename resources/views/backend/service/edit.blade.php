@extends('backend.layout.app')
@section('pageTitle','Footer Edit')
@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            {!! Form::open(['method'=>'put','route'=>array('service.update',$service->id),'class'=>'form-group', 'files'=>true]) !!} <br>
                            <h6>Create Service  for <span class="badge badge-pill badge-info">Title</span></h6>
                            {!! Form::text('title', $service->title,['class'=>'form-control', 'placeholder'=>'title']) !!}<br>

                            <h6>Create Service  for <span class="badge badge-pill badge-info">service1</span></h6><br>
                            {!! Form::text('service1', $service->service1,['class'=>'form-control', 'placeholder'=>'service1']) !!}<br>
                            <h6>Create Service  for <span class="badge badge-pill badge-info">service_content1</span></h6><br>
                            {!! Form::textarea('service_content1', $service->service_content1,['class'=>'form-control', 'placeholder'=>'service_content1']) !!}<br>
                            <h6>Create image for <span class="badge badge-pill badge-info">service photo</span></h6><br>
                            {!! Form::file('service_photo1',['class'=>'form-control','placeholder'=>'service_photo1']) !!}<br>
                            <img class="img-thumbnail" src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo1 }}" width="50px" data-holder-rendered="true"><br>
                            {!! Form::file('service_photo2',['class'=>'form-control','placeholder'=>'service_photo2']) !!}<br>
                            <img class="img-thumbnail" src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo2 }}" width="50px" data-holder-rendered="true"><br>
                            {!! Form::file('service_photo3', ['class'=>'form-control','placeholder'=>'service_photo3']) !!}<br>
                            <img class="img-thumbnail" src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo3 }}" width="50px" data-holder-rendered="true"><br>

                            <h6>Create Service  for <span class="badge badge-pill badge-info">service2</span></h6><br>
                            {!! Form::text('service2',  $service->service2,['class'=>'form-control', 'placeholder'=>'service2']) !!}<br>
                            <h6>Create Service  for <span class="badge badge-pill badge-info">srvice_content2</span></h6><br>
                            {!! Form::textarea('service_content2',  $service->service_content2,['class'=>'form-control', 'placeholder'=>'service_content2']) !!}<br>
                            <h6>Create image for <span class="badge badge-pill badge-info">service photo</span></h6><br>
                            {!! Form::file('service_photo4',['class'=>'form-control','placeholder'=>'service_photo4']) !!}<br>
                            <img class="img-thumbnail"  src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo4 }}" width="50px" data-holder-rendered="true"><br>
                            {!! Form::file('service_photo5',['class'=>'form-control', 'placeholder'=>'service_photo5']) !!}<br>
                            <img class="img-thumbnail"  src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo5 }}" width="50px" data-holder-rendered="true"><br>
                            {!! Form::file('service_photo6', ['class'=>'form-control', 'placeholder'=>'service_photo6']) !!}<br>
                            <img class="img-thumbnail"  src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo6 }}" width="50px" data-holder-rendered="true"><br>

                            <h6>Create Service for <span class="badge badge-pill badge-info">service3</span></h6><br>
                            {!! Form::text('service3',  $service->service3,['class'=>'form-control', 'placeholder'=>'service3']) !!}<br>
                            <h6>Create Service  for <span class="badge badge-pill badge-info">service_content3</span></h6><br>
                            {!! Form::textarea('service_content3',  $service->service_content3,['class'=>'form-control', 'placeholder'=>'service_content3']) !!}<br>
                            <h6>Create image for <span class="badge badge-pill badge-info">service photo</span></h6><br>
                            {!! Form::file('service_photo7',['class'=>'form-control','placeholder'=>'service_photo7']) !!}<br>
                            <img class="img-thumbnail"  src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo7 }}" width="50px" data-holder-rendered="true"><br>
                            {!! Form::file('service_photo8',['class'=>'form-control', 'placeholder'=>'service_photo8']) !!}<br>
                            <img class="img-thumbnail"  src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo8 }}" width="50px" data-holder-rendered="true"><br>
                            {!! Form::file('service_photo9', ['class'=>'form-control', 'placeholder'=>'service_photo9']) !!}<br>
                            <img class="img-thumbnail"  src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo9 }}" width="50px" data-holder-rendered="true"><br>
                            <br><br>
                            {!! Form::button('Update service', ['type'=>'submit', 'class'=>'btn btn-outline-pink btn-lg waves-effect waves-light']) !!}
                            {!! Form::close() !!}


                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'footertext');
        CKEDITOR.replace( 'text1');
        CKEDITOR.replace( 'text2');
        CKEDITOR.replace( 'text3');
        CKEDITOR.replace( 'text4');
        CKEDITOR.replace( 'copyright');
    </script>

@endsection

