
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-52KX7JF"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->  <div class="svg-wrap">
    <svg width="64" height="64" viewBox="0 0 64 64">
        <path id="arrow-left-4" d="M15.946 48l0.003-10.33 47.411 0.003v-11.37h-47.414l0.003-10.304-15.309 16z" />
    </svg>
    <svg width="64" height="64" viewBox="0 0 64 64">
        <path id="arrow-right-4" d="M48.058 48l-0.003-10.33-47.414 0.003v-11.37h47.418l-0.003-10.304 15.306 16z" />
    </svg>
</div>

<div class="topW">
    <div class="container">
        <div class="top clearfix ">
            <div class="top_call">
                @foreach($toppers as $topper)
                    <p><img src="{{asset('backend/assets/images/topper/')}}/{{$topper->icon1 }}"/>{{ $topper->itext1}}</p>

                <a rel="nofollow" href="mailto:info@sunnyquick.com"><img src="{{asset('backend/assets/images/topper/')}}/{{$topper->icon2 }}" />{{ $topper->itext2 }}</a>
            </div>
            <div class="attr-nav">
                <div class="search"><a href="#" rel="nofollow"><i></i></a></div>
            </div>

            <ul class="top_lan">
                <li><a href="index.html"><img src="{{asset('backend/assets/images/topper/')}}/{{$topper->flag1 }}" alt="English" /><span>{{$topper->ftext1}}</span></a></li>
                <li><a href="http://es.sunnyquick.com/"><img src="{{asset('backend/assets/images/topper/')}}/{{$topper->flag2 }}" alt="español" /><span>{{$topper->ftext2}}</span></a></li>
                <li><a href="http://ar.sunnyquick.com/"><img src="{{asset('backend/assets/images/topper/')}}/{{$topper->flag3 }}" alt="العربية" /><span>{{$topper->ftext3}}</span></a></li>

            </ul>
            @endforeach


        </div>
    </div>

</div>
<div class="top-search">
    <div class="container">
        <div class="top-searchW">
            <div class="input-group">
                <h4>what are you looking for?</h4>
                <div class="header_search clearfix">
                    <input name="search_keyword" onkeydown="javascript:enterIn(event);" type="text" onfocus="if(this.value=='Search'){this.value='';}" onblur="if(this.value==''){this.value='Search';}" target="_blank" class="search_main form-control" placeholder="Search">
                    <input type="submit" class="search_btn btn_search1" value="">

                </div>
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
</div>
<script>
    $(".attr-nav").each(function(){
        $(".search > a", this).on("click", function(e){
            e.preventDefault();
            $(".top-search").slideToggle();
        });
    });
    $(".input-group-addon.close-search").on("click", function(){
        $(".top-search").slideUp();
    });
</script>
<script type="text/javascript">
    $(function(){
        /*============================
        @author:flc
        @time:2014-02-11 18:16:09
        @qq:3407725
        ============================*/
        $(".select").each(function(){
            var s=$(this);
            var z=parseInt(s.css("z-index"));
            var dt=$(this).children("dt");
            var dd=$(this).children("dd");
            var _show=function(){dd.slideDown(200);dt.addClass("cur");s.css("z-index",z+1);};
            var _hide=function(){dd.slideUp(200);dt.removeClass("cur");s.css("z-index",z);};
            dt.click(function(){dd.is(":hidden")?_show():_hide();});
            dd.find("a").click(function(){dt.html($(this).html());_hide();});
            $("body").click(function(i){ !$(i.target).parents(".select").first().is(s) ? _hide():"";});
        })
    })
</script>

<header class="large">
    <div class="container">
        <div class="large_m clearfix">

            <div id="logo" class="clearfix">
                @foreach($logos as $logo)
                <a href="{{route('font.index')}}" title="Guangzhou Sunnyquick Aluminium Manufacturing Co.,Ltd." class="logo_img"><h1><img alt="Guangzhou Sunnyquick Aluminium Manufacturing Co.,Ltd." src="{{asset('backend/assets/images/logo/')}}/{{$logo->logo }}" /></h1></a>
                    @endforeach
            </div>
            <div id='cssmenu' class="clearfix">
                <ul>

                    @foreach($menus as $menu)
                        @if($menu->submenu->isEmpty())
                            <li class="has-sub"><a href="{{route($menu->route)}}">{{$menu->name}}</a></li>

                   @else
                            <li class="has-sub"> <a href="@if($menu->route){{route($menu->route)}}@else#@endif">{{$menu->name}}</a>
                        <ul>

                            @foreach($menu->submenu as $submenu)
                                <li class=""><a class="" href="{{route($submenu->route)}}">{{$submenu->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @endif
                        @endforeach
                </ul>

            </div>

        </div>
    </div>
</header>