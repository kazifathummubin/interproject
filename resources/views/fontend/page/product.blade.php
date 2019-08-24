@extends('fontend.layout.productapp')
@section('pageTitle','product')
@section('content')


    <div class="breadcrumbW clearfix">
        <div class="container">
            <div class="breadcrumb clearfix">
                <h2 class="title">Product</h2>
                <div class="bread-right">
                    <a class="home" href="index.html">Home</a>
                    <i></i><a href="about-us_d1.html"><h2>product</h2></a>
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
                                    <li class="mtree-node"><a href="{{route('font.byCategory',$category->id)}}">{{$category->name}}</a></li>
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
                                        <a href="high-end-oversized-glass-lift-and-slide-doors-for-seaside-villa_p43.html"><img id="product_detail_img"  alt=" Oversized Glass Lift and Slide Doors" src="{{asset('fontend/uploadfile/201806/09/8d4a8ab0aba669e8215e66589b1a5ccc_small.jpg')}}" /></a>
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
                                        <a href="commercial-aluminium-unitized-glass-curtain-wall-system_p20.html"><img id="product_detail_img"  alt="Unitized Glass Curtain Wall" src="{{asset('fontend/uploadfile/201801/24/7b2ff2159f5a560391ee582aac711763_small.jpg')}}" /></a>
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
                    <div class="main">
                        <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
                            <div class="cbp-vm-options">
                                <em>Products</em>
                                <p>view :</p>
                                <a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid">grid view</a>
                                <a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list">list view</a>
                            </div>
                            <div class="pro-text"></div>
                            <ul class="clearfix row">

                                @foreach($products as $product)
                                <li>
                                    <div class="cbp-div">
                                        <a class="cbp-vm-image" href="curtain-wall-vertical-exposed-and-horizontal-hidden-framing_p51.html" title="Curtain Wall Vertical-Exposed And Horizontal-Hidden Framing"><img id="product_detail_img"  alt="Curtain Wall Vertical-Exposed And Horizontal-Hidden Framing" src="{{asset('backend/assets/images/products')}}/{{$product->feature_photo}}" /></a>
                                        <div class="cbp-list-center">
                                            <a href="curtain-wall-vertical-exposed-and-horizontal-hidden-framing_p51.html" title="Curtain Wall Vertical-Exposed And Horizontal-Hidden Framing" class="cbp-title">{{$product->title}}</a>
                                            <div class="cbp-vm-details">{{strip_tags ($product->body) }}</div>
                                            <div class="tags">
                                                <span>Tags : </span>
                                                <a href="visible-frame-glass-curtain-wall_sp.html">Visible Frame Glass Curtain Wall</a>
                                                <a href="spandrel-curtain-wall_sp.html">Spandrel Curtain Wall</a>
                                                <a href="vertical-exposed-and-horizontal-hidden-framing_sp.html">Vertical-Exposed And Horizontal-Hidden Framing</a>
                                                <a href="exposed-framing-curtain-wall_sp.html">Exposed Framing Curtain Wall</a>
                                                <a href="aluminium-frame-curtain-wall_sp.html">Aluminium Frame Curtain Wall</a>
                                                <a href="stick-curtain-wall-system_sp.html">Stick Curtain Wall System</a>
                                            </div>
                                            <div class="cbp-list-more more1">
                                                <a href="curtain-wall-vertical-exposed-and-horizontal-hidden-framing_p51.html" class="cbp-list-view">view detail</a>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                {{--<li>--}}
                                    {{--<div class="cbp-div">--}}
                                        {{--<a class="cbp-vm-image" href="visible-frame-curtain-wall-with-insulating-glass_p50.html" title="Visible Frame Curtain Wall With Insulating Glass"><img id="product_detail_img"  alt="Visible Frame Curtain Wall With Insulating Glass" src="{{asset('fontend/uploadfile/201904/24/99ebcbb4e5c9274570630cf920a3847c_small.jpg')}}" /></a>--}}
                                        {{--<div class="cbp-list-center">--}}
                                            {{--<a href="visible-frame-curtain-wall-with-insulating-glass_p50.html" title="Visible Frame Curtain Wall With Insulating Glass" class="cbp-title">Visible Frame Curtain Wall With Insulating Glass</a>--}}
                                            {{--<div class="cbp-vm-details">It is a frame-supported curtain wall and the aluminium frames are visible on the exterior of the panel.</div>--}}
                                            {{--<div class="tags">--}}
                                                {{--<span>Tags : </span>--}}
                                                {{--<a href="aluminium-glass-curtain-wall_sp.html">Aluminium Glass Curtain Wall</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="cbp-list-more more1">--}}
                                                {{--<a href="visible-frame-curtain-wall-with-insulating-glass_p50.html" class="cbp-list-view">view detail</a>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="cbp-div">--}}
                                        {{--<a class="cbp-vm-image" href="structural-diagram-of-national-patented-intelligent-hook-type-hidden-framing-glass-curtain-wall_p49.html" title="Structural Diagram Of National Patented Intelligent "Hook-Type"Hidden-Framing Glass Curtain Wall"><img id="product_detail_img"  alt="Hidden-Framing Glass Curtain Wall" src="{{asset('fontend/uploadfile/201904/24/4e13a102e19f648737dab66990c2f482_small.jpg')}}" /></a>--}}
                                        {{--<div class="cbp-list-center">--}}
                                            {{--<a href="structural-diagram-of-national-patented-intelligent-hook-type-hidden-framing-glass-curtain-wall_p49.html" title="Structural Diagram Of National Patented Intelligent "Hook-Type"Hidden-Framing Glass Curtain Wall" class="cbp-title">Structural Diagram Of National Patented Intelligent "Hook-Type"Hidden-Framing Glass Curtain Wall</a>--}}
                                            {{--<div class="cbp-vm-details">It is a frame-supported curtain wall and the aluminium frame is completely invisible on the exterior panel.</div>--}}
                                            {{--<div class="tags">--}}
                                                {{--<span>Tags : </span>--}}
                                                {{--<a href="hidden-framing-hollow-glass-curtain-wall_sp.html">Hidden-Framing Hollow Glass Curtain Wall</a>--}}
                                                {{--<a href="frameless-glass-curtain-wall-systems_sp.html">Frameless Glass Curtain Wall Systems</a>--}}
                                                {{--<a href="double-glass-curtain-wall_sp.html">Double Glass Curtain Wall</a>--}}
                                                {{--<a href="smart-glazed-curtain-wall_sp.html">Smart Glazed Curtain Wall</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="cbp-list-more more1">--}}
                                                {{--<a href="structural-diagram-of-national-patented-intelligent-hook-type-hidden-framing-glass-curtain-wall_p49.html" class="cbp-list-view">view detail</a>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="cbp-div">--}}
                                        {{--<a class="cbp-vm-image" href="intelligent-hook-type-glass-curtain-wall-and-aluminium-plastic-board_p48.html" title="Intelligent "Hook-Type" Glass Curtain Wall And Aluminium Plastic Board"><img id="product_detail_img"  alt="Glass Curtain Wall And Aluminium Plastic Board" src="{{asset('fontend/uploadfile/201901/15/d41c68fe0c29c2a511f5246473bce61d_small.jpg')}}" /></a>--}}
                                        {{--<div class="cbp-list-center">--}}
                                            {{--<a href="intelligent-hook-type-glass-curtain-wall-and-aluminium-plastic-board_p48.html" title="Intelligent "Hook-Type" Glass Curtain Wall And Aluminium Plastic Board" class="cbp-title">Intelligent "Hook-Type" Glass Curtain Wall And Aluminium Plastic Board</a>--}}
                                            {{--<div class="cbp-vm-details">The aluminium frame and aluminium plastic board could be decoration on the outside building.</div>--}}
                                            {{--<div class="tags">--}}
                                                {{--<span>Tags : </span>--}}
                                                {{--<a href="glass-curtain-wall-and-aluminium-plastic-board_sp.html">Glass Curtain Wall And Aluminium Plastic Board</a>--}}
                                                {{--<a href="aluminium-plastic-board-curtain-wall_sp.html">Aluminium Plastic Board Curtain Wall</a>--}}
                                                {{--<a href="hook-type-glass-curtain-wall_sp.html">"Hook-Type" Glass Curtain Wall</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="cbp-list-more more1">--}}
                                                {{--<a href="intelligent-hook-type-glass-curtain-wall-and-aluminium-plastic-board_p48.html" class="cbp-list-view">view detail</a>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="cbp-div">--}}
                                        {{--<a class="cbp-vm-image" href="high-end-oversized-glass-lift-and-slide-doors-for-seaside-villa_p43.html" title="High-End Oversized Glass Lift and Slide Doors for Seaside Villa"><img id="product_detail_img"  alt=" Oversized Glass Lift and Slide Doors" src="{{asset('fontend/uploadfile/201806/09/8d4a8ab0aba669e8215e66589b1a5ccc_small.jpg')}}" /></a>--}}
                                        {{--<div class="cbp-list-center">--}}
                                            {{--<a href="high-end-oversized-glass-lift-and-slide-doors-for-seaside-villa_p43.html" title="High-End Oversized Glass Lift and Slide Doors for Seaside Villa" class="cbp-title">High-End Oversized Glass Lift and Slide Doors for Seaside Villa</a>--}}
                                            {{--<div class="cbp-vm-details">Sunnyquick lift & slide doors have a very strong system, could meeting the very heavy glass over 400kg and anti-typhoon.</div>--}}
                                            {{--<div class="tags">--}}
                                                {{--<span>Tags : </span>--}}
                                                {{--<a href="lift-and-slide-door-system_sp.html">Lift And Slide Door System</a>--}}
                                                {{--<a href="oversized-glass-slding-doors_sp.html">Oversized Glass Slding Doors</a>--}}
                                                {{--<a href="anti-typhoon-lift-and-slide-doors_sp.html">Anti-Typhoon Lift And Slide Doors</a>--}}
                                                {{--<a href="glass-sliding-patio-doors_sp.html">Glass Sliding Patio Doors</a>--}}
                                                {{--<a href="aluminum-lift-and-slide-door-system_sp.html">Aluminum Lift And Slide Door System</a>--}}
                                                {{--<a href="american-lift-and-slide-doors_sp.html">American Lift And Slide Doors</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="cbp-list-more more1">--}}
                                                {{--<a href="high-end-oversized-glass-lift-and-slide-doors-for-seaside-villa_p43.html" class="cbp-list-view">view detail</a>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="cbp-div">--}}
                                        {{--<a class="cbp-vm-image" href="quality-aluminium-patio-glass-french-doors_p32.html" title="Quality Aluminium Patio Glass French Doors"><img id="product_detail_img"  alt="Patio Glass French Doors" src="{{asset('fontend/uploadfile/201801/24/5d7c1722e6f189985f9b841d32ea87d2_small.jpg')}}" /></a>--}}
                                        {{--<div class="cbp-list-center">--}}
                                            {{--<a href="quality-aluminium-patio-glass-french-doors_p32.html" title="Quality Aluminium Patio Glass French Doors" class="cbp-title">Quality Aluminium Patio Glass French Doors</a>--}}
                                            {{--<div class="cbp-vm-details">High quality waterproof and soundproofing of french door system.</div>--}}
                                            {{--<div class="tags">--}}
                                                {{--<span>Tags : </span>--}}
                                                {{--<a href="glass-panel-french-doors_sp.html">Glass Panel French Doors</a>--}}
                                                {{--<a href="aluminium-french-patio-doors_sp.html">Aluminium French Patio Doors</a>--}}
                                                {{--<a href="double-opening-french-doors_sp.html">Double Opening French Doors</a>--}}
                                                {{--<a href="outside-opening-french-doors_sp.html">Outside Opening French Doors</a>--}}
                                                {{--<a href="aluminium-single-french-doors_sp.html">Aluminium Single French Doors</a>--}}
                                                {{--<a href="quality-glass-french-doors_sp.html">Quality Glass French Doors</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="cbp-list-more more1">--}}
                                                {{--<a href="quality-aluminium-patio-glass-french-doors_p32.html" class="cbp-list-view">view detail</a>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="cbp-div">--}}
                                        {{--<a class="cbp-vm-image" href="aluminium-thermal-break-patio-glass-bifold-doors_p31.html" title="Aluminium Thermal Break Patio Glass Bifold Doors"><img id="product_detail_img"  alt="Aluminium Glass Patio Bifold Doors" src="{{asset('fontend/uploadfile/201811/27/b50a26a0da49075fbb7b792a35b76894_small.jpg')}}" /></a>--}}
                                        {{--<div class="cbp-list-center">--}}
                                            {{--<a href="aluminium-thermal-break-patio-glass-bifold-doors_p31.html" title="Aluminium Thermal Break Patio Glass Bifold Doors" class="cbp-title">Aluminium Thermal Break Patio Glass Bifold Doors</a>--}}
                                            {{--<div class="cbp-vm-details">Aluminium bifold doors are the preferred option to transform a living space.</div>--}}
                                            {{--<div class="tags">--}}
                                                {{--<span>Tags : </span>--}}
                                                {{--<a href="double-glazed-bi-fold-doors_sp.html">Double Glazed Bi Fold Doors</a>--}}
                                                {{--<a href="aluminium-french-bifold-doors_sp.html">Aluminium French Bifold Doors</a>--}}
                                                {{--<a href="frame-glass-bifold-doors_sp.html">Frame Glass Bifold  Doors</a>--}}
                                                {{--<a href="glass-patio-folding-doors_sp.html">Glass Patio Folding Doors</a>--}}
                                                {{--<a href="australian-standard-bifold-doors_sp.html">Australian Standard Bifold Doors</a>--}}
                                                {{--<a href="aluminium-folding-sliding-doors_sp.html">Aluminium Folding Sliding Doors</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="cbp-list-more more1">--}}
                                                {{--<a href="aluminium-thermal-break-patio-glass-bifold-doors_p31.html" class="cbp-list-view">view detail</a>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="cbp-div">--}}
                                        {{--<a class="cbp-vm-image" href="new-type-aluminium-louvre-windows_p29.html" title="New Type Aluminium Louvre Windows"><img id="product_detail_img"  alt="New Type Louvre Windows" src="{{asset('fontend/uploadfile/201801/24/50428cab5bccb7c3ad1a0b3956338207_small.jpg')}}" /></a>--}}
                                        {{--<div class="cbp-list-center">--}}
                                            {{--<a href="new-type-aluminium-louvre-windows_p29.html" title="New Type Aluminium Louvre Windows" class="cbp-title">New Type Aluminium Louvre Windows</a>--}}
                                            {{--<div class="cbp-vm-details">Sometimes referred to as jalousie, the louvre windows allows for more controlled ventilation of buildings, especially those located in temperate climates.</div>--}}
                                            {{--<div class="tags">--}}
                                                {{--<span>Tags : </span>--}}
                                                {{--<a href="aluminium-louvre-windows_sp.html">Aluminium Louvre Windows</a>--}}
                                                {{--<a href="aluminium-jalousie-windows_sp.html">Aluminium Jalousie Windows</a>--}}
                                                {{--<a href="glass-louvre-windows_sp.html">Glass Louvre Windows</a>--}}
                                                {{--<a href="aluminium-louvre-sliding-window_sp.html">Aluminium Louvre Sliding Window</a>--}}
                                                {{--<a href="swing-louvre-windows_sp.html">Swing Louvre Windows</a>--}}
                                                {{--<a href="glass-turn-jalousie-windows_sp.html">Glass Turn Jalousie Windows</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="cbp-list-more more1">--}}
                                                {{--<a href="new-type-aluminium-louvre-windows_p29.html" class="cbp-list-view">view detail</a>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="cbp-div">--}}
                                        {{--<a class="cbp-vm-image" href="residential-aluminium-double-glass-sliding-window_p27.html" title="Residential Aluminium Double Glass Sliding Window"><img id="product_detail_img"  alt="Double Glass Sliding Window" src="{{asset('fontend/uploadfile/201801/24/c205ae243188fc18a18dd56443320eac_small.jpg')}}" /></a>--}}
                                        {{--<div class="cbp-list-center">--}}
                                            {{--<a href="residential-aluminium-double-glass-sliding-window_p27.html" title="Residential Aluminium Double Glass Sliding Window" class="cbp-title">Residential Aluminium Double Glass Sliding Window</a>--}}
                                            {{--<div class="cbp-vm-details">Sliding windows are easy to open, slide to the left or right, let the sunshine and fresh air come in natural.</div>--}}
                                            {{--<div class="tags">--}}
                                                {{--<span>Tags : </span>--}}
                                                {{--<a href="double-glass-sliding-windows_sp.html">Double Glass Sliding Windows</a>--}}
                                                {{--<a href="aluminium-sliding-glass-windows_sp.html">Aluminium Sliding Glass Windows</a>--}}
                                                {{--<a href="aluminium-horizontal-slider-windows_sp.html">Aluminium Horizontal Slider windows</a>--}}
                                                {{--<a href="tempered-glass-sliding-window_sp.html">Tempered Glass Sliding Window</a>--}}
                                                {{--<a href="patio-sliding-aluminium-windows_sp.html">Patio Sliding Aluminium Windows</a>--}}
                                                {{--<a href="glass-sliding-sash-windows_sp.html">Glass Sliding Sash Windows</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="cbp-list-more more1">--}}
                                                {{--<a href="residential-aluminium-double-glass-sliding-window_p27.html" class="cbp-list-view">view detail</a>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="cbp-div">--}}
                                        {{--<a class="cbp-vm-image" href="aluminium-soundproof-glass-double-hung-windows_p26.html" title="Aluminium Soundproof Glass Double Hung Windows"><img id="product_detail_img"  alt="Soundproof Double Hung Windows" src="{{asset('fontend/uploadfile/201801/24/20cb22df55bef5ef30fd96e0141a14ca_small.jpg')}}" /></a>--}}
                                        {{--<div class="cbp-list-center">--}}
                                            {{--<a href="aluminium-soundproof-glass-double-hung-windows_p26.html" title="Aluminium Soundproof Glass Double Hung Windows" class="cbp-title">Aluminium Soundproof Glass Double Hung Windows</a>--}}
                                            {{--<div class="cbp-vm-details">Double hung windows make cleaning easy, and double tilting sashes can get more air into room.</div>--}}
                                            {{--<div class="tags">--}}
                                                {{--<span>Tags : </span>--}}
                                                {{--<a href="glass-double-hung-windows_sp.html">Glass Double Hung Windows</a>--}}
                                                {{--<a href="double-hung-aluminium-windows_sp.html">Double Hung Aluminium Windows</a>--}}
                                                {{--<a href="tempered-glass-sash-windows_sp.html">Tempered Glass Sash Windows</a>--}}
                                                {{--<a href="aluminium-double-hung-windows_sp.html">Aluminium Double Hung Windows</a>--}}
                                                {{--<a href="double-hung-glass-windows_sp.html">Double Hung Glass Windows</a>--}}
                                                {{--<a href="frosted-glass-double-hung-window_sp.html">Frosted Glass Double Hung Window</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="cbp-list-more more1">--}}
                                                {{--<a href="aluminium-soundproof-glass-double-hung-windows_p26.html" class="cbp-list-view">view detail</a>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="cbp-div">--}}
                                        {{--<a class="cbp-vm-image" href="soundproof-aluminium-tempered-glass-casement-windows_p25.html" title="Soundproof Aluminium Tempered Glass Casement Windows"><img id="product_detail_img"  alt="Soundproof Casement Windows" src="{{asset('fontend/uploadfile/201801/24/047f9aa91846c3a66bf08ce27ac2b6a5_small.jpg')}}" /></a>--}}
                                        {{--<div class="cbp-list-center">--}}
                                            {{--<a href="soundproof-aluminium-tempered-glass-casement-windows_p25.html" title="Soundproof Aluminium Tempered Glass Casement Windows" class="cbp-title">Soundproof Aluminium Tempered Glass Casement Windows</a>--}}
                                            {{--<div class="cbp-vm-details">Casement windows are ideal for installation in quiet rooms.</div>--}}
                                            {{--<div class="tags">--}}
                                                {{--<span>Tags : </span>--}}
                                                {{--<a href="tempered-glass-casement-windows_sp.html">Tempered Glass Casement Windows</a>--}}
                                                {{--<a href="aluminium-casement-glass-windows_sp.html">Aluminium Casement Glass Windows</a>--}}
                                                {{--<a href="soundproof-glazed-opening-windows_sp.html">Soundproof Glazed Opening Windows</a>--}}
                                                {{--<a href="glass-casement-house-windows_sp.html">Glass Casement House Windows</a>--}}
                                                {{--<a href="casement-aluminium-windows_sp.html">Casement Aluminium Windows</a>--}}
                                                {{--<a href="quality-aluminium-glass-windows_sp.html">Quality Aluminium Glass Windows</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="cbp-list-more more1">--}}
                                                {{--<a href="soundproof-aluminium-tempered-glass-casement-windows_p25.html" class="cbp-list-view">view detail</a>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="cbp-div">--}}
                                        {{--<a class="cbp-vm-image" href="waterproofing-semi-structural-curtain-wall_p42.html" title="Waterproofing Semi Structural Curtain Wall"><img id="product_detail_img"  alt="Semi Structural Curtain Wall" src="{{asset('fontend/uploadfile/201804/13/dff9a0c03a208852ca4cfa6042b2ae1b_small.jpg')}}" /></a>--}}
                                        {{--<div class="cbp-list-center">--}}
                                            {{--<a href="waterproofing-semi-structural-curtain-wall_p42.html" title="Waterproofing Semi Structural Curtain Wall" class="cbp-title">Waterproofing Semi Structural Curtain Wall</a>--}}
                                            {{--<div class="cbp-vm-details">The Semi-structural curtain wall consists of a supporting structural system and panels.</div>--}}
                                            {{--<div class="tags">--}}
                                                {{--<span>Tags : </span>--}}
                                                {{--<a href="semi-structural-curtain-wall_sp.html">Semi Structural Curtain Wall</a>--}}
                                                {{--<a href="hidden-frame-glass-curtain-wall_sp.html">Hidden Frame Glass Curtain Wall</a>--}}
                                                {{--<a href="aluminum-spandrel-curtain-wall_sp.html">Aluminum Spandrel Curtain Wall</a>--}}
                                                {{--<a href="aluminum-exposed-frame-curtain-wall_sp.html">Aluminum Exposed Frame Curtain Wall</a>--}}
                                                {{--<a href="spandrel-panel-curtain-wall-system_sp.html">Spandrel Panel Curtain Wall System</a>--}}
                                                {{--<a href="commercial-glazed-curtain-wall_sp.html">Commercial Glazed Curtain Wall</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="cbp-list-more more1">--}}
                                                {{--<a href="waterproofing-semi-structural-curtain-wall_p42.html" class="cbp-list-view">view detail</a>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="cbp-div">--}}
                                        {{--<a class="cbp-vm-image" href="point-supported-spider-glass-curtain-walls_p45.html" title="Point Supported Spider Glass Curtain Walls"><img id="product_detail_img"  alt="Point Supported Spider Glass Curtain Walls" src="{{asset('fontend/uploadfile/201811/22/793f9e3fb17e618f5983d61c344dc509_small.jpg')}}" /></a>--}}
                                        {{--<div class="cbp-list-center">--}}
                                            {{--<a href="point-supported-spider-glass-curtain-walls_p45.html" title="Point Supported Spider Glass Curtain Walls" class="cbp-title">Point Supported Spider Glass Curtain Walls</a>--}}
                                            {{--<div class="cbp-vm-details">The Point Supported Curtain Wall commonly used in the lobby space of commercial buildings.</div>--}}
                                            {{--<div class="tags">--}}
                                                {{--<span>Tags : </span>--}}
                                                {{--<a href="point-supported-curtain-wall_sp.html">Point Supported Curtain Wall</a>--}}
                                                {{--<a href="point-supported-structural-glass-systems_sp.html">Point Supported Structural Glass Systems</a>--}}
                                                {{--<a href="spider-glass-curtain-walls_sp.html">Spider Glass Curtain Walls</a>--}}
                                                {{--<a href="spider-structural-glass-systems_sp.html">Spider Structural Glass Systems</a>--}}
                                                {{--<a href="spider-glass-curtain-wall-factory_sp.html">Spider Glass Curtain Wall Factory</a>--}}
                                                {{--<a href="spider-glass-curtain-wall-design_sp.html">Spider Glass Curtain Wall Design</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="cbp-list-more more1">--}}
                                                {{--<a href="point-supported-spider-glass-curtain-walls_p45.html" class="cbp-list-view">view detail</a>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="cbp-div">--}}
                                        {{--<a class="cbp-vm-image" href="aluminium-glass-spandrel-curtain-wall_p19.html" title="Aluminium Glass Spandrel Curtain Wall"><img id="product_detail_img"  alt="Glass Spandrel Curtain Wall" src="{{asset('fontend/uploadfile/201801/23/8abbfabda82c0052cdd4b6462dd4d6b3_small.jpg')}}" /></a>--}}
                                        {{--<div class="cbp-list-center">--}}
                                            {{--<a href="aluminium-glass-spandrel-curtain-wall_p19.html" title="Aluminium Glass Spandrel Curtain Wall" class="cbp-title">Aluminium Glass Spandrel Curtain Wall</a>--}}
                                            {{--<div class="cbp-vm-details">The aluminium frame could be see on the outside building.</div>--}}
                                            {{--<div class="tags">--}}
                                                {{--<span>Tags : </span>--}}
                                                {{--<a href="spandrel-panel-curtain-wall_sp.html">Spandrel Panel Curtain Wall</a>--}}
                                                {{--<a href="residential-spandrel-curtain-wall_sp.html">Residential Spandrel Curtain Wall</a>--}}
                                                {{--<a href="spandrel-glass-curtain-wall_sp.html">Spandrel Glass Curtain Wall</a>--}}
                                                {{--<a href="residential-glass-curtain-wall_sp.html">Residential Glass Curtain Wall</a>--}}
                                                {{--<a href="glazed-spandrel-curtain-wall_sp.html">Glazed Spandrel Curtain Wall</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="cbp-list-more more1">--}}
                                                {{--<a href="aluminium-glass-spandrel-curtain-wall_p19.html" class="cbp-list-view">view detail</a>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="cbp-div">--}}
                                        {{--<a class="cbp-vm-image" href="commercial-design-aluminium-fin-curtain-wall_p41.html" title="Commercial Design Aluminium Fin Curtain Wall"><img id="product_detail_img"  alt="Aluminium Fin Curtain Wall" src="{{asset('fontend/uploadfile/201804/13/5b379e65911d90fed447d6eb11e04e0a_small.jpg')}}" /></a>--}}
                                        {{--<div class="cbp-list-center">--}}
                                            {{--<a href="commercial-design-aluminium-fin-curtain-wall_p41.html" title="Commercial Design Aluminium Fin Curtain Wall" class="cbp-title">Commercial Design Aluminium Fin Curtain Wall</a>--}}
                                            {{--<div class="cbp-vm-details">In the Glass Curtain Wall, the addition of Aluminium Fin has made the appearance of the building a lot of artistic changes.</div>--}}
                                            {{--<div class="tags">--}}
                                                {{--<span>Tags : </span>--}}
                                                {{--<a href="aluminium-fin-curtain-wall_sp.html">Aluminium Fin Curtain Wall</a>--}}
                                                {{--<a href="reflective-glass-curtain-wall_sp.html">Reflective Glass Curtain Wall</a>--}}
                                                {{--<a href="stick-frame-curtain-wall_sp.html">Stick Frame Curtain Wall</a>--}}
                                                {{--<a href="glass-panel-curtain-wall_sp.html">Glass Panel Curtain Wall</a>--}}
                                                {{--<a href="ribbon-glazing-curtain-wall_sp.html">Ribbon Glazing Curtain Wall</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="cbp-list-more more1">--}}
                                                {{--<a href="commercial-design-aluminium-fin-curtain-wall_p41.html" class="cbp-list-view">view detail</a>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="cbp-div">--}}
                                        {{--<a class="cbp-vm-image" href="aluminium-glass-shadow-box-curtain-wall_p21.html" title="Aluminium Glass Shadow Box Curtain Wall"><img id="product_detail_img"  alt="Shadow Box Curtain Wall" src="{{asset('fontend/uploadfile/201801/24/a1f095d6030d82f8fbd2a61f2fff207c_small.jpg')}}" /></a>--}}
                                        {{--<div class="cbp-list-center">--}}
                                            {{--<a href="aluminium-glass-shadow-box-curtain-wall_p21.html" title="Aluminium Glass Shadow Box Curtain Wall" class="cbp-title">Aluminium Glass Shadow Box Curtain Wall</a>--}}
                                            {{--<div class="cbp-vm-details">The aluminium frames are completely hidden from the outside glass curtain wall.</div>--}}
                                            {{--<div class="tags">--}}
                                                {{--<span>Tags : </span>--}}
                                                {{--<a href="frameless-glass-curtain-wall_sp.html">Frameless Glass Curtain Wall</a>--}}
                                                {{--<a href="shadow-box-curtain-wall_sp.html">Shadow Box Curtain Wall</a>--}}
                                                {{--<a href="shadow-box-glass-curtain-wall_sp.html">Shadow Box Glass Curtain Wall</a>--}}
                                                {{--<a href="commercial-shadow-box-curtain-wall_sp.html">Commercial Shadow Box Curtain Wall</a>--}}
                                                {{--<a href="aluminium-seamless-curtain-wall_sp.html">Aluminium Seamless Curtain Wall</a>--}}
                                                {{--<a href="seamless-glass-curtain-wall_sp.html">Seamless Glass Curtain Wall</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="cbp-list-more more1">--}}
                                                {{--<a href="aluminium-glass-shadow-box-curtain-wall_p21.html" class="cbp-list-view">view detail</a>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}


                            </ul>
                        </div>
                        <script type="text/javascript" src="{{asset('fontend/template/js/cbpViewModeSwitch.js')}}"></script>
                    </div>
                    <div class="page_num">

                        <span>1</span>
                        <a href="products_2.html" class="pages underline">2</a>

                        <a href="products_2.html" class="pages">&gt;&gt;</a>

                        <p>a total of <span>2</span> pages</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection