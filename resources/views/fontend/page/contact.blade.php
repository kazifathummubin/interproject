@extends('fontend.layout.contactapp')
@section('pageTitle','contact')
@section('content')
    <div class="breadcrumbW clearfix">
        <div class="container">
            <div class="breadcrumb clearfix">
                <h2 class="title">Contact Us</h2>
                <div class="bread-right">
                    <a class="home" href="index.html">Home</a>
                    <i></i><a href="about-us_d1.html"><h2>contact Us</h2></a>
                </div>
            </div>
        </div>
    </div>
    @foreach($contacts as $contact)
    <div class="main_boxW">
    <div class="container">
        <div class="contact_web">
            <div class="main_boxW_t"><span>{{$contact->title}}</span></div>
            <div class="contact clearfix">
                <div class="con-main col-sm-6 col-xs-12 clearfix"><span style="font-family:Tahoma;font-size:14px;line-height:2;"><strong>Get In Touch</strong></span><br />
                    <span style="font-family:Tahoma;font-size:14px;line-height:2;">

                        {!! $contact->getintouch  !!}
                    </span><br />
                    <div class="con-main col-sm-6 col-xs-12 clearfix"><span style="font-family:Tahoma;font-size:14px;line-height:2;"><strong>Get In Touch</strong></span><br />
                    <span style="font-family:Tahoma;font-size:14px;line-height:2;">
                        {!! $contact->factory !!}
                    </span><br />
                        <div class="con-main col-sm-6 col-xs-12 clearfix"><span style="font-family:Tahoma;font-size:14px;line-height:2;"><strong>Get In Touch</strong></span><br />
                    <span style="font-family:Tahoma;font-size:14px;line-height:2;">

                           {!! $contact->hours !!}


                    </span><br /></div>
                    </div>
                </div>

                @endforeach


                {!! Form::open(['method'=>'post','route'=>'technology.store','id'=>'email_form' , 'files'=>true,'class'=>'form-group']) !!} <br>
                <div class="message col-sm-6 col-xs-12 clearfix">
                    <em>SEND A MESSAGE</em>
                    <p>You can contact us any way that is convenient for you. We are available 24/7 via fax, email or telephone.</p>
                    <ul>
                        <li>
                    {!! Form::text('msg_email', null, ['class'=>'meInput', 'placeholder'=>'techtitle']) !!}<br>
                        </li>
                        <li>
                    {!! Form::text('msg_title', null,['class'=>'meInput','placeholder'=>'technology']) !!}<br>
                        </li>
                        <li>
                    {!! Form::text('msg_tel',null, ['class'=>'meInput','id'=>'image58', 'placeholder'=>'techphoto']) !!}<br>
                        </li>
                        <li>
                    {!! Form::textarea('Message',null, [ 'class'=>'meInput','maxlength'=>'3000','id'=>'meText', 'placeholder'=>'Message']) !!}<br>
                        </li>
                    </ul>
                    <br><br>
                    <p>If you have questions or suggestions,please leave us a message,we will reply you as soon as we can!</p>
                    {!! Form::button('Create technology', ['class'=>'btn_1','type'=>'submit']) !!}
                </div>
                    {!! Form::close() !!}


                {{--<form action="https://www.sunnyquick.com/inquiry/addinquiry" method="post" name="email_form" id="email_form">--}}
                    {{--<div class="message col-sm-6 col-xs-12 clearfix">--}}
                        {{--<em>SEND A MESSAGE</em>--}}
                        {{--<p>You can contact us any way that is convenient for you. We are available 24/7 via fax, email or telephone.</p>--}}
                        {{--<ul>--}}
                            {{--<li>--}}
                                {{--<input type="text" name="msg_email" id="msg_email" class="meInput" placeholder="Email" />--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<input type="text" name="msg_title" class="meInput" placeholder="Subject" />--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<input type="text" name="msg_tel" class="meInput" placeholder="Tel" />--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<textarea id="meText" placeholder="Message" maxlength="3000" name="msg_content" style="color:#808080;" class="meText"></textarea>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        {{--<p>If you have questions or suggestions,please leave us a message,we will reply you as soon as we can!</p>--}}
                        {{--<button type="submit" class="btn_1">Submit<i class="fa fa-send"></i></button>--}}

                    {{--</div>--}}
                {{--</form>--}}
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>
</div>

<div class="cont_sitemap"><div class="container"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.566533552888!2d113.32679191488405!3d23.440020584743277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3402e086f482252f%3A0xe2f8a0243360c13d!2z5Lit5Zu95bm_5Lic55yB5bm_5bee5biC6Iqx6YO95Yy65pyd6Ziz6LevIOmCruaUv-e8lueggTogNTEwODkw!5e0!3m2!1szh-CN!2sph!4v1522401145662" width="1170" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>
@endsection