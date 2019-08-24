@extends('backend.layout.app')
@section('pageTitle','Topper Edit')
@section('content')

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">


                            {!! Form::open(['method'=>'put','route'=>array('technology.update',$technology->id),'class'=>'form-group', 'files' => true]) !!} <br>
                            <h6>Upadated technology  <span class="badge badge-pill badge-info">title</span></h6>
                            {!! Form::text('techtitle',$technology->techtitle, ['class'=>'form-control','id'=>'image20', 'placeholder'=>'techtitle']) !!}<br>

                            <h6>Upadated technology <span class="badge badge-pill badge-info">Details</span></h6>
                            {!! Form::textarea('technology',$technology->technology, ['class'=>'form-control',  'placeholder'=>'technology']) !!}<br>

                            <h6>Upadated technology  <span class="badge badge-pill badge-info">image</span></h6>
                            {!! Form::file('techphoto', ['class'=>'form-control','id'=>'', 'placeholder'=>'techphoto']) !!}<br>
                            <img class="img-thumbnail"  id="" src="{{asset('backend/assets/images/technology')}}/{{ $technology->techphoto  }}" width="70px" height="60px"/><br>

                            <br><br>
                            {!! Form::button('Update technology', ['type'=>'submit', 'class'=>'btn btn-outline-pink btn-lg waves-effect waves-light']) !!}
                            {!! Form::close() !!}




                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
    <script>
    CKEDITOR.replace( 'technology' );
    </script>

@endsection

