@extends('backend.layout.app')
@section('pageTitle','home_product Edit')
@section('content')
    <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">


                            {!! Form::open(['method'=>'put','route'=>array('home_product.update',$home_product->id),'class'=>'form-group', 'files' => true]) !!} <br>
                            {!! Form::text('title', $home_product->title,['class'=>'form-control', 'placeholder'=>'title']) !!}<br>
                            {!! Form::file('photo1', ['class'=>'form-control', 'placeholder'=>'photo1']) !!}<br>
                            <img class="img-thumbnail" src="{{asset('backend/assets/images/home_product')}}/{{ $home_product->photo1 }}" width="100px" height="80px  data-holder-rendered="true">
                            {!! Form::file('photo2', ['class'=>'form-control', 'placeholder'=>'photo2']) !!}<br>
                            <img class="img-thumbnail" src="{{asset('backend/assets/images/home_product')}}/{{ $home_product->photo2 }}" width="100px" height="80px data-holder-rendered="true">
                            {!! Form::file('photo3', ['class'=>'form-control', 'placeholder'=>'photo3']) !!}<br>
                            <img class="img-thumbnail" src="{{asset('backend/assets/images/home_product')}}/{{ $home_product->photo3 }}"  width="100px" height="80px data-holder-rendered="true">
                            {!! Form::file('photo4', ['class'=>'form-control', 'placeholder'=>'photo4']) !!}<br>
                            <img class="img-thumbnail" src="{{asset('backend/assets/images/home_product')}}/{{ $home_product->photo4 }}" width="100px" height="80px data-holder-rendered="true">
                            {!! Form::file('photo5', ['class'=>'form-control', 'placeholder'=>'photo5']) !!}<br>
                            <img class="img-thumbnail" src="{{asset('backend/assets/images/home_product')}}/{{ $home_product->photo5 }}" width="100px" height="80px data-holder-rendered="true">
                            {!! Form::file('photo6', ['class'=>'form-control', 'placeholder'=>'photo6']) !!}<br>
                            <img class="img-thumbnail" src="{{asset('backend/assets/images/home_product')}}/{{ $home_product->photo6 }}" width="100px" height="80px  data-holder-rendered="true">


                            <br><br>
                            {{--{!! Form::radio('color_id', null,['class'=>'form-control', 'placeholder'=>'Choose One']) !!}<br>--}}
                            {{--{!! Form::radio('size_id', null,['class'=>'form-control', 'placeholder'=>'Choose One']) !!}<br>--}}

                            {!! Form::button('Update home_product', ['type'=>'submit', 'class'=>'btn btn-outline-pink btn-lg waves-effect waves-light']) !!}
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

