@extends('backend.layout.app')
@section('pageTitle','Topper Edit')
@section('content')

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">


                            {!! Form::open(['method'=>'put','route'=>array('news.update',$news->id),'class'=>'form-group', 'files' => true]) !!} <br>
                            <h6>Upadated news  <span class="badge badge-pill badge-info">title</span></h6>
                            {!! Form::text('title',$news->title, ['class'=>'form-control', 'placeholder'=>'title']) !!}<br>

                            <h6>Upadated news <span class="badge badge-pill badge-info">description</span></h6>
                            {!! Form::textarea('news_description',$news->news_description, ['class'=>'form-control',  'placeholder'=>'news_description']) !!}<br>

                            <h6>Upadated news  <span class="badge badge-pill badge-info">image</span></h6>
                            {!! Form::file('news_photo', ['class'=>'form-control','id'=>'', 'placeholder'=>'news_photo']) !!}<br>
                            <img class="img-thumbnail"  id="" src="{{asset('backend/assets/images/news')}}/{{$news->news_photo }}" width="70px" height="60px"/><br>

                            <br><br>
                            {!! Form::button('Update news', ['type'=>'submit', 'class'=>'btn btn-outline-pink btn-lg waves-effect waves-light']) !!}
                            {!! Form::close() !!}




                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
    <script>
    CKEDITOR.replace( 'news_description' );
    </script>

@endsection

