@extends('backend.layout.app')
@section('pageTitle','Footer Edit')
@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            {!! Form::open(['method'=>'put','route'=>['product.update',$product->id ],'class'=>'form-group', 'files'=>true]) !!} <br>
                            {!! Form::text('title', $product->title, ['class'=>'form-control', 'placeholder'=>'Product Name']) !!}<br>
                            {!! Form::textarea('body', $product->body,['class'=>'form-control', 'placeholder'=>'Product Description']) !!}<br>
                            <small class="text-danger">Each keyword should seperated by comma (,)</small>
                            {!! Form::text('keyword', $product->keyword,['class'=>'form-control', 'placeholder'=>'Keyword']) !!}<br>
                            {!! Form::text('price', $product->price,['class'=>'form-control', 'placeholder'=>'Price']) !!}<br>
                            {!! Form::text('discount', $product->discount,['class'=>'form-control', 'placeholder'=>'Discount']) !!}<br>
                            {!! Form::number('stock', $product->stock,['class'=>'form-control', 'placeholder'=>'Stock']) !!}<br>
                            {!! Form::number('sku', $product->sku,['class'=>'form-control', 'placeholder'=>'sku']) !!}<br>
                            <small class="text-info">Insert Feature Photo</small> <br>
                            {!! Form::file('feature_photo', ['class'=>'form-control', 'placeholder'=>'Feature Photo']) !!}<br>
                            <small class="text-danger">Previous Feature Photo</small> <br>
                            <img src="{{asset('backend/assets/images/products')}}/{{$product->feature_photo}}" width="100px"> <br>
                            <small class="text-info">Insert Gallery  Photo</small> <br>
                            {!! Form::file('photo1', ['class'=>'form-control', 'placeholder'=>'Feature Photo']) !!}
                            <small class="text-danger">Photo 1</small>
                            <img src="{{asset('backend/assets/images/products')}}/{{$product->photo1}}" width="100px" style="border: 1px solid silver"><br>
                            {!! Form::file('photo2', ['class'=>'form-control', 'placeholder'=>'Feature Photo']) !!}
                            <small class="text-danger">Photo 2</small>
                            <img src="{{asset('backend/assets/images/products')}}/{{$product->photo2}}" width="100px" style="border: 1px solid silver"><br>
                            {!! Form::file('photo3', ['class'=>'form-control', 'placeholder'=>'Feature Photo']) !!}
                            <small class="text-danger">Photo 3</small>
                            <img src="{{asset('backend/assets/images/products')}}/{{$product->photo3}}" width="100px" style="border: 1px solid silver"><br>
                            {!! Form::file('photo4', ['class'=>'form-control', 'placeholder'=>'Feature Photo']) !!}
                            <small class="text-danger">Photo 4</small>
                            <img src="{{asset('backend/assets/images/products')}}/{{$product->photo4}}" width="100px" style="border: 1px solid silver"><br>
                            {!! Form::select('category_id', $category,$product->category->id,['class'=>'form-control', 'placeholder'=>'Choose One']) !!}<br>

                            <br><br>
                            {{--{!! Form::radio('color_id', null,['class'=>'form-control', 'placeholder'=>'Choose One']) !!}<br>--}}
                            {{--{!! Form::radio('size_id', null,['class'=>'form-control', 'placeholder'=>'Choose One']) !!}<br>--}}

                            {!! Form::button('Update footer', ['type'=>'submit', 'class'=>'btn btn-outline-pink btn-lg waves-effect waves-light']) !!}
                            {!! Form::close() !!}


                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'body');

    </script>

@endsection

