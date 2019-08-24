@extends('backend.layout.app')
@section('pageTitle',' About page ')
@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                @if(session()->has('msg'))
                    <div class="alert alert-success" role="alert">
                        <strong>Well done!</strong> You successfully read this important alert message.
                    </div>
                    {{session('msg')}}
            </div>
        @endif
                <div class="col-12">
                    <div class="card m-b-4">
                        {{--<div class="card-body">--}}
                            <div class="table-rep-plugin">
                                <div class="table-responsive b-0" data-pattern="priority-columns">
                                    <div class="col-12">
                                        <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="100px" width="100%">
                                        <thead>
                                        <tr>
                                                <td>sl</td>
                                                <th>aboutcontentimage</th>
                                            <th>aboutcontent</th>
                                            <th>ourteam_title</th>
                                            <th>ourteam_photo1</th>
                                            <th>ourteam1</th>
                                            <th>ourteam_photo2</th>
                                            <th>ourteam2</th>
                                            <th>ourteam_photo3</th>
                                            <th>ourteam3</th>
                                            <th>ourclint_title</th>
                                            <th>ourclint_photo1</th>
                                                <th>ourclint_photo2</th>
                                                <th>ourclint_photo3</th>
                                                <th>ourclint_photo4</th>
                                                <th>ourclint_photo5</th>
                                                <th>ourclint_photo6</th>
                                                <th>ourclint_photo7</th>
                                                <th>ourclint_photo8</th>
                                                <th>ourclint_photo9</th>
                                                <th>ourclint_photo10</th>
                                                <th>ourclint_photo11</th>
                                                <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $sl=1 @endphp
                                        @foreach($abouts as $about)
                                            <tr>
                                                <td>{{$sl++}}</td>
                                                <td> <img class="img-thumbnail"  style="width=100px; height=100px;" src="{{asset('backend/assets/images/about')}}/{{ $about->aboutcontentimage}}" width="" data-holder-rendered="true"></td>
                                                <td>
                                                    {{--{!! $about->aboutcontent  !!}--}}
                                                </td> <br>
                                                <td>{{$about->ourteam_title }} </td> <br>
                                                <td> <img class="img-thumbnail"  style="width=100px; height=100px;" src="{{asset('backend/assets/images/about')}}/{{ $about->ourteam_photo1}}" width="" data-holder-rendered="true"></td>
                                                <td>
                                                    {{--{!! $about->ourteam1  !!}--}}
                                                </td> <br>
                                                <td> <img class="img-thumbnail"  style="width=100px; height=100px;" src="{{asset('backend/assets/images/about')}}/{{ $about->ourteam_photo2}}" width="" data-holder-rendered="true"></td>
                                                <td>
                                                    {{--{!! $about->ourteam2  !!}--}}
                                                </td> <br>
                                                <td> <img class="img-thumbnail"  style="width=100px; height=100px;" src="{{asset('backend/assets/images/about')}}/{{ $about->ourteam_photo3}}" width="" data-holder-rendered="true"></td>
                                                <td>
                                                    {{--{!! $about->ourteam3  !!}--}}

                                                <br>
                                                {{--<td>--}}
                                                {{--@php--}}
                                                    {{--$lenth= strlen($about->ourteam3);--}}
                                                {{--echo $about= substr($about->ourteam3,200,$lenth)--}}
                                                {{--@endphp--}}
                                                {{--</td>--}}
                                                <td>{{$about->ourclint_title }}</td> <br>
                                                <td> <img   style="width=100px; height=100px;" src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo1}}" width="" data-holder-rendered="true"></td>
                                                <td> <img   style="width=100px; height=100px;" src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo2}}"   width="" data-holder-rendered="true"></td>
                                                <td> <img   style="width=100px; height=100px;"  src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo3}}" width="" data-holder-rendered="true"></td>
                                                <td> <img   style="width=100px; height=100px;"  src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo4}}" width="" data-holder-rendered="true"></td>
                                                <td> <img  style="width=100px; height=100px;"  src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo5}}" width="" data-holder-rendered="true"></td>
                                                <td> <img  style="width=100px; height=100px;" src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo6}}" width="" data-holder-rendered="true"></td>
                                                <td> <img   style="width=100px; height=100px;" src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo7}}" width="" data-holder-rendered="true"></td>
                                                <td> <img  style="width=100px; height=100px;" src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo8}}" width="" data-holder-rendered="true"></td>
                                                <td> <img   style="width=100px; height=100px;" src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo9}}" width="" data-holder-rendered="true"></td>
                                                <td> <img   style="width=100px; height=100px;" src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo10}}" width="" data-holder-rendered="true"></td>
                                                <td> <img   style="width=100px; height=100px;" src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo11}}" width="" data-holder-rendered="true"></td>
                                                <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                     <div class="button_inline">
                                                    <a href="{{route('about.edit',$about->id)}}"> <button type="button" class="btn btn-outline-primary waves-effect waves-light">Edit</button></a>
                                                     </div>
                                                    <div class="button_inline">
                                                    <a href="{{route('about.create',$about->id)}}">  <button type="button" class="btn btn-outline-pink waves-effect waves-light">Create</button></a>
                                                     </div>
                                                    <div class="button_inline">
                                                        <a href="{{route('about.show',$about->id)}}">  <button type="button" class="btn btn-outline-pink waves-effect waves-light">show</button></a>
                                                    </div>
                                                    <div class="button_inline">
                                                        {!! Form::open(['method'=>'delete','route'=>array('about.destroy',$about->id),'class'=>'form-inline']) !!}
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

    <!-- end wrapper -->




    {{--<script>--}}
    {{--CKEDITOR.replace( 'body' );--}}
    {{--</script>--}}

@endsection


