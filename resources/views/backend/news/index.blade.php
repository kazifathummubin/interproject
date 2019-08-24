@extends('backend.layout.app')
@section('pageTitle',' news page ')
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
                        {{--<div class="card-body">--}}
                        <div class="table-rep-plugin">
                            <div class="table-responsive b-0" data-pattern="priority-columns">
                                <div class="col-12">
                                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="100px" width="100%">
                                        <thead>

                                            <tr>
                                                <td>sl</td>
                                                <th>title</th>
                                                <th>news_description</th>
                                                <th>news_photo</th>
                                                <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $sl=1 @endphp
                                        @foreach($news as $news)
                                                <tr>
                                                    <td>{{$sl++}}</td>
                                                    <td>   {{$news->title }}</td>
                                                    <td>   {!! $news->news_description !!}</td>
                                                    <td> <img class="rounded-circle"  style="height:200px;width: 200px;" src="{{asset('backend/assets/images/news')}}/{{$news->news_photo}}" data-holder-rendered="true"></td>
                                                    <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                    <div class="button_inline">
                                                        <a href="{{route('news.edit',$news->id)}}"> <button type="button" class="btn btn-outline-primary waves-effect waves-light">Edit</button></a>
                                                    </div>
                                                    <div class="button_inline">
                                                    <a href="{{route('news.create')}}">  <button type="button" class="btn btn-outline-pink waves-effect waves-light">Create</button></a></div>
                                                    <div class="button_inline">
                                                        {!! Form::open(['method'=>'delete','route'=>array('news.destroy',$news->id),'class'=>'form-inline']) !!}
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


