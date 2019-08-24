@extends('backend.layout.app')
@section('pageTitle','menu Edit')
@section('content')
    <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">

                            {!! Form::open(['method'=>'put','route'=>array('menu.update',$menu->id),'class'=>'form-group']) !!} <br>

                            {!! Form::text('name', $menu->name,['class'=>'form-control', 'placeholder'=>'name']) !!}<br>

                            {!! Form::text('order', $menu->order,['class'=>'form-control', 'placeholder'=>'order']) !!}<br>

                            {!! Form::text('route',  $menu->route,['class'=>'form-control', 'placeholder'=>'route']) !!}<br>

                            <br><br>
                            {{--{!! Form::radio('color_id', null,['class'=>'form-control', 'placeholder'=>'Choose One']) !!}<br>--}}
                            {{--{!! Form::radio('size_id', null,['class'=>'form-control', 'placeholder'=>'Choose One']) !!}<br>--}}

                            {!! Form::button('Update menu', ['type'=>'submit', 'class'=>'btn btn-outline-pink btn-lg waves-effect waves-light']) !!}
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

