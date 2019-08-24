@extends('fontend.layout.technologyapp')
@section('pageTitle','technology')
@section('content')
    <div class="breadcrumbW clearfix">
        <div class="container">
            <div class="breadcrumb clearfix">
                <h2 class="title">Technology</h2>
                <div class="bread-right">
                    <a class="home" href="index.html">Home</a>
                    <i></i><a href="about-us_d1.html"><h2>technology</h2></a>
                </div>
            </div>
        </div>
    </div>

<div class="main_boxW">
<div class="container">
    <div class="about_web">
        @foreach($technologies as $technology)
            <div class="about_detail"><div style="text-align:center;">
                    <strong><span style="font-family:Tahoma;font-size:32px;">{{$technology->techtitle }}</span></strong><br><hr>
                </div>
        <div class="about_detail"><span style="font-family:Tahoma;font-size:16px;line-height:2;">{!!$technology->technology  !!}  </span><br />
            <p>
	<span style="font-family:Tahoma;font-size:16px;line-height:2;"><strong><br />
</strong></span>

                @endforeach
            </p>
        </div>
    </div>
</div>

</div>
@endsection