@extends('backend.layout.app')
@section('pageTitle','Topper Edit')
@section('content')

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">


                            {!! Form::open(['method'=>'put','route'=>array('contact.update',$contact->id),'class'=>'form-group', 'files' => true]) !!} <br>

                            <h6>update Contact  <span class="badge badge-pill badge-info">title</span></h6>
                            {!! Form::text('title', $contact->title, ['class'=>'form-control', 'placeholder'=>'title']) !!}<br>

                            <h6>update Contact <span class="badge badge-pill badge-info">getintouch</span></h6>
                            {!! Form::textarea('getintouch', $contact->getintouch,['class'=>'form-control','placeholder'=>'getintouch']) !!}<br>

                            <h6>update Contact <span class="badge badge-pill badge-info">factory</span></h6>
                            {!! Form::textarea('factory', $contact->factory,['class'=>'form-control','placeholder'=>'factory']) !!}<br>

                            <h6>update Contact <span class="badge badge-pill badge-info">hours</span></h6>
                            {!! Form::textarea('hours', $contact->hours,['class'=>'form-control','placeholder'=>'hours']) !!}<br>

                            <br><br>
                            {!! Form::button('Update Contact', ['type'=>'submit', 'class'=>'btn btn-outline-pink btn-lg waves-effect waves-light']) !!}
                            {!! Form::close() !!}




                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
    <script>
//        CKEDITOR.disableAutoInline = true;
        CKEDITOR.replace( 'getintouch' );
        CKEDITOR.replace( 'factory' );
        CKEDITOR.replace( 'hours' );
    </script>

@endsection

