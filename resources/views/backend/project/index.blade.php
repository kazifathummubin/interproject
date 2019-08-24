@extends('backend.layout.app')
@section('pageTitle','Project  page ')
@section('content')
    <div class="wrapper">
        <h1 class="text-center">
            <h1 style="color: white;text-align: center;text-shadow:rebeccapurple;text-transform: capitalize">Project Data table</h1>
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
                                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="100px" width="100%">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Category name</th>
                                            <th>project_photo1</th>
                                            <th>project_photo2</th>
                                            <th>project_photo3</th>
                                            <th>project_photo4</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $sl=1 @endphp
                                        @foreach($projects as $project)
                                            <tr>
                                                <td>{{$sl++}}</td>
                                                <td>{{$project->title}}</td>
                                                <td>{!! $project->project_description !!}</td>
                                                <td>
                                                {{$project->category->name}}
                                                </td>
                                                <td>
                                                    <img src="{{asset('backend/assets/images/project')}}/{{$project->project_photo1}}" width="100px">
                                                </td>
                                                <td>
                                                    <img src="{{asset('backend/assets/images/project')}}/{{$project->project_photo2}}" width="100px">
                                                </td>
                                                <td>
                                                    <img src="{{asset('backend/assets/images/project')}}/{{$project->project_photo3}}" width="100px">
                                                </td>
                                                <td>
                                                    <img src="{{asset('backend/assets/images/project')}}/{{$project->project_photo4}}" width="100px">
                                                </td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <div class="button_inline">
                                                            <a href="{{route('project.edit',$project->id)}}"> <button type="button" class="btn btn-outline-primary waves-effect waves-light">Edit</button></a>
                                                        </div>

                                                        <div class="button_inline">
                                                            <a href="{{route('project.create',$project->id)}}">  <button type="button" class="btn btn-outline-pink waves-effect waves-light">Create</button></a>
                                                        </div>

                                                        <div class="button_inline">
                                                            {!! Form::open(['method'=>'delete','route'=>array('project.destroy',$project->id),'class'=>'form-inline']) !!}
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





    {{--<script>--}}
    {{--CKEDITOR.replace( 'body' );--}}
    {{--</script>--}}

@endsection


