@extends('backend.layout.app')
@section('pageTitle',' footer page ')
@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                @if(session()->has('msg'))
                    <div class="alert alert-success" role="alert">
                        <strong>Well done!</strong> You successfully read this important alert message.
                    </div>
                    {{session('msg')}}
            </div>
            @endif
            <div class="col-12">
                <div class="card m-b-4">
                    {{--<div class="card-body">--}}
                    <div class="table-rep-plugin">
                        <div class="table-responsive b-0" data-pattern="priority-columns">
                            <div class="col-12">
                                <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="100px" width="100%">
                                    <thead>
                                    <tr>
                                                <th>sl</th>
                                                <th>footerbackground</th>
                                            <th>footerimage1</th>
                                            <th>footerimage2</th>
                                            <th>footerimage3</th>
                                            <th>footerimage4</th>
                                            <th>footerimage5</th>
                                            <th>footerimage6</th>
                                            <th>footerimage7</th>
                                            <th>footerimage8</th>
                                            <th>footertext</th>
                                            <th>footericon1</th>
                                                <th>footericon2</th>
                                                <th>footericon3</th>
                                                <th>footericon4</th>
                                                <th>footericon5</th>
                                                <th>text1</th>
                                                <th>text2</th>
                                                <th>text3</th>
                                                <th>text4</th>
                                                <th>copyright</th>
                                                <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $sl=1 @endphp
                                        @foreach($footers as $footer)
                                            <tr>
                                                <td>{{$sl++}}</td>
                                                <td> <img    src="{{asset('backend/assets/images/footer')}}/{{ $footer->footerbackground}}"   width="200" data-holder-rendered="true"></td>
                                                <td> <img    src="{{asset('backend/assets/images/footer')}}/{{ $footer->footerimage1}}"      width="200" data-holder-rendered="true"></td>
                                                <td> <img    src="{{asset('backend/assets/images/footer')}}/{{ $footer->footerimage2}}"      width="200" data-holder-rendered="true"></td>
                                                <td> <img    src="{{asset('backend/assets/images/footer')}}/{{ $footer->footerimage3}}"       width="200" data-holder-rendered="true"></td>
                                                <td> <img    src="{{asset('backend/assets/images/footer')}}/{{ $footer->footerimage4}}"        width="200" data-holder-rendered="true"></td>
                                                <td> <img    src="{{asset('backend/assets/images/footer')}}/{{ $footer->footerimage5}}"      width="200" data-holder-rendered="true"></td>
                                                <td> <img    src="{{asset('backend/assets/images/footer')}}/{{ $footer->footerimage6}}"       width="200" data-holder-rendered="true"></td>
                                                <td> <img    src="{{asset('backend/assets/images/footer')}}/{{ $footer->footerimage7}}"      width="200" data-holder-rendered="true"></td>
                                                <td> <img    src="{{asset('backend/assets/images/footer')}}/{{ $footer->footerimage8}}"      width="200" data-holder-rendered="true"></td>
                                                <td>
                                                    {{--{{strip_tags($footer->footertext)  }} <br>--}}
                                                    {{--{{html_entity_decode($footer->footertext)  }}--}}
                                                    {!! $footer->footertext !!}

                                                </td>
                                                <td> <img    src="{{asset('backend/assets/images/footer')}}/{{ $footer->footericon1}}" width="32" data-holder-rendered="true"></td>
                                                <td> <img    src="{{asset('backend/assets/images/footer')}}/{{ $footer->footericon2}}" width="32" data-holder-rendered="true"></td>
                                                <td> <img    src="{{asset('backend/assets/images/footer')}}/{{ $footer->footericon3}}" width="32" data-holder-rendered="true"></td>
                                                <td> <img    src="{{asset('backend/assets/images/footer')}}/{{ $footer->footericon4}}" width="32" data-holder-rendered="true"></td>
                                                <td> <img    src="{{asset('backend/assets/images/footer')}}/{{ $footer->footericon5}}" width="32" data-holder-rendered="true"></td>
                                                <td>{!! $footer->text1 !!}</td>
                                                <td>{!!  $footer->text2 !!}</td>
                                                <td>{!!  $footer->text3 !!}</td>
                                                <td>{!! $footer->text4 !!}</td>
                                                <td>{!! $footer->copyright !!}</td>

                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <div class="button_inline">
                                                        <a href="{{route('footer.edit',$footer->id)}}"> <button type="button" class="btn btn-outline-primary waves-effect waves-light">Edit</button></a>
                                                    </div>

                                                    <div class="button_inline">
                                                        <a href="{{route('footer.create',$footer->id)}}">  <button type="button" class="btn btn-outline-pink waves-effect waves-light">Create</button></a>
                                                    </div>
                                                    <div class="button_inline">
                                                        {!! Form::open(['method'=>'delete','route'=>array('footer.destroy',$footer->id),'class'=>'form-inline']) !!}
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
    </div>




    {{--<script>--}}
    {{--CKEDITOR.replace( 'body' );--}}
    {{--</script>--}}

@endsection


