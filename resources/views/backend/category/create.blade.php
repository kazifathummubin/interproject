@extends('backend.layout.app')
@section('pageTitle','Create New Category')
@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
            <h1 class="text-center">Create New Category</h1>
    {!! Form::open(['method'=>'post','route'=>'category.store','class'=>'form-group']) !!} <br>

            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Category Name']) !!}<br>
            {!! Form::text('remarks', null,['class'=>'form-control', 'placeholder'=>'Remarks']) !!}<br>

            {!! Form::button('Create Category', ['type'=>'submit', 'class'=>'btn btn-success']) !!}
            {!! Form::close() !!}


                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection