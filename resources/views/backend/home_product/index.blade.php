@extends('backend.layout.app')
@section('pageTitle',' home_project page ')
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
                                            <th>title</th>
                                            <th>photo1</th>
                                            <th>photo2</th>
                                            <th>photo3</th>
                                            <th>photo4</th>
                                            <th>photo5</th>
                                            <th>photo6</th>
                                                <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $sl=1 @endphp
                                        @foreach($home_products as $home_product)
                                            <tr>
                                                <td>{{$sl++}}</td>
                                                <td>{{ $home_product->title }}</td>
                                                <td> <img  src="{{asset('backend/assets/images/home_product')}}/{{$home_product->photo1}}" width="200px" data-holder-rendered="true"></td>
                                                <td> <img  src="{{asset('backend/assets/images/home_product')}}/{{$home_product->photo2}}" width="200px"  data-holder-rendered="true"></td>
                                                <td> <img  src="{{asset('backend/assets/images/home_product')}}/{{$home_product->photo3}}" width="200px" data-holder-rendered="true"></td>
                                                <td> <img   src="{{asset('backend/assets/images/home_product')}}/{{$home_product->photo4}}" width="200px"  data-holder-rendered="true"></td>
                                                <td> <img  src="{{asset('backend/assets/images/home_product')}}/{{$home_product->photo5}}" width="200px"  data-holder-rendered="true"></td>
                                                <td> <img  src="{{asset('backend/assets/images/home_product')}}/{{$home_product->photo6}}" width="200px"  data-holder-rendered="true"></td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                    <div class="button_inline">
                                                        <a href="{{route('home_product.edit',$home_product->id)}}"> <button type="button" class="btn btn-outline-primary waves-effect waves-light">Edit</button></a>
                                                    </div>

                                                    <div class="button_inline">
                                                        <a href="{{route('home_product.create',$home_product->id)}}">  <button type="button" class="btn btn-outline-pink waves-effect waves-light">Create</button></a>
                                                    </div>
                                                        <div class="button_inline">
                                                            {!! Form::open(['method'=>'delete','route'=>array('home_product.destroy',$home_product->id),'class'=>'form-inline']) !!}
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


