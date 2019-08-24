@extends('backend.layout.app')
@section('pageTitle','service  page ')
@section('content')
    <div class="wrapper">
        <h1 class="text-center">
            <h1 style="color: white;text-align: center;text-shadow:rebeccapurple;text-transform: capitalize">Product Data table</h1>
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
                                            <th>SL</th>
                                            <th>SKU</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Discount</th>
                                            <th>Stock</th>
                                            <th>Category</th>
                                            <th>Photo</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $sl=1 @endphp
                                        @foreach($products as $product)
                                            <tr>
                                                <td>{{$sl++}}</td>
                                                <td>{{$product->sku}}</td>
                                                <td>{{$product->title}}</td>
                                                <td>
                                                    {{--{{$product->body}}--}}
                                                </td>
                                                <td>{{$product->price}}</td>
                                                <td>{{$product->discount}}</td>
                                                <td>{{$product->stock}}</td>
                                                <td>{{$product->category->name}}</td>
                                                <td>
                                                    <img src="{{asset('backend/assets/images/products')}}/{{$product->feature_photo}}" width="80px">
                                                </td>
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic example">
                                                        <div class="button_inline">
                                                            <a href="{{route('product.edit',$product->id)}}"> <button type="button" class="btn btn-outline-primary waves-effect waves-light">Edit</button></a>
                                                        </div>
                                                        <div class="button_inline">
                                                            <a href="{{route('product.create',$product->id)}}">  <button type="button" class="btn btn-outline-pink waves-effect waves-light">Create</button></a>
                                                        </div>
                                                        <div class="button_inline">
                                                            <a href="{{route('product.show',$product->id)}}">  <button type="button" class="btn btn-outline-pink waves-effect waves-light">show</button></a>
                                                        </div>
                                                        <div class="button_inline">
                                                            {!! Form::open(['method'=>'delete','route'=>array('product.destroy',$product->id),'class'=>'form-inline']) !!}
                                                            {!! Form::button('Delete',['class'=>'btn btn-outline-purple waves-effect waves-light', 'type'=>'submit','onclick'=>'return confirm("Are you sure you want to delete this brand ?");' ]) !!}
                                                            {!! Form::close() !!}
                                                        </div>
                                                    </div>
                                                </td>
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


