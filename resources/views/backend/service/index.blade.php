@extends('backend.layout.app')
@section('pageTitle',' service page ')
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
                                                <th>Title</th>
                                                <th>service1</th>
                                                <th>service_content1</th>
                                                <th>service_photo1</th>
                                                <th>service_photo2</th>
                                                <th>service_photo3</th>
                                                <th>service2</th>
                                                <th>service_content2</th>
                                                <th>service_photo4</th>
                                                <th>service_photo5</th>
                                                <th>service_photo6</th>
                                                <th>service3</th>
                                                <th>service_content3</th>
                                                <th>service_photo7</th>
                                                <th>service_photo8</th>
                                                <th>service_photo9</th>
                                                <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $sl=1 @endphp
                                        @foreach($services as $service)
                                            <tr>
                                                <td>{{$sl++}}</td>
                                                <td>{{ $service->title  }} <br>
                                                <td>{{$service->service1}}</td>
                                                <td>
                                                    {{--{!!  $service->service_content1 !!}--}}
                                                </td>
                                                <td> <img  src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo1}}" width="200px" ></td>
                                                <td> <img  src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo2}}" width="200px"></td>
                                                <td> <img   src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo3}}"width="200px" ></td>

                                                <td>{{ $service->service2 }}</td>
                                                <td>
                                                    {{--{!!  $service->service_content2 !!}--}}
                                                </td>
                                                <td> <img    src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo4}}" width="200px"></td>
                                                <td> <img   src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo5}}"width="200px"></td>
                                                <td> <img   src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo6}}"width="200px"></td>

                                                <td>{{$service->service3 }}</td>
                                                <td>
                                                    {{--{!!  $service->service_content3 !!}--}}
                                                </td>
                                                <td> <img   src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo7}}"width="200px" ></td>
                                                <td> <img   src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo8}}" width="200px"></td>
                                                <td> <img  src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo9}}" width="200px"></td>



                                                <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <div class="button_inline">
                                                        <a href="{{route('service.edit',$service->id)}}"> <button type="button" class="btn btn-outline-primary waves-effect waves-light">Edit</button></a>
                                                    </div>

                                                    <div class="button_inline">
                                                        <a href="{{route('service.create',$service->id)}}">  <button type="button" class="btn btn-outline-pink waves-effect waves-light">Create</button></a>
                                                    </div>
                                                    <div class="button_inline">
                                                        <a href="{{route('service.show',$service->id)}}">  <button type="button" class="btn btn-outline-purple waves-effect waves-light">show</button></a>
                                                    </div>
                                                    <div class="button_inline">
                                                        {!! Form::open(['method'=>'delete','route'=>array('service.destroy',$service->id),'class'=>'form-inline']) !!}
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


