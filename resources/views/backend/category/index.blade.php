@extends('backend.layout.app')
@section('pageTitle','Category List')
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
                    <div class="card-body">
                        <div class="table-rep-plugin">
                            <div class="table-responsive b-0" data-pattern="priority-columns">
                                {{--<table id="tech-companies-1" class="table  table-striped">--}}
                                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">

                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Category Name</th>
                        <th>Remarks</th>
                        <th>Created By</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $sl=1 @endphp
                 @foreach($categories as $category)
                    <tr>
                        <td>{{$sl++}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->remarks}}</td>
                        <td>
                        {{$category->User->name}}
                        </td>
                        <td>{{$category->created_at}}</td>
                        <td>{{$category->updated_at}}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <div class="button_inline">
                                    <a href="{{route('category.edit',$category->id)}}"> <button type="button" class="btn btn-outline-primary waves-effect waves-light">Edit</button></a>
                                </div>

                                <div class="button_inline">
                                    <a href="{{route('category.create',$category->id)}}">  <button type="button" class="btn btn-outline-pink waves-effect waves-light">Create</button></a>
                                </div>
                                <div class="button_inline">
                                    {!! Form::open(['method'=>'delete','route'=>array('category.destroy',$category->id),'class'=>'form-inline']) !!}
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

@endsection