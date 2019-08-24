@foreach($footers as $footer)
<div class="footerW clearfix" style="background-image: url({{asset('backend/assets/images/footer')}}/{{ $footer->footerbackground}})">
    <div class="container in_par">
        <ul class="in_par_m clearfix">
            <li><img alt="partner"   src="{{asset('backend/assets/images/footer')}}/{{ $footer->footerimage1}}"         /></li>
            <li><img alt="partner"  src="{{asset('backend/assets/images/footer/')}}/{{ $footer->footerimage2}}"       /></li>
            <li><img alt="partner"  src="{{asset('backend/assets/images/footer/')}}/{{ $footer->footerimage3}}"        /></li>
            <li><img alt="partner"  src="{{asset('backend/assets/images/footer/')}}/{{ $footer->footerimage4}}"       /></li>
            <li><img alt="partner"  src="{{asset('backend/assets/images/footer/')}}/{{ $footer->footerimage5}}"       /></li>
            <li><img alt="partner"  src="{{asset('backend/assets/images/footer/')}}/{{ $footer->footerimage6}}"       /></li>
            <li><img alt="banner"  src="{{asset('backend/assets/images/footer/')}}/{{ $footer->footerimage7}}"        /></li>
            <li><img alt="banner" src="{{asset('backend/assets/images/footer/')}}/{{ $footer->footerimage8}}"        /></li>
        </ul>
    </div>
    <div class="fot-top clearfix">
        <div class="container">

            @foreach($logos as $logo)
                <a href="{{route('font.index')}}" title="Guangzhou Sunnyquick Aluminium Manufacturing Co.,Ltd." class="logo_img"><h1><img alt="Guangzhou Sunnyquick Aluminium Manufacturing Co.,Ltd." src="{{asset('backend/assets/images/logo/')}}/{{$logo->logo }}" /></h1></a>
            @endforeach
            <p>   {!! $footer->footertext !!}</p>
            <ul class="fot-share">
                @foreach($footers as $footer)
                <li><a href="https://www.facebook.com/" target="_blank" rel="nofollow"><img      src="{{asset('backend/assets/images/footer')}}/{{ $footer->footericon1}}"     /></a></li>
                <li><a href="https://www.google.com/" target="_blank" rel="nofollow"><img        src="{{asset('backend/assets/images/footer')}}/{{ $footer->footericon2}}"   /></a></li>
                <li><a href="https://www.twitter.com/" target="_blank" rel="nofollow"><img       src="{{asset('backend/assets/images/footer')}}/{{ $footer->footericon3}}"   /></a></li>
                <li><a href="https://www.linkedin.com/" target="_blank" rel="nofollow"><img      src="{{asset('backend/assets/images/footer')}}/{{ $footer->footericon4}}"   /></a></li>
                <li><a href="https://www.youtube.com/" target="_blank" rel="nofollow"><img       src="{{asset('backend/assets/images/footer')}}/{{ $footer->footericon5}}"   /></a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="footer_m row">
                <div id="right_column" class="fot_con col-sm-4 clearfix">
                    <section id="blockbestsellers" class="block products_block column_box">
                        <span class="fot_title"><em>get in touch</em><i class="column_icon_toggle icon-plus-sign"></i></span>
                        <div class="block_content toggle_content">
                            {!! $footer->text1 !!}

                        </div>
                    </section>
                </div>
                <div id="right_column" class="fot_nav col-sm-2 clearfix">
                    <section id="blockbestsellers" class="block products_block column_box">
                        <span class="fot_title"><em>need help</em><i class="column_icon_toggle icon-plus-sign"></i></span>
                        <div class="block_content toggle_content">
                            {!!  $footer->text2 !!}
                        </div>
                    </section>
                </div>
                <div id="right_column" class="fot_links col-sm-3 clearfix">
                    <section id="blockbestsellers" class="block products_block column_box">
                        <span class="fot_title"><em>Hot Tags</em><i class="column_icon_toggle icon-plus-sign"></i></span>
                        <div class="block_content toggle_content">
                            {!!  $footer->text3 !!}
                        </div>
                    </section>
                </div>
                <div id="right_column" class="fot_sub col-sm-3 clearfix">

                    <section id="blockbestsellers" class="block products_block column_box">
                        <span class="fot_title"><em>Subscribe</em><i class="column_icon_toggle icon-plus-sign"></i></span>
                        <div class="block_content toggle_content">
                            <p>{!! $footer->text4 !!}</p>
                            <div class="fsub-box">
                                <input type="text" id="user_email" name="keyword" class="fot_input" value="email address" onfocus="if(this.value=='email address'){this.value='';}" onblur="if(this.value==''){this.value='email address';}" />
                                <input onclick="add_email_list();" class="Submit" value="submit">
                            </div>
                            <script language="javascript" src="{{asset('template/js/subscribe.js') }}"></script>
                        </div>
                    </section>
                </div>
            </div>

        </div>
    </div>
    <div class="fot-botW">
        <div class="container">
            <div class="fot-bot clearfix">
                <p class="copy">{!! $footer->copyright !!}<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1273315272'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/z_stat.php%3Fid%3D1273315272%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script></p>
            </div>
        </div>
    </div>
</div>

@endforeach

<div id="online_qq_layer">
    <div id="online_qq_tab">
        <a id="floatShow" rel="nofollow" href="javascript:void(0);"><p>chat now</p><i class="fa fa-plus"></i></a>
        <a id="floatHide" rel="nofollow" href="javascript:void(0);"><p>live chat</p><i class="fa fa-minus"></i></a>
    </div>
    <div id="onlineService">
        <form action="/inquiry/addinquiry" method="post" name="email_form" id="email_form1">
            <div class="online_form">
                <ul>
                    <p>You can contact us any way that is convenient for you. We are available 24/7 via fax, email or telephone.</p>
                    <li>
                        <input type="text" name="msg_email" id="msg_email" class="meInput"  placeholder="Email *" />
                    </li>
                    <li>
                        <input type="text" name="msg_title" class="meInput"  placeholder="Subject *" />
                    </li>
                    <li>
                        <input type="text" name="msg_tel" class="meInput"  placeholder="Tel" />
                    </li>
                    <li>
                        <textarea id="meText" placeholder="Message *" name="msg_content" style="color: #999;" class="meText"></textarea>
                    </li>
                </ul>
                <span class="main-more button-ujarak"><input type="submit" value="Submit"></span>
            </div>
        </form>
    </div>
</div>

<a href="#top" class="back_top"></a>
<script type="text/javascript">
    $('#bootstrap-touch-slider').bsTouchSlider();
</script>
