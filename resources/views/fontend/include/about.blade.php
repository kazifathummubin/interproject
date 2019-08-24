<div class="in_aboutW">
    <div class="container">
        @foreach($home_abouts as $home_about)
        <div class="in_title"><span> {{ $home_about->title }}</span></div>
        <div class="in_about clearfix">
            <div class="in_about_l">
                <a href="about-us_d1.html">  {!! $home_about->details !!}</a>
                <div class="in_about_w">
                </div>
                <div class="in_more1">
                    <a href="about-us_d1.html">more about us</a>
                </div>
            </div>
            <div class="in_about_r"><a href="about-us_d1.html"><img src="{{asset('backend/assets/images/home_about')}}/{{$home_about->photo}}" alt="About Us" /></a></div>
            @endforeach
        </div>
    </div>
</div>