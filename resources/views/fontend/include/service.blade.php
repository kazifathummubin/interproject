@foreach($home_services as $home_service)

<div class="in_processW" style=" background:url({{asset('backend/assets/images/home_service')}}/{{$home_service->background}}) no-repeat">


    <div class="container">
        <div class="in_process">
            <div class="in_title"><span>{{ $home_service->title }}</span></div>
            <ul class="in_processL clearfix row">


                <li>
                    <div class="in_processL_m">
                        <span><a href="our-services_d15.html"><img src="{{asset('backend/assets/images/home_service')}}/{{$home_service->icon1}}" alt="Design" /></a></span>
                        <p>{{ $home_service->text1 }}</p>
                    </div>
                </li>

                <li>
                    <div class="in_processL_m">
                        <span><a href="our-services_d15.html"><img src="{{asset('backend/assets/images/home_service')}}/{{$home_service->icon2}}" alt="Measurement" /></a></span>
                        <p>{{ $home_service->text2 }}</p>
                    </div>
                </li>

                <li>
                    <div class="in_processL_m">
                        <span><a href="our-services_d15.html"><img src="{{asset('backend/assets/images/home_service')}}/{{$home_service->icon3}}" alt="Solution" /></a></span>
                        <p>{{ $home_service->text3 }}</p>
                    </div>
                </li>

                <li>
                    <div class="in_processL_m">
                        <span><a href="our-services_d15.html"><img src="{{asset('backend/assets/images/home_service')}}/{{$home_service->icon4}}" alt="Certifications" /></a></span>
                        <p>{{ $home_service->text4 }}</p>
                    </div>
                </li>

                <li>
                    <div class="in_processL_m">
                        <span><a href="our-services_d15.html"><img src="{{asset('backend/assets/images/home_service')}}/{{$home_service->icon5}}" alt="Manufacturing" /></a></span>
                        <p>{{ $home_service->text5 }}</p>
                    </div>
                </li>

                <li>
                    <div class="in_processL_m">
                        <span><a href="our-services_d15.html"><img src="{{asset('backend/assets/images/home_service')}}/{{$home_service->icon6}}" alt="Logistics" /></a></span>
                        <p>{{ $home_service->text6 }}</p>
                    </div>
                </li>

                <li>
                    <div class="in_processL_m">
                        <span><a href="our-services_d15.html"><img src="{{asset('backend/assets/images/home_service')}}/{{$home_service->icon7}}" alt="Installation" /></a></span>
                        <p>{{ $home_service->text7 }}</p>
                    </div>
                </li>

                <li>
                    <div class="in_processL_m">
                        <span><a href="our-services_d15.html"><img src="{{asset('backend/assets/images/home_service')}}/{{$home_service->icon8}}" alt="After sales service" /></a></span>
                        <p>{{ $home_service->text8 }} </p>
                    </div>
                </li>

            </ul>

            <div class="in_more1">
                <a href="our-services_d15.html">read more</a>
            </div>
        </div>
    </div>
</div>
@endforeach