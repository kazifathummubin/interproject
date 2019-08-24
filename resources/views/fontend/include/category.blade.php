<div class="in_categW">
    <div class="container">
        <div class="in_categ">
            @foreach($home_categories as $home_category)
            <div class="in_title"><span>products categories</span></div>
            <ul class="in_categL clearfix row">

                <li>
                    <div class="in_categL_m">
                        <a href="curtain-walls_c1.html"><img  src="{{asset('backend/assets/images/home_category')}}/{{$home_category->icon1}}" alt="Curtain Walls"></a>
                        <div class="in_categL_w">
                            <a href="curtain-walls_c1.html">{{ $home_category->text1 }}</a>
                            <p>

                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="in_categL_m">
                        <a href="aluminium-windows_c2.html"><img  src="{{asset('backend/assets/images/home_category')}}/{{$home_category->icon2}}" alt="Aluminium Windows"></a>
                        <div class="in_categL_w">
                            <a href="aluminium-windows_c2.html">{{ $home_category->text2 }}</a>
                            <p>
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="in_categL_m">
                        <a href="aluminium-doors_c3.html"><img  src="{{asset('backend/assets/images/home_category')}}/{{$home_category->icon3}}" " alt="Aluminium Doors"></a>
                        <div class="in_categL_w">
                            <a href="aluminium-doors_c3.html">{{ $home_category->text3 }}</a>
                            <p>
                                 nvbnvbnvbnvbnvbn
                            </p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="in_categL_m">
                        <a href="balustrades_c4.html"><img  src="{{asset('backend/assets/images/home_category')}}/{{$home_category->icon4}}" alt="Balustrades"></a>
                        <div class="in_categL_w">
                            <a href="balustrades_c4.html">{{ $home_category->text4 }}</a>
                            <p></p>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="in_categL_m">
                        <a href="glass-rooms_c5.html"><img src="{{asset('backend/assets/images/home_category')}}/{{$home_category->icon5}}" alt="Glass Rooms"></a>
                        <div class="in_categL_w">
                            <a href="glass-rooms_c5.html">{{ $home_category->text5 }} </a>
                            <p></p>
                            @endforeach
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
