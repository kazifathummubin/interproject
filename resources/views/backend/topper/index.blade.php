@extends('backend.layout.app')
@section('pageTitle',' Topper page ')
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
                                            <th>icon1</th>
                                            <th>itext1</th>
                                            <th>icon2</th>
                                            <th>itex2</th>
                                            <th>flag1</th>
                                            <th>ftext1</th>
                                            <th>flag2</th>
                                            <th>ftext2</th>
                                            <th>flag3</th>
                                            <th>ftext3</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $sl=1 @endphp
                                        @foreach($toppers as $topper)
                                            <tr>
                                                <td>{{$sl++}}</td>
                                            <td> <img     src="{{asset('backend/assets/images/topper')}}/{{$topper->icon1}}" width="50px" height="60px" data-holder-rendered="true"></td>
                                            <td>{{ $topper->itext1 }}</td>
                                            <td> <img   src="{{asset('backend/assets/images/topper')}}/{{$topper->icon2}}" width="50px" height="60px" data-holder-rendered="true"></td>
                                            <td>{{ $topper->itext2 }}</td>
                                            <td> <img class="img-thumbnail"  src="{{asset('backend/assets/images/topper')}}/{{$topper->flag1}}"width="70px" height="60px" data-holder-rendered="true"></td>
                                            <td>{{ $topper->ftext1 }}</td>
                                            <td> <img class="img-thumbnail"  src="{{asset('backend/assets/images/topper')}}/{{$topper->flag2}}" width="70px" height="60px" data-holder-rendered="true"></td>
                                            <td>{{ $topper->ftext2 }}</td>
                                            <td> <img class="img-thumbnail"  src="{{asset('backend/assets/images/topper')}}/{{$topper->flag3}}" width="70px" height="60px" data-holder-rendered="true"></td>
                                            <td>{{ $topper->ftext3 }}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                <div class="button_inline">
                                                    <a href="{{route('topper.edit',$topper->id)}}"> <button type="button" class="btn btn-outline-primary waves-effect waves-light">Edit</button></a>
                                                </div>

                                                <div class="button_inline">
                                                    <a href="{{route('topper.create',$topper->id)}}">  <button type="button" class="btn btn-outline-pink waves-effect waves-light">Create</button></a>
                                                </div>
                                                    <div class="button_inline">
                                                        {!! Form::open(['method'=>'delete','route'=>array('topper.destroy',$topper->id),'class'=>'form-inline']) !!}
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


