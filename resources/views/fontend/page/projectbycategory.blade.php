@extends('fontend.layout.projectapp')
@section('pageTitle','project')
@section('content')

    <div class="breadcrumbW clearfix">
        <div class="container">
            <div class="breadcrumb clearfix">
                <h2 class="title">Project</h2>
                <div class="bread-right">
                    <a class="home" href="index.html">Home</a>
                    <i></i><a href="about-us_d1.html"><h2>Project</h2></a>
                </div>
            </div>
        </div>
    </div>




    <div class="page-box">
        <div class="container">
            <div class="about_web clearfix row">
                <div class="page_left col-sm-2 col-xs-12 clearfix">
                    <div id="right_column" class="left-nav column">
                        <section class="block blockcms column_box">
                            <span><em>Categories</em><i class="column_icon_toggle icon-plus-sign"></i></span>
                            <div class="htmleaf-content toggle_content">
                                <ul class="mtree">

                                    @foreach($categories as $category)
                                        <li class="mtree-node"><a href="{{route('fontproject.byCategory',$category->id)}}">{{$category->name}}</a></li>
                                    @endforeach
                                    {{--<li class="mtree-node"><a href="aluminium-windows_c2.html">Aluminium Windows</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="mtree-node"><a href="aluminium-doors_c3.html">Aluminium Doors</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="mtree-node"><a href="balustrades_c4.html">Balustrades</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="mtree-node"><a href="glass-rooms_c5.html">Glass Rooms</a>--}}
                                    {{--</li>--}}

                                </ul>
                            </div>
                        </section>
                    </div>

                    <div id="right_column" class="left-pro column">
                        <section class="block blockcms column_box">
                            <span><em>New Products</em><i class="column_icon_toggle icon-plus-sign"></i></span>
                            <div class="htmleaf-content toggle_content" style="overflow: hidden;">
                                <ul>

                                    <li class="clearfix">
                                        <a href="high-end-oversized-glass-lift-and-slide-doors-for-seaside-villa_p43.html"><img id="product_detail_img"  alt=" Oversized Glass Lift and Slide Doors"src="{{asset('fontend/uploadfile/201811/27/b50a26a0da49075fbb7b792a35b76894_small.jpg')}}" /></a>
                                        <div class="lnews-right">
                                            <a href="high-end-oversized-glass-lift-and-slide-doors-for-seaside-villa_p43.html" class="left-pro-t">High-End Oversized Glass Lift and Slide Doors for Seaside Villa</a>
                                            <p>Sunnyquick lift & slide doors have a very strong system, could meeting the very heavy glass over 400kg and anti-typhoon.</p>
                                            <a href="high-end-oversized-glass-lift-and-slide-doors-for-seaside-villa_p43.html" class="tab-pro-more">read more<i class="fa fa-caret-right"></i></a>
                                        </div>
                                    </li>

                                    <li class="clearfix">
                                        <a href="aluminium-thermal-break-patio-glass-bifold-doors_p31.html"><img id="product_detail_img"  alt="Aluminium Glass Patio Bifold Doors" src="{{asset('fontend/uploadfile/201811/27/b50a26a0da49075fbb7b792a35b76894_small.jpg')}}" /></a>
                                        <div class="lnews-right">
                                            <a href="aluminium-thermal-break-patio-glass-bifold-doors_p31.html" class="left-pro-t">Aluminium Thermal Break Patio Glass Bifold Doors</a>
                                            <p>Aluminium bifold doors are the preferred option to transform a living space.</p>
                                            <a href="aluminium-thermal-break-patio-glass-bifold-doors_p31.html" class="tab-pro-more">read more<i class="fa fa-caret-right"></i></a>
                                        </div>
                                    </li>

                                    <li class="clearfix">
                                        <a href="aluminium-soundproof-glass-double-hung-windows_p26.html"><img id="product_detail_img"  alt="Soundproof Double Hung Windows" src="{{asset('fontend/uploadfile/201801/24/20cb22df55bef5ef30fd96e0141a14ca_small.jpg')}}" /></a>
                                        <div class="lnews-right">
                                            <a href="aluminium-soundproof-glass-double-hung-windows_p26.html" class="left-pro-t">Aluminium Soundproof Glass Double Hung Windows</a>
                                            <p>Double hung windows make cleaning easy, and double tilting sashes can get more air into room.</p>
                                            <a href="aluminium-soundproof-glass-double-hung-windows_p26.html" class="tab-pro-more">read more<i class="fa fa-caret-right"></i></a>
                                        </div>
                                    </li>

                                    <li class="clearfix">
                                        <a href="soundproof-aluminium-tempered-glass-casement-windows_p25.html"><img id="product_detail_img"  alt="Soundproof Casement Windows" src="{{asset('fontend/uploadfile/201801/24/047f9aa91846c3a66bf08ce27ac2b6a5_small.jpg')}}" /></a>
                                        <div class="lnews-right">
                                            <a href="soundproof-aluminium-tempered-glass-casement-windows_p25.html" class="left-pro-t">Soundproof Aluminium Tempered Glass Casement Windows</a>
                                            <p>Casement windows are ideal for installation in quiet rooms.</p>
                                            <a href="soundproof-aluminium-tempered-glass-casement-windows_p25.html" class="tab-pro-more">read more<i class="fa fa-caret-right"></i></a>
                                        </div>
                                    </li>

                                    <li class="clearfix">
                                        <a href="waterproofing-semi-structural-curtain-wall_p42.html"><img id="product_detail_img"  alt="Semi Structural Curtain Wall" src="{{asset('fontend/uploadfile/201804/13/dff9a0c03a208852ca4cfa6042b2ae1b_small.jpg')}}" /></a>
                                        <div class="lnews-right">
                                            <a href="waterproofing-semi-structural-curtain-wall_p42.html" class="left-pro-t">Waterproofing Semi Structural Curtain Wall</a>
                                            <p>The Semi-structural curtain wall consists of a supporting structural system and panels.</p>
                                            <a href="waterproofing-semi-structural-curtain-wall_p42.html" class="tab-pro-more">read more<i class="fa fa-caret-right"></i></a>
                                        </div>
                                    </li>

                                    <li class="clearfix">
                                        <a href="aluminium-glass-spandrel-curtain-wall_p19.html"><img id="product_detail_img"  alt="Glass Spandrel Curtain Wall" src="{{asset('fontend/uploadfile/201801/23/8abbfabda82c0052cdd4b6462dd4d6b3_small.jpg')}}" /></a>
                                        <div class="lnews-right">
                                            <a href="aluminium-glass-spandrel-curtain-wall_p19.html" class="left-pro-t">Aluminium Glass Spandrel Curtain Wall</a>
                                            <p>The aluminium frame could be see on the outside building.</p>
                                            <a href="aluminium-glass-spandrel-curtain-wall_p19.html" class="tab-pro-more">read more<i class="fa fa-caret-right"></i></a>
                                        </div>
                                    </li>

                                    <li class="clearfix">
                                        <a href="aluminium-glass-shadow-box-curtain-wall_p21.html"><img id="product_detail_img"  alt="Shadow Box Curtain Wall" src="{{asset('fontend/uploadfile/201801/24/a1f095d6030d82f8fbd2a61f2fff207c_small.jpg')}}" /></a>
                                        <div class="lnews-right">
                                            <a href="aluminium-glass-shadow-box-curtain-wall_p21.html" class="left-pro-t">Aluminium Glass Shadow Box Curtain Wall</a>
                                            <p>The aluminium frames are completely hidden from the outside glass curtain wall.</p>
                                            <a href="aluminium-glass-shadow-box-curtain-wall_p21.html" class="tab-pro-more">read more<i class="fa fa-caret-right"></i></a>
                                        </div>
                                    </li>

                                    <li class="clearfix">
                                        <a href="commercial-aluminium-unitized-glass-curtain-wall-system_p20.html"><img id="product_detail_img"  alt="Unitized Glass Curtain Wall" src="uploadfile/201801/24/7b2ff2159f5a560391ee582aac711763_small.jpg')}}" /></a>
                                        <div class="lnews-right">
                                            <a href="commercial-aluminium-unitized-glass-curtain-wall-system_p20.html" class="left-pro-t">Commercial Aluminium Unitized Glass Curtain Wall System</a>
                                            <p>Unitized glass curtain wall is a of the most popular Commercial Aluminium curtain wall systems in high buildings.</p>
                                            <a href="commercial-aluminium-unitized-glass-curtain-wall-system_p20.html" class="tab-pro-more">read more<i class="fa fa-caret-right"></i></a>
                                        </div>
                                    </li>

                                    <li class="clearfix">
                                        <a href="waterproof-aluminium-glass-sliding-doors_p33.html"><img id="product_detail_img"  alt="Sunnyquick Glass Sliding Doors" src="{{asset('fontend/uploadfile/201802/27/1c5bfe8d7b9acb73754546201b0ecf77_small.jpg')}}" /></a>
                                        <div class="lnews-right">
                                            <a href="waterproof-aluminium-glass-sliding-doors_p33.html" class="left-pro-t">Waterproof Aluminium Glass Sliding Doors</a>
                                            <p>Install a quality smooth and bright sliding doors, enjoy the sunshine and views.</p>
                                            <a href="waterproof-aluminium-glass-sliding-doors_p33.html" class="tab-pro-more">read more<i class="fa fa-caret-right"></i></a>
                                        </div>
                                    </li>

                                    <li class="clearfix">
                                        <a href="quality-structural-four-seasons-glass-rooms_p37.html"><img id="product_detail_img"  alt="Quality Structural Four Seasons Glass Rooms" src="{{asset('fontend/uploadfile/201801/24/b5a4b17de9e2ffadfba1a98fd07b84e0_small.jpg')}}" /></a>
                                        <div class="lnews-right">
                                            <a href="quality-structural-four-seasons-glass-rooms_p37.html" class="left-pro-t">Quality Structural Four Seasons Glass Rooms</a>
                                            <p>Glass room to make your room full of sunshine and warmth.</p>
                                            <a href="quality-structural-four-seasons-glass-rooms_p37.html" class="tab-pro-more">read more<i class="fa fa-caret-right"></i></a>
                                        </div>
                                    </li>


                                </ul>
                            </div>
                        </section>
                    </div>

                </div>

                <div class="page_right col-sm-9 col-xs-12 clearfix">

                    <ul class="news_list project_list">
                        @foreach($projects as $project)
                            <li class="clearfix">
                                <div class="news_list_img"><a href="hilton-hotel-unitized-glass-curtain-wall-in-australia_n25.html"><img src="{{asset('backend/assets/images/project')}}/{{$project->project_photo1}}" alt="Hilton Hotel - Unitized Glass Curtain Wall In Australia" /></a></div>
                                <div class="text">
                                    <a href="hilton-hotel-unitized-glass-curtain-wall-in-australia_n25.html" class="news_list_t">{{$project->title}}</a>
                                    <p>{{strip_tags($project->project_description)}}  </p>
                                    <a href="hilton-hotel-unitized-glass-curtain-wall-in-australia_n25.html" class="more">read more</a>
                                </div>
                            </li>
                        @endforeach
                        {{--<li class="clearfix">--}}
                        {{--<div class="news_list_img"><a href="bi-fold-doors-brings-you-more-space_n26.html"><img src="{{asset('fontend/uploadfile/news/72a7ba6debb8f8e7dcdfbea08d2bc900.jpg')}}" alt="Bi Fold Doors Brings You More Space" /></a></div>--}}
                        {{--<div class="text">--}}
                        {{--<a href="bi-fold-doors-brings-you-more-space_n26.html" class="news_list_t">Bi Fold Doors Brings You More Space</a>--}}
                        {{--<p>One of the projects in USA for the client, RAZ Development Washington D.C Type: Five star luxury Villa Time: 2016-2017 Product: Aluminum Clad Wood Folding Doors, Wooden Door, Balustrade, Aluminum Garage Doors With Glass Service: Design, Production, Installation guidance, shipment Budget: 400 thousand dollar Our Services - One Stop Solutions Design &amp; Engineering —————————— At Sunnyquick, we foc...</p>--}}
                        {{--<a href="bi-fold-doors-brings-you-more-space_n26.html" class="more">read more</a>--}}
                        {{--</div>--}}
                        {{--</li>--}}

                        {{--<li class="clearfix">--}}
                        {{--<div class="news_list_img"><a href="reflective-double-safety-glass-curtain-wall_n27.html"><img src="{{asset('fontend/uploadfile/news/794504a42916a19dbd02b5b8af5314e6.jpg')}}" alt="Reflective Double Safety Glass Curtain Wall" /></a></div>--}}
                        {{--<div class="text">--}}
                        {{--<a href="reflective-double-safety-glass-curtain-wall_n27.html" class="news_list_t">Reflective Double Safety Glass Curtain Wall</a>--}}
                        {{--<p>One of the projects in Rwanda for the client, RSSB Type: Office| Bank of Kigali Time: 2014 Product: Invisible Glass Curtain Wall, Hidden Frame, Aluminum Composed Panel, Stainless Steel Canopy Service: Design, On door size measurement, Production, Installation guidance, Maintenance Budget: 2.2. Millions dollar Our Services - One Stop Solutions Design &amp; Engineering —————————— At Sunnyquick, we f...</p>--}}
                        {{--<a href="reflective-double-safety-glass-curtain-wall_n27.html" class="more">read more</a>--}}
                        {{--</div>--}}
                        {{--</li>--}}

                        {{--<li class="clearfix">--}}
                        {{--<div class="news_list_img"><a href="aluminium-windows-and-doors_n28.html"><img src="{{asset('fontend/uploadfile/news/c7cd50d6699aa96bf8e17562c0d758c7.jpg')}}" alt="Aluminium Windows And Doors" /></a></div>--}}
                        {{--<div class="text">--}}
                        {{--<a href="aluminium-windows-and-doors_n28.html" class="news_list_t">Aluminium Windows And Doors</a>--}}
                        {{--<p>One of the projects in Thailand for the client holiday hotel Type: Four-Star Hotel Time: 2016 Product: Aluminum Windows, Aluminum Doors, Balustrade, and Staircase Service: Design, On door size measurement, Production, Installation guidance, Maintenance Budget: 1.4. Millions dollar Our Services - One Stop Solutions Design &amp; Engineering —————————— At Sunnyquick, we focus on building facade proje...</p>--}}
                        {{--<a href="aluminium-windows-and-doors_n28.html" class="more">read more</a>--}}
                        {{--</div>--}}
                        {{--</li>--}}

                        {{--<li class="clearfix">--}}
                        {{--<div class="news_list_img"><a href="curtain-wall-design-for-greentown-hotel_n29.html"><img src="{{asset('fontend/uploadfile/news/3868a5a8171943650f8c587a3bdef9fd.jpg')}}" alt="Curtain Wall Design For Greentown Hotel" /></a></div>--}}
                        {{--<div class="text">--}}
                        {{--<a href="curtain-wall-design-for-greentown-hotel_n29.html" class="news_list_t">Curtain Wall Design For Greentown Hotel</a>--}}
                        {{--<p>One of the projects in Uganda for the Greentown Apartment Type: Apartment/ Condominiums Time: 2013 Product: Invisible Glass Curtain Wall, Aluminum Windows, Aluminum Doors, Security Nets, and Mosquito Net, Balustrade Service: Design, On door size measurement, Production, Installation guidance, Maintenance Budget: 400 thousand dollar Our Services - One Stop Solutions Design &amp; Engineering ———————...</p>--}}
                        {{--<a href="curtain-wall-design-for-greentown-hotel_n29.html" class="more">read more</a>--}}
                        {{--</div>--}}
                        {{--</li>--}}

                        {{--<li class="clearfix">--}}
                        {{--<div class="news_list_img"><a href="invisible-glass-curtain-wall-for-apartment_n30.html"><img src="{{asset('fontend/uploadfile/news/a268db88d8ad74d5b4c4baa888886658.jpg')}}" alt="Invisible Glass Curtain Wall For Apartment" /></a></div>--}}
                        {{--<div class="text">--}}
                        {{--<a href="invisible-glass-curtain-wall-for-apartment_n30.html" class="news_list_t">Invisible Glass Curtain Wall For Apartment</a>--}}
                        {{--<p>One of the projects in Mozambique for the M &amp; M Apartment Type: Villa Time: 2014 Product: Invisible Glass Curtain Wall, Aluminum Windows, Aluminum Doors, Security nets, Mosquito, Stainless Steel Balustrade Service: Design, On door size measurement, Production, Installation guidance, Maintenance Budget: 500 thousand dollar Our Services - One Stop Solutions Design &amp; Engineering —————————— At...</p>--}}
                        {{--<a href="invisible-glass-curtain-wall-for-apartment_n30.html" class="more">read more</a>--}}
                        {{--</div>--}}
                        {{--</li>--}}

                        {{--<li class="clearfix">--}}
                        {{--<div class="news_list_img"><a href="decorative-curtain-wall-design_n31.html"><img src="{{asset('fontend/uploadfile/news/d5cd53f41f44d73f99fb3f8ac81d3a3d.jpg')}}" alt="Decorative Curtain Wall Design" /></a></div>--}}
                        {{--<div class="text">--}}
                        {{--<a href="decorative-curtain-wall-design_n31.html" class="news_list_t">Decorative Curtain Wall Design</a>--}}
                        {{--<p>One of the projects in Singapore for the client Design Institute Type: Five star design Institute Time： 2016 Product： Unitized Curtain Wall, Aluminum Panel, Irregular Shaped Decorative Curtain Wall Service: Design, 3D renders, On door size measurement, Production, Installation guidance. Budget: 1.4 Millions dollar Our Services - One Stop Solutions Design &amp; Engineering —————————— At Sunnyquick,...</p>--}}
                        {{--<a href="decorative-curtain-wall-design_n31.html" class="more">read more</a>--}}
                        {{--</div>--}}
                        {{--</li>--}}

                        {{--<li class="clearfix">--}}
                        {{--<div class="news_list_img"><a href="post-office-building-glass-curtain-wall-installation_n32.html"><img src="{{asset('fontend/uploadfile/news/24ab998203791cb161604f24dc5c49e6.jpg')}}" alt="Post Office Building - Glass Curtain Wall Installation" /></a></div>--}}
                        {{--<div class="text">--}}
                        {{--<a href="post-office-building-glass-curtain-wall-installation_n32.html" class="news_list_t">Post Office Building - Glass Curtain Wall Installation</a>--}}
                        {{--<p>One of the projects in Senegal for the client Post Office Type: Public Post Office Time： 2016 Product：Curtain Wall window, Balustrade Service: Design, 3D renders, On door size measurement, Production, Installation guidance. Budget: 200 thousand dollar Our Services - One Stop Solutions Design &amp; Engineering —————————— At Sunnyquick, we focus on building facade projects, curtain wall systems,&nbs...</p>--}}
                        {{--<a href="post-office-building-glass-curtain-wall-installation_n32.html" class="more">read more</a>--}}
                        {{--</div>--}}
                        {{--</li>--}}

                    </ul>

                    <div class="page_num">

                        <span>1</span>
                        <a href="Project_nc2_2.html" class="pages underline">2</a>

                        <a href="Project_nc2_2.html" class="pages">&gt;&gt;</a>

                        <p>a total of <span>2</span> pages</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection