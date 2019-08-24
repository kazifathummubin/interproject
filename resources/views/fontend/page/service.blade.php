@extends('fontend.layout.serviceapp')
@section('pageTitle','welcome')
@section('content')

    <div class="breadcrumbW clearfix">
        <div class="container">
            <div class="breadcrumb clearfix">
                <h2 class="title">service</h2>
                <div class="bread-right">
                    <a class="home" href="index.html">Home</a>
                    <i></i><a href="about-us_d1.html"><h2>service</h2></a>
                </div>
            </div>
        </div>
    </div>



    <div class="main_boxW">
    <div class="container">
        <div class="about_web">
            @foreach($services as $service)
            <div class="about_detail"><div style="text-align:center;">
                    <strong><span style="font-family:Tahoma;font-size:32px;">{{ $service->title  }}</span></strong>
                </div>
                <br />
                <br />


                <p>
                    <span style="font-family:Tahoma;font-size:32px;"><em><strong>{{ $service->service1  }}</strong></em></span>
                </p>
                <p>
                    <span style="font-family:Tahoma;font-size:18px;"><em><strong>——————————</strong></em></span>
                </p>
                <span style="font-family:&quot;Bodoni MT&quot;;font-size:18px;"><span style="font-family:Tahoma;line-height:2;"></span><span style="font-family:Tahoma;font-size:18px;line-height:2;">,</span><span style="font-family:Tahoma;line-height:2;"> {{strip_tags($service->service_content1) }}</span></span><br />
                <span style="font-family:Tahoma;font-size:16px;"></span>
                <p>
                    <br />
                </p>
                <p>
                    <img src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo1}}" alt="curtain wall systems" title="curtain wall systems" width="370" height="370" align="" /><span style="font-family:Tahoma;">&nbsp; &nbsp;&nbsp; </span><img src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo2}}" alt=" Frameless Glass Curtain Wall" title=" Frameless Glass Curtain Wall" width="370" height="370" align="" /><span style="font-family:Tahoma;">&nbsp; &nbsp; &nbsp;</span><img src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo3}}" alt="Aluminium Frame Curtain Wall" title="Aluminium Frame Curtain Wall" width="370" height="370" align="" />
                </p>
                <p>
                    <br />
                </p>
                <p>
                    <br />
                </p>




                <p>
                    <span style="font-family:Tahoma;font-size:32px;"><em><strong>{{ $service->service2 }}</strong></em></span><br />
                    <span style="font-family:Tahoma;font-size:18px;"><strong><em>——————————</em></strong></span><br />
                    <span style="font-family:Tahoma;font-size:18px;line-height:2;">  {{strip_tags($service->service_content2) }}</span>
                </p>
                <p>
                    <span style="font-family:Tahoma;font-size:18px;line-height:2;"> </span>
                </p>
                <p>
                    <br />
                </p>
                <p>
                    <img   src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo4}}" alt="unitized curtain walls" title="unitized curtain walls" width="370" height="370" align="" /><span style="font-family:Tahoma;">&nbsp; &nbsp;&nbsp;&nbsp;</span><img  src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo5}}" alt="Aluminium Glass Curtain Wall" title="Aluminium Glass Curtain Wall" width="370" height="370" align="" /><span style="font-family:Tahoma;">&nbsp; &nbsp; &nbsp;</span><img   src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo6}}" alt="Aluminium Glass Curtain Wall Construction" title="Aluminium Glass Curtain Wall Construction" width="370" height="370" align="" />
                </p>
                <p>
                    <br />
                </p>
                <p>
                    <br />
                </p>
                <p>
                    <span style="font-family:Tahoma;font-size:32px;"><strong><em>{{ $service->service3 }}</em></strong></span>
                </p>
                <p>
                    <b><i><span style="font-family:Tahoma;font-size:18px;">——————————</span></i></b>
                </p>
                <p>
                    <span style="font-family:Tahoma;font-size:18px;line-height:2;">{{strip_tags($service->service_content3) }}</span>
                </p>
                <p>
                    <br />
                </p>
                <p>
                    <span style="font-family:Tahoma;font-size:18px;line-height:2;"></span>
                </p>
                <p>
                    <br />
                </p>
                <p>
	            <span style="font-family:&quot;Bodoni MT&quot;;font-size:18px;"><span style="font-family:Tahoma;line-height:2;"></span><br /></span>
                </p>
                <p>
                    <br />
                </p>
                <p>
                    <img src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo7}}" alt="" title="" width="370" height="370" align="" /><span>&nbsp; &nbsp; &nbsp;</span><span style="font-family:Arial;font-size:16px;"></span><img  src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo8}}" alt="" title="" width="370" height="370" align="" />&nbsp; &nbsp;&nbsp;<span>&nbsp;<img  src="{{asset('backend/assets/images/service')}}/{{ $service->service_photo9}}" alt="" title="" width="370" height="370" align="" /></span>
                </p>
                <p>
                    <table style="width:100%;" cellspacing="0" cellpadding="2" bordercolor="#FFFFFF" border="1">
                        <tbody>
                        <tr>


                        </tr>
                        </tbody>
                </table>

                <p>
                    <br />
                <p>

                <strong><span style="font-size:18px;"><br />
</span></strong>
                    @endforeach
                </p>
            </div>
        </div>
    </div>
</div>


@endsection