@extends('backend.layout.app')
@section('pageTitle','show product ')
@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-4">
                        {{--<div class="card-body">--}}
                        <div class="table-rep-plugin">
                            <div class="table-responsive b-0" data-pattern="priority-columns">
                                <div class="col-12">
            <h1 class="text-center" style="">{{$product->title}} Details <hr>
                <img src="{{asset('backend/assets/images/products')}}/{{$product->feature_photo}}" width="250px"></h1>

                                <div class="col-md-8 offset-2">
                                    <table>
                                        <tr>
                                            <th>SKU</th>
                                            <td> : {{$product->sku}}</td>
                                        </tr>
                                        <tr>
                                            <th>Title</th>
                                            <td> : {{$product->title}}</td>
                                        </tr>
                                        <tr>
                                            <th>Description</th>
                                            <td> : {!! $product->body !!}</td>
                                        </tr>
                                        <tr>
                                            <th>Keyword</th>
                                            <td> : {{$product->keyword}}</td>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td> : {{$product->price}}</td>
                                        </tr>
                                        <tr>
                                            <th>Discount Price</th>
                                            <td> : {{$product->discount}}</td>
                                        </tr>
                                        <tr>
                                            <th>In Stock</th>
                                            <td> : {{$product->stock}}</td>
                                        </tr>
                                        <tr>
                                            <th>Category</th>
                                            <td> : {{$product->category->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Posted By</th>
                                            <td> : {{$product->user->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Posted at</th>
                                            <td> : {{$product->created_at->toDayDateTimeString()}}</td>
                                        </tr>
                                        <tr>
                                            <th>Updated at</th>
                                            <td> :
                                                @if($product->created_at ==$product->updated_at)
                                                    Product Not Updated Yet
                                                @else
                                                    {{$product->updated_at->diffForHumans()}}
                                                @endif
                                            </td>

                                        </tr>
                                    </table>

                                    <h4 class="text-center">Photo Gallery</h4>
                                    @if($product->photo1)
                                    <img src="{{asset('backend/assets/images/products')}}/{{$product->photo1}}" class="img-thumbnail" alt="Cinque Terre" width="150">
                                    @endif
                                    @if($product->photo2)
                                    <img src="{{asset('backend/assets/images/products')}}/{{$product->photo2}}" class="img-thumbnail" alt="Cinque Terre" width="150">
                                    @endif
                                    @if($product->photo3)
                                    <img src="{{asset('backend/assets/images/products')}}/{{$product->photo3}}" class="img-thumbnail" alt="Cinque Terre" width="150">
                                    @endif
                                    @if($product->photo4)
                                    <img src="{{asset('backend/assets/images/products')}}/{{$product->photo4}}" class="img-thumbnail" alt="Cinque Terre" width="150">
                                    @endif

                                <hr>
                                   <a href="{{route('product.index')}}"><button class="btn btn-success">Back</button></a>
                                   {{--<a href="{{route('order.create',$product->id )}}"><button class="btn btn-warning">Order</button></a>--}}
                                    <hr>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


@endsection