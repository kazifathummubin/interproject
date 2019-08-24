@extends('backend.layout.app')
@section('pageTitle','Edit Category')
@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
            <h1 class="text-center">Edit Category</h1>
            {!! Form::model($category,['method'=>'put','route'=>array('category.update',$category->id),'class'=>'form-group']) !!} <br>
            {!! Form::text('name', $category->name, ['class'=>'form-control', 'placeholder'=>'Category Name']) !!}<br>
            {!! Form::text('remarks', $category->remarks,['class'=>'form-control', 'placeholder'=>'Remarks']) !!}<br>
            {!! Form::button('Update Category', ['type'=>'submit', 'class'=>'btn btn-success']) !!}
         {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection