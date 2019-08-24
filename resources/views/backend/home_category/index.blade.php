@extends('backend.layout.app')
@section('pageTitle','product category page ')
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
                                                <td>title</td>
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
                                                <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $sl=1 @endphp
                                        @foreach($home_categories as $home_category)
                                            <tr>
                                                <td>{{$sl++}}</td>
                                                <td>{{ $home_category->title }}</td>
                                                <td> <img class="img-thumbnail"  src="{{asset('backend/assets/images/home_category')}}/{{$home_category->icon1}}" width="200px" ></td>
                                                <td>{{ $home_category->text1 }}</td>
                                                <td> <img class="img-thumbnail"  src="{{asset('backend/assets/images/home_category')}}/{{$home_category->icon2}}"  width="200px"  ></td>
                                                <td>{{ $home_category->text2 }}</td>
                                                <td> <img class="img-thumbnail"  src="{{asset('backend/assets/images/home_category')}}/{{$home_category->icon3}}"  width="200px" ></td>
                                                <td>{{ $home_category->text3 }}</td>
                                                <td> <img class="img-thumbnail"  src="{{asset('backend/assets/images/home_category')}}/{{$home_category->icon4}}"  width="100px" ></td>
                                                <td>{{ $home_category->text4 }}</td>
                                                <td> <img class="img-thumbnail"  src="{{asset('backend/assets/images/home_category')}}/{{$home_category->icon5}}"  width="100px" ></td>
                                                <td>{{ $home_category->text5 }}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                <div class="button_inline">
                                                    <a href="{{route('home_category.edit',$home_category->id)}}"> <button type="button" class="btn btn-outline-primary waves-effect waves-light">Edit</button></a>
                                                </div>

                                                <div class="button_inline">
                                                    <a href="{{route('home_category.create',$home_category->id)}}">  <button type="button" class="btn btn-outline-pink waves-effect waves-light">Create</button></a>
                                                </div>
                                                    <div class="button_inline">
                                                        {!! Form::open(['method'=>'delete','route'=>array('home_category.destroy',$home_category->id),'class'=>'form-inline']) !!}
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


