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


                            {!! Form::open(['method'=>'put','route'=>array('topper.update',$topper->id),'class'=>'form-group', 'files' => true]) !!} <br>
                            <h6>Update image for <span class="badge badge-pill badge-info">Topper</span></h6>
                            {!! Form::file('icon1', ['class'=>'form-control', 'placeholder'=>'icon1']) !!}<br>
                            <img class="img-thumbnail"  src="{{asset('backend/assets/images/topper')}}/{{ $topper->icon1 }}"  width="50px" data-holder-rendered="true">
                            {!! Form::text('itext1', $topper->itext1,['class'=>'form-control', 'placeholder'=>'itext1']) !!}<br>
                            {!! Form::file('icon2', ['class'=>'form-control', 'placeholder'=>'icon1']) !!}<br>
                            <img class="img-thumbnail"   src="{{asset('backend/assets/images/topper')}}/{{ $topper->icon2 }}" width="50px" data-holder-rendered="true">
                            {!! Form::text('itext2', $topper->itext2,['class'=>'form-control', 'placeholder'=>'itext1']) !!}<br>
                            {!! Form::file('flag1', ['class'=>'form-control', 'placeholder'=>'flag1']) !!}<br>
                            <img class="img-thumbnail" src="{{asset('backend/assets/images/topper')}}/{{ $topper->flag1 }}" width="50px" data-holder-rendered="true">
                            {!! Form::text('ftext1',  $topper->ftext1,['class'=>'form-control', 'placeholder'=>'ftext1']) !!}<br>
                            {!! Form::file('flag2', ['class'=>'form-control', 'placeholder'=>'flag2']) !!}<br>
                            <img class="img-thumbnail"  src="{{asset('backend/assets/images/topper')}}/{{ $topper->flag2 }}" width="50px" data-holder-rendered="true">
                            {!! Form::text('ftext2', $topper->ftext2,['class'=>'form-control', 'placeholder'=>'ftext2']) !!}<br>
                            {!! Form::file('flag3', ['class'=>'form-control', 'placeholder'=>'flag3']) !!}<br>
                             <img class="img-thumbnail"  src="{{asset('backend/assets/images/topper')}}/{{ $topper->flag3 }}" width="50px" data-holder-rendered="true">
                            {!! Form::text('ftext3', $topper->ftext3,['class'=>'form-control', 'placeholder'=>'ftext3']) !!}<br>
                            <br><br>
                            {{--{!! Form::radio('color_id', null,['class'=>'form-control', 'placeholder'=>'Choose One']) !!}<br>--}}
                            {{--{!! Form::radio('size_id', null,['class'=>'form-control', 'placeholder'=>'Choose One']) !!}<br>--}}

                            {!! Form::button('Update topper', ['type'=>'submit', 'class'=>'btn btn-outline-pink btn-lg waves-effect waves-light']) !!}
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

