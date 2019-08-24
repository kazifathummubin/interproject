@extends('fontend.layout.aboutapp')
@section('pageTitle','about')
@section('content')
    <div class="breadcrumbW clearfix">
        <div class="container">
            <div class="breadcrumb clearfix">
                <h2 class="title">About Us</h2>
                <div class="bread-right">
                    <a class="home" href="index.html">Home</a>
                    <i></i><a href="about-us_d1.html"><h2>About Us</h2></a>
                </div>
            </div>
        </div>
    </div>


    <div class="main_boxW">
        <div class="container">
            <div class="about_web">
                <div class="about_detail"><p class="MsoNormal" align="left">
                        @foreach($abouts as $about)
                        <img  style="width=100px; height=100px;" src="{{asset('backend/assets/images/about')}}/{{ $about->aboutcontentimage}}" alt="Commercial Glass Curtain Walls Factory" title="Commercial Glass Curtain Walls Factory" width="1800" height="1449" align="" />

                    </p>
                    <p>
	<span style="font-size:18px;font-family:Arial;"><br />
</span>
                    </p>
                    <p>
                        <span style="font-size:18px;font-family:Arial;">{!! $about->aboutcontent !!}<u><a href="curtain-walls_c1.html" target="_blank"></a></u>, <u><a href="aluminium-windows_c2.html" target="_blank"></a> and <a href="aluminium-doors_c3.html" target="_blank"></a></u></span>
                    </p>
                    @endforeach
                    <p>
	<span style="font-size:16px;"><br />
</span>
                    </p>
                    <p class="MsoNormal" align="left">
                        <br />
                    </p>
                    <p class="MsoNormal" align="left">
                        <br />
                    </p>
                    <p class="MsoNormal" align="left">
                        <br />
                    </p>
                    <p class="MsoNormal" align="left">
                        <span style="font-family:&quot;Bodoni MT&quot;;font-size:18px;line-height:2;"></span>
                    </p>
                    <p class="MsoNormal" style="text-align:center;" align="left">
                        <span style="font-family:Impact;font-size:32px;">Project Gallery</span><span style="font-family:Impact;font-size:32px;"></span>
                    </p>
                    <p class="MsoNormal" style="text-align:center;" align="left">
                        <br />
                    </p>
                    <p class="MsoNormal" style="text-align:center;" align="left">
                        <br />
                    </p>
                    @foreach($projects as $project)
                    <p class="MsoNormal" align="left">
                        <span style="font-size:32px;"><a href="hilton-hotel-unitized-glass-curtain-wall-in-australia_n24.html" target="_blank"><img src="{{asset('backend/assets/images/project')}}/{{$project->project_photo1}}" alt="" title="" width="380" height="260" align="" /></a></span><span style="font-size:18px;">&nbsp;&nbsp;</span><span style="font-size:32px;"><a href="bi-fold-doors-brings-you-more-space_n26.html" target="_blank"><img src="{{asset('backend/assets/images/project')}}/{{$project->project_photo3}}"alt="" title="" width="380" height="260" align="" /></a></span><span style="font-family:&quot;Bodoni MT&quot;;font-size:18px;">&nbsp;&nbsp;</span><span style="font-size:32px;"><a href="reflective-double-safety-glass-curtain-wall_n27.html" target="_blank"><img src="{{asset('backend/assets/images/project')}}/{{$project->project_photo3}}" alt="" title="" width="380" height="260" align="" /></a></span>

                    </p>
                    @endforeach
                    <p class="MsoNormal" align="left">
                        <br />
                    </p>
                    <p class="MsoNormal" align="left">
                        <br />
                    </p>
                    <p class="MsoNormal" align="left">
                        <br />
                    </p>
                    <p class="MsoNormal" align="left">
                        @foreach($abouts as $about)
                        <span style="font-family:Impact;font-size:32px;">{{$about->ourteam_title }} </span><span style="font-family:Impact;font-size:32px;"></span>
                    </p>
                    <p class="MsoNormal" align="left">
	<span style="font-family:Impact;font-size:32px;"><span style="font-size:12px;"><span style="font-size:10px;"><span style="font-size:9px;"></span></span></span><br />
</span>
                    </p>
                    <p class="MsoNormal" align="left">
                        <img src="{{asset('backend/assets/images/about')}}/{{ $about->ourteam_photo1}}" alt="" title="" width="268" height="401" align="left" /><span style="font-family:Arial;font-size:18px;line-height:2;">Jean-mic Perrine is highly regarded as a senior practitioner of the architectural profession in Western Australia. As a registered architect with the Architects Board of Western Australia, he has completed an enviable track record of projects in a range of fields including single and multi-residential, retail, commercial, worship and liturgical spaces.</span><br />
                        <span style="font-family:Arial;font-size:18px;line-height:2;">{!! $about->ourteam1  !!}</span><br />
                    </p>
                    @endforeach


                    @foreach($abouts as $about)
                        <span style="font-family:Impact;font-size:32px;">{{$about->ourclint_title }}</span><span style="font-family:Impact;font-size:32px;"></span>
                        </p>
                        <p class="MsoNormal" align="left">
	<span style="font-family:Impact;font-size:32px;"><span style="font-size:12px;"><span style="font-size:10px;"><span style="font-size:9px;"></span></span></span><br />
</span>
                        </p>
                        <p>
                            <img  src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo1}}" alt="curtain wall systems" title="curtain wall systems" width="370" height="370" align="" /><span style="font-family:Tahoma;">&nbsp; &nbsp;&nbsp; </span><img  src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo2}}" alt=" Frameless Glass Curtain Wall" title=" Frameless Glass Curtain Wall" width="370" height="370" align="" /><span style="font-family:Tahoma;">&nbsp; &nbsp; &nbsp;</span><img  src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo3}}" alt="Aluminium Frame Curtain Wall" title="Aluminium Frame Curtain Wall" width="370" height="370" align="" />
                            <img  src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo4}}" alt="curtain wall systems" title="curtain wall systems" width="370" height="370" align="" /><span style="font-family:Tahoma;">&nbsp; &nbsp;&nbsp; </span><img  src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo5}}" alt=" Frameless Glass Curtain Wall" title=" Frameless Glass Curtain Wall" width="370" height="370" align="" /><span style="font-family:Tahoma;">&nbsp; &nbsp; &nbsp;</span><img  src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo6}}" alt="Aluminium Frame Curtain Wall" title="Aluminium Frame Curtain Wall" width="370" height="370" align="" />
                            <img  src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo7}}" alt="curtain wall systems" title="curtain wall systems" width="370" height="370" align="" /><span style="font-family:Tahoma;">&nbsp; &nbsp;&nbsp; </span><img  src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo8}}" alt=" Frameless Glass Curtain Wall" title=" Frameless Glass Curtain Wall" width="370" height="370" align="" /><span style="font-family:Tahoma;">&nbsp; &nbsp; &nbsp;</span><img  src="{{asset('backend/assets/images/about')}}/{{ $about->ourclint_photo9}}" alt="Aluminium Frame Curtain Wall" title="Aluminium Frame Curtain Wall" width="370" height="370" align="" />
                        </p>

                    @endforeach
                </div>
            </div>
        </div>

    </div>


@endsection