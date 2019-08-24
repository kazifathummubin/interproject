@extends('backend.layout.app')
@section('pageTitle','Show service')
@section('content')

    <div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card m-b-20">
                    {{--<div class="card-body">--}}
                        <h1 class="text-center" style="color:#3665b1" ;> Details   </h1>  <hr>
                            <div class="col-12">
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <th>service_content1</th>
                                    <td> {!!  $service->service_content1 !!}</td>
                                </tr>
                                <tr>
                                    <th>service_content2</th>
                                    <td>{!!  $service->service_content2 !!}</td>
                                </tr>

                                <tr>
                                    <th>service_content3</th>
                                    <td>{!!  $service->service_content3 !!}</td>
                                </tr>



                            </table>
                            <hr>
                            <a href="{{route('service.index')}}"><button class="btn btn-success">Back</button></a>
                            {{--<a href="{{route('order.create',$product->id )}}"><button class="btn btn-warning">Order</button></a>--}}
                            <hr>
                            </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- end container -->

<!-- end wrapper -->
@endsection