@extends('backend.layout.app')
@section('pageTitle','Footer Edit')
@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            {!! Form::open(['method'=>'put','route'=>array('about.update',$about->id),'class'=>'form-group', 'files' => true]) !!} <br>

                            <h6>Update image for <span class="badge badge-pill badge-info">aboutcontentimage</span></h6>
                            {!! Form::file('aboutcontentimage',['class'=>'form-control', 'placeholder'=>'aboutcontentimage']) !!}<br>
                            <img  class="img-thumbnail"  src="{{asset('backend/assets/images/about')}}/{{ $about->aboutcontentimage }}" width="70px" height="60px"/><br>

                            <h6>Update about tiltle <span class="badge badge-pill badge-info">aboutcontent</span></h6>
                            {!! Form::textarea('aboutcontent', $about->aboutcontent,['class'=>'form-control', 'placeholder'=>'aboutcontent']) !!}<br>

                            <h6>Update about our team <span class="badge badge-pill badge-info">ourteam_title</span></h6>
                            {!! Form::text('ourteam_title',  $about->ourteam_title,['class'=>'form-control', 'placeholder'=>'ourteam_title']) !!}<br>

                            <h6>Update image for <span class="badge badge-pill badge-info">ourteam_photo1</span></h6>
                            {!! Form::file('ourteam_photo1',['class'=>'form-control','placeholder'=>'ourteam_photo1']) !!}<br>
                            <img  class="img-thumbnail"  src="{{asset('backend/assets/images/about')}}/{{ $about->ourteam_photo1 }}" width="70px" height="60px"/><br>
                            <h6>Update about our team <span class="badge badge-pill badge-info">ourteam1</span></h6>
                            {!! Form::textarea('ourteam1', $about->ourteam1,['class'=>'form-control', 'placeholder'=>'ourteam1']) !!}<br>

                            <h6>Update image for <span class="badge badge-pill badge-info">ourteam_photo2</span></h6>
                            {!! Form::file('ourteam_photo2',['class'=>'form-control','placeholder'=>'ourteam_photo2']) !!}<br>
                            <img  class="img-thumbnail"  src="{{asset('backend/assets/images/about')}}/{{ $about->ourteam_photo2 }}" width="70px" height="60px"/><br>
                            <h6>Update about our team <span class="badge badge-pill badge-info">ourteam2</span></h6>
                            {!! Form::textarea('ourteam2', $about->ourteam2,['class'=>'form-control', 'placeholder'=>'ourteam2']) !!}<br>

                            <h6>Update image for <span class="badge badge-pill badge-info">ourteam_photo3</span></h6>
                            {!! Form::file('ourteam_photo3',['class'=>'form-control','placeholder'=>'ourteam_photo3']) !!}<br>
                            <img  class="img-thumbnail"  src="{{asset('backend/assets/images/about')}}/{{ $about->ourteam_photo3 }}" width="70px" height="60px"/><br>
                            <h6>Update about our team <span class="badge badge-pill badge-info">ourteam3</span></h6>
                            {!! Form::textarea('ourteam3', $about->ourteam3,['class'=>'form-control', 'placeholder'=>'ourteam3']) !!}<br>

                            <h6>Update about our client <span class="badge badge-pill badge-info">ourclint_title</span></h6>
                            {!! Form::text('ourclint_title',  $about->ourclint_title,['class'=>'form-control', 'placeholder'=>'ourclint_title']) !!}<br>

                            <h6>Update image for <span class="badge badge-pill badge-info">ourclint_photo</span></h6>
                            {!! Form::file('ourclint_photo1',['class'=>'form-control','id'=>'', 'placeholder'=>'ourclint_photo1']) !!}<br>
                            <img class="img-thumbnail" id="" src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo1 }}" width="70px" height="60px"/><br>

                            {!! Form::file('ourclint_photo2',['class'=>'form-control','id'=>'', 'placeholder'=>'ourclint_photo2']) !!}<br>
                            <img class="img-thumbnail" id="" src={{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo2 }}"" width="70px" height="60px"/><br>

                            {!! Form::file('ourclint_photo3',['class'=>'form-control','id'=>'', 'placeholder'=>'ourclint_photo3']) !!}<br>
                            <img class="img-thumbnail" id="" src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo3 }}" width="70px" height="60px"/><br>

                            {!! Form::file('ourclint_photo4',['class'=>'form-control','id'=>'', 'placeholder'=>'ourclint_photo4']) !!}<br>
                            <img class="img-thumbnail" id="" src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo4 }}" width="70px" height="60px"/><br>

                            {!! Form::file('ourclint_photo5',['class'=>'form-control','id'=>'', 'placeholder'=>'ourclint_photo5']) !!}<br>
                            <img class="img-thumbnail" id="" src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo5 }}" width="70px" height="60px"/><br>

                            {!! Form::file('ourclint_photo6',['class'=>'form-control','id'=>'', 'placeholder'=>'ourclint_photo6']) !!}<br>
                            <img class="img-thumbnail" id="" src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo6 }}" width="70px" height="60px"/><br>

                            {!! Form::file('ourclint_photo7',['class'=>'form-control','id'=>'', 'placeholder'=>'ourclint_photo7']) !!}<br>
                            <img class="img-thumbnail" id="" src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo7 }}" width="70px" height="60px"/><br>

                            {!! Form::file('ourclint_photo8',['class'=>'form-control','id'=>'', 'placeholder'=>'ourclint_photo8']) !!}<br>
                            <img class="img-thumbnail" id="" src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo8 }}" width="70px" height="60px"/><br>

                            {!! Form::file('ourclint_photo9',['class'=>'form-control','id'=>'', 'placeholder'=>'ourclint_photo9']) !!}<br>
                            <img class="img-thumbnail" id="" src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo9 }}" width="70px" height="60px"/><br>

                            {!! Form::file('ourclint_photo10',['class'=>'form-control','id'=>'', 'placeholder'=>'ourclint_photo10']) !!}<br>
                            <img class="img-thumbnail" id="" src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo10 }}" width="70px" height="60px"/><br>

                            {!! Form::file('ourclint_photo11',['class'=>'form-control','id'=>'', 'placeholder'=>'ourclint_photo11']) !!}<br>
                            <img class="img-thumbnail" id="" src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo11 }}" width="70px" height="60px"/><br>

                            <br><br>
                            {!! Form::button('Update about', ['type'=>'submit', 'class'=>'btn btn-outline-pink btn-lg waves-effect waves-light']) !!}
                            {!! Form::close() !!}


                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'aboutcontent');
        CKEDITOR.replace( 'ourteam1');
        CKEDITOR.replace( 'ourteam2');
        CKEDITOR.replace( 'ourteam3');
    </script>

@endsection

