@extends('backend.layout.app')
@section('pageTitle','Topper Edit')
@section('content')
    <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">


                            {!! Form::open(['method'=>'put','route'=>array('logo.update',$logo->id),'class'=>'form-group', 'files' => true]) !!} <br>
                            <h6>Upadated image logo <span class="badge badge-pill badge-info">logo</span></h6>
                            {!! Form::file('logo', null, ['class'=>'form-control', 'placeholder'=>'logo']) !!}<br><br>
                            <img class="img-thumbnail"   src="{{asset('backend/assets/images/logo')}}/{{ $logo->logo }}" width="50px" data-holder-rendered="true"><br>
                            <h6>Updated image favicon <span class="badge badge-pill badge-info">favicon</span></h6>
                            {!! Form::file('favicon', null,['class'=>'form-control', 'placeholder'=>'favicon']) !!}<br><br>
                            <img class="img-thumbnail"   src="{{asset('backend/assets/images/logo')}}/{{ $logo->favicon }}" width="50px" data-holder-rendered="true"><br>
                            <br><br>
                            {!! Form::button('Update logo', ['type'=>'submit', 'class'=>'btn btn-outline-pink btn-lg waves-effect waves-light']) !!}
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

