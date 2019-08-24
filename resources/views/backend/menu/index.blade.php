@extends('backend.layout.app')
@section('pageTitle',' menu  page ')
@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if(session()->has('msg'))
                        <div class="alert alert-danger text-center">
                            {{session('msg')}}
                        </div>
                    @endif
                    <div class="card m-b-4">
                        <div class="card-body">
                            <div class="table-rep-plugin">
                                <div class="table-responsive b-0" data-pattern="priority-columns">
                                    <!--<table id="tech-companies-1" class="table  table-striped">-->
                                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>

                                            <tr>
                                                <td>sl</td>
                                            <th>name</th>
                                            <th>order</th>
                                            <th>route</th>

                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $sl=1 @endphp
                                        @foreach($menus as $menu)
                                            <tr>
                                                <td>{{$sl++}}</td>

                                            <td>{{ $menu->name }}</td>

                                            <td>{{ $menu->order }}</td>

                                            <td>{{ $menu->route }}</td>



                                                <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                <div class="button_inline">
                                                    <a href="{{route('menu.edit',$menu->id)}}"> <button type="button" class="btn btn-outline-primary waves-effect waves-light">Edit</button></a>
                                                </div>

                                                <div class="button_inline">
                                                    <a href="{{route('menu.create',$menu->id)}}">  <button type="button" class="btn btn-outline-pink waves-effect waves-light">Create</button></a>
                                                </div>
                                                    <div class="button_inline">
                                                        {!! Form::open(['method'=>'delete','route'=>array('menu.destroy',$menu->id),'class'=>'form-inline']) !!}
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


