@extends('backend.layout.app')
@section('pageTitle','Footer Edit')
@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            {!! Form::open(['method'=>'put','route'=>array('footer.update',$footer->id),'class'=>'form-group', 'files' => true]) !!} <br>
                            <h6>Create image for <span class="badge badge-pill badge-info">footerbackground</span></h6>
                            {!! Form::file('footerbackground', null, ['class'=>'form-control', 'placeholder'=>'footerbackground']) !!}<br>
                            <img  class="img-thumbnail"   src="{{asset('backend/assets/images/footer')}}/{{ $footer->footerbackground }}" width="50px" data-holder-rendered="true"><br>
                            <h6>Create image for <span class="badge badge-pill badge-info">footerimage</span></h6>
                            {!! Form::file('footerimage1', null, ['class'=>'form-control', 'placeholder'=>'footerimage1']) !!}<br>
                            <img  class="img-thumbnail"   src="{{asset('backend/assets/images/footer')}}/{{ $footer->footerimage1 }}" width="50px" data-holder-rendered="true"><br>
                            {!! Form::file('footerimage2', null, ['class'=>'form-control', 'placeholder'=>'footerimage2']) !!}<br>
                            <img  class="img-thumbnail"   src="{{asset('backend/assets/images/footer')}}/{{ $footer->footerimage2 }}" width="50px" data-holder-rendered="true"><br>
                            {!! Form::file('footerimage3', null, ['class'=>'form-control', 'placeholder'=>'footerimage3']) !!}<br>
                            <img  class="img-thumbnail"  src="{{asset('backend/assets/images/footer')}}/{{ $footer->footerimage3 }}" width="50px" data-holder-rendered="true"><br>
                            {!! Form::file('footerimage4', null, ['class'=>'form-control', 'placeholder'=>'footerimage4']) !!}<br>
                            <img class="img-thumbnail"   src="{{asset('backend/assets/images/footer')}}/{{ $footer->footerimage4 }}" width="50px" data-holder-rendered="true"><br>
                            {!! Form::file('footerimage5', null, ['class'=>'form-control', 'placeholder'=>'footerimage5']) !!}<br>
                            <img class="img-thumbnail"   src="{{asset('backend/assets/images/footer')}}/{{ $footer->footerimage5 }}" width="50px" data-holder-rendered="true"><br>
                            {!! Form::file('footerimage6', null, ['class'=>'form-control', 'placeholder'=>'footerimage6']) !!}<br>
                            <img  class="img-thumbnail"  src="{{asset('backend/assets/images/footer')}}/{{ $footer->footerimage6 }}" width="50px" data-holder-rendered="true"><br>
                            {!! Form::file('footerimage7', null, ['class'=>'form-control', 'placeholder'=>'footerimage7']) !!}<br>
                            <img class="img-thumbnail"   src="{{asset('backend/assets/images/footer')}}/{{ $footer->footerimage7 }}" width="50px" data-holder-rendered="true"><br>
                            {!! Form::file('footerimage8', null, ['class'=>'form-control', 'placeholder'=>'footerimage8']) !!}<br>
                            <img  class="img-thumbnail"  src="{{asset('backend/assets/images/footer')}}/{{ $footer->footerimage8 }}" width="50px" data-holder-rendered="true"><br><br>
                            {!! Form::textarea('footertext', $footer->footertext,['class'=>'form-control', 'placeholder'=>'footertext']) !!}
                            <h6>Create image for <span class="badge badge-pill badge-info">footericon</span></h6>
                            {!! Form::file('footericon1', null, ['class'=>'form-control', 'placeholder'=>'footericon1']) !!}<br>
                            <img class="img-thumbnail"   src="{{asset('backend/assets/images/footer')}}/{{ $footer->footericon1 }}" width="50px" data-holder-rendered="true"><br>
                            {!! Form::file('footericon2', null, ['class'=>'form-control', 'placeholder'=>'footericon2']) !!}<br>
                            <img  class="img-thumbnail"  src="{{asset('backend/assets/images/footer')}}/{{ $footer->footericon2 }}" width="50px" data-holder-rendered="true"><br>
                            {!! Form::file('footericon3', null, ['class'=>'form-control', 'placeholder'=>'footericon3']) !!}<br>
                            <img  class="img-thumbnail"  src="{{asset('backend/assets/images/footer')}}/{{ $footer->footericon3 }}" width="50px" data-holder-rendered="true"><br>
                            {!! Form::file('footericon4', null, ['class'=>'form-control', 'placeholder'=>'footericon4']) !!}<br>
                            <img class="img-thumbnail"   src="{{asset('backend/assets/images/footer')}}/{{ $footer->footericon4 }}" width="50px" data-holder-rendered="true"><br>
                            {!! Form::file('footericon5', null, ['class'=>'form-control', 'placeholder'=>'footericon5']) !!}<br>
                            <img  class="img-thumbnail"  src="{{asset('backend/assets/images/footer')}}/{{ $footer->footericon5 }}" width="50px" data-holder-rendered="true"><br><br>
                            {!! Form::textarea('text1', $footer->text1,['class'=>'form-control', 'placeholder'=>'text1']) !!}<br>
                            {!! Form::textarea('text2', $footer->text2,['class'=>'form-control', 'placeholder'=>'text2']) !!}<br>
                            {!! Form::textarea('text3', $footer->text3,['class'=>'form-control', 'placeholder'=>'text3']) !!}<br>
                            {!! Form::textarea('text4', $footer->text4,['class'=>'form-control', 'placeholder'=>'text4']) !!}<br>
                            {!! Form::textarea('copyright', $footer->copyright,['class'=>'form-control', 'placeholder'=>'copyright']) !!}<br>

                            <br><br>
                            {{--{!! Form::radio('color_id', null,['class'=>'form-control', 'placeholder'=>'Choose One']) !!}<br>--}}
                            {{--{!! Form::radio('size_id', null,['class'=>'form-control', 'placeholder'=>'Choose One']) !!}<br>--}}

                            {!! Form::button('Update footer', ['type'=>'submit', 'class'=>'btn btn-outline-pink btn-lg waves-effect waves-light']) !!}
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

