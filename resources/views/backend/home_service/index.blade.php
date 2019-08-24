@extends('backend.layout.app')
@section('pageTitle',' home_service page ')
@section('content')

    <div class="wrapper">
        <div class="container-fluid">
            @if(session()->has('msg'))
                <div class="alert alert-danger text-center">
                    {{session('msg')}}
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-4">
                        <div class="card-body">
                            <div class="table-rep-plugin">
                                <div class="table-responsive b-0" data-pattern="priority-columns">
                                    <!--<table id="tech-companies-1" class="table  table-striped">-->
                                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>

                                            <tr>
                                                <td>sl</td>
                                                <th>background</th>
                                                <th>title</th>
                                                <th>icon1</th>
                                                <th>text1</th>
                                                <th>icon2</th>
                                                <th>text2</th>
                                                <th>icon3</th>
                                                <th>text3</th>
                                                <th>icon4</th>
                                                <th>text4</th>
                                                <th>icon5</th>
                                                <th>text5</th>
                                                <th>icon6</th>
                                                <th>text6</th>
                                                <th>icon7</th>
                                                <th>text7</th>
                                                <th>icon8</th>
                                                <th>text8</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $sl=1 @endphp
                                        @foreach($home_services as $home_service)
                                            <tr>
                                                <td>{{$sl++}}</td>
                                                    <td> <img style="width=800px; height=100px;"  src="{{asset('backend/assets/images/home_service')}}/{{$home_service->background}}"  data-holder-rendered="true"></td>
                                                     <td>{{ $home_service->title }}</td>
                                                    <td> <img  style="width=100px; height=100px;"  src="{{asset('backend/assets/images/home_service')}}/{{$home_service->icon1}}"  data-holder-rendered="true"></td>
                                                    <td>{{ $home_service->text1 }}</td>
                                                    <td> <img  style="width=100px; height=100px;"  src="{{asset('backend/assets/images/home_service')}}/{{$home_service->icon2}}"  data-holder-rendered="true"></td>
                                                    <td>{{ $home_service->text2 }}</td>
                                                    <td> <img  style="width=100px; height=100px;"  src="{{asset('backend/assets/images/home_service')}}/{{$home_service->icon3}}" data-holder-rendered="true"></td>
                                                    <td>{{ $home_service->text3 }}</td>
                                                    <td> <img style="width=100px; height=100px;"  src="{{asset('backend/assets/images/home_service')}}/{{$home_service->icon4}}"  data-holder-rendered="true"></td>
                                                    <td>{{ $home_service->text4 }}</td>
                                                    <td> <img style="width=100px; height=100px;"  src="{{asset('backend/assets/images/home_service')}}/{{$home_service->icon5}}" data-holder-rendered="true"></td>
                                                    <td>{{ $home_service->text5 }}</td>
                                                    <td> <img  style="width=100px; height=100px;"  src="{{asset('backend/assets/images/home_service')}}/{{$home_service->icon6}}" data-holder-rendered="true"></td>
                                                    <td>{{ $home_service->text6 }}</td>
                                                    <td> <img style="width=100px; height=100px;"  src="{{asset('backend/assets/images/home_service')}}/{{$home_service->icon8}}"  data-holder-rendered="true"></td>
                                                    <td>{{ $home_service->text7 }}</td>
                                                    <td> <img  style="width=100px; height=100px;"  src="{{asset('backend/assets/images/home_service')}}/{{$home_service->icon8}}" data-holder-rendered="true"></td>
                                                    <td>{{ $home_service->text8 }}</td>

                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                <div class="button_inline">
                                                    <a href="{{route('home_service.edit',$home_service->id)}}"> <button type="button" class="btn btn-outline-primary waves-effect waves-light">Edit</button></a>
                                                </div>

                                                <div class="button_inline">
                                                    <a href="{{route('home_service.create',$home_service->id)}}">  <button type="button" class="btn btn-outline-pink waves-effect waves-light">Create</button></a>
                                                </div>
                                                    <div class="button_inline">
                                                        {!! Form::open(['method'=>'delete','route'=>array('home_service.destroy',$home_service->id),'class'=>'form-inline']) !!}
                                                        {!! Form::button('Delete',['class'=>'btn btn-outline-purple waves-effect waves-light', 'type'=>'submit','onclick'=>'return confirm("Are you sure you want to delete this brand ?");' ]) !!}
                                                        {!! Form::close() !!}
                                                    </div>
                                            </div>
                                            </td>
                                        </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- end container -->
    </div>
    <!-- end wrapper -->




    {{--<script>--}}
    {{--CKEDITOR.replace( 'body' );--}}
    {{--</script>--}}

@endsection


