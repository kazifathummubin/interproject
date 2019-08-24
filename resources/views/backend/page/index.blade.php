@extends('backend.layout.app')
@section('pageTitle','Index')
@section('content')
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <form class="float-right app-search">
                        <input type="text" placeholder="Search..." class="form-control">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <h4 style="color:#2b824d" class="page-title">  <i class="dripicons-meter"></i>  Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-12 mb-4">
                <div id="morris-bar-example" class="dash-chart"></div>
                <div class="mt-4 text-center">
                    <button type="button" class="btn btn-outline-info ml-1 waves-effect waves-light">Year 2017</button>
                    <button type="button" class="btn btn-outline-info ml-1 waves-effect waves-light">Year 2018</button>
                    <button type="button" class="btn btn-outline-info ml-1 waves-effect waves-light">Year 2019</button>
                </div>
            </div>
        </div>
    </div>
@endsection