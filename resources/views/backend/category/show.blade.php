@extends('BackEnd.layout.app')
@section('pageTitle',' Details')
@section('content')
    <div class="row">
        <div class="col-md-12">

 {{$category->name}} <br>
 {{$category->remarks}}

        </div>
    </div>




@endsection