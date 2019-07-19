@section('main_header')
    <header id="header"><!--header-->
            <div class="col-sm-12 slogan" style="position: absolute; z-index: 1111;">
                <p style="width:100%; text-align: center; color:#fff; font-weight: bolder; font-size: 15px;  padding:5px; margin:0 auto; background-color: #0000007a">
                    <b><img src="{{url('public/images/1265272.png')}}" alt="" style="width: 60px; float: left"></b>
                    <img src="{{url('public/images/om.png')}}" alt="" style="width: 60px;">
                    <b>&nbsp;&nbsp;&nbsp;<img src="{{url('public/images/1265272.png')}}" alt="" style="width: 60px; float:right;"></b><br><br>
                    <i>
                        <span style=" font-weight: bolder;">“</span>प्रत्यक्षं ज्योतिष शास्त्र चन्द्रर्को यन्त्र साक्षिणो,
                        योग ज्योतिष र जडिबुटीको त्रिवेणी,
                        शिव शक्ति ज्योतिष परामर्श सेवा केन्द्र,
                        काठमाण्डौ, नेपाल <span style=" font-weight: bolder;">”</span>
                    </i>
                </p>
            </div>
        <div class="logo-section" style="background-color: #000; padding:0 5px; position: relative;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <img src="{{url('public/images/cover.jpg')}}" class="img-responsive" alt="" style="width: 100%; text-align: center;">
                    </div>
                    <div style="clear: both;"></div>
                    <div class="logo pull-left col-sm-4">
                        <a href="{{url('/')}}"><img class="img-responsive" src="{{url('public/images/home/logo.png')}}" alt="" /></a>
                    </div>
                    <div class="col-sm-5">
                        <div class="contactinfo" style="margin-top: 10px;">
                            <ul class="nav nav-pills">
                                <?php $contactDetails = \App\About::all() ?>
                                @foreach($contactDetails as $contactINFO)
                                <li><a href="#"><i class="fa fa-phone"></i> {{$contactINFO->office_mob}}</a></li>
                                <li><a href="mail:{{$contactINFO->office_email}}"><i class="fa fa-envelope"></i> {{$contactINFO->office_email}}</a></li>
                                    @endforeach
                                <?php ; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="social-icons pull-right"  style="margin-top: 10px;">
                            <ul class="nav navbar-nav">
                                <li><a href="https://www.facebook.com/bhimsen.counsellor" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-xs-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu">
                            <ul class="nav navbar-nav collapse navbar-collapse ">
                                <li><a href="{{url('/')}}" class="<?php if(request()->segment('1') ==''){ echo 'active' ;} ?>" ><span class="glyphicon glyphicon-home"></span> HOME</a></li>
                                <li class="main-menu"><a href="{{route('Profile')}}" class="<?php if(request()->segment('1') =='Profile'){ echo 'active' ;} ?>" ><i class="fa fa-info-circle" aria-hidden="true"></i> ABOUT US</a>
                                </li>
                                <li class="main-menu"><a href="{{url('Services')}}" class="<?php if(request()->segment('1') =='Services'){ echo 'active' ;} ?>"><i class="fa fa-graduation-cap" aria-hidden="true"></i> SERVICES</a>
                                </li>
                                <li><a href="{{route('Gallery')}}" class="<?php if(request()->segment('1') =='Gallery'){ echo 'active' ;} ?>"><i class="fa fa-picture-o" aria-hidden="true"></i> GALLERY</a></li>
                                <li><a href="{{route('Blogs')}}" class="<?php if(request()->segment('1') =='Blogs'){ echo 'active' ;} ?>"><i class="fa fa-rss-square" aria-hidden="true"></i> BLOGS</a></li>
                                <li><a href="{{route('DateConvertor')}}" class="<?php if(request()->segment('1') =='DateConvertor'){ echo 'active' ;} ?>"><i class="fa fa-calendar" aria-hidden="true"></i> DATE CONVERTOR</a></li>
                                <li><a href="{{route('contact')}}" class="<?php if(request()->segment('1') =='contact'){ echo 'active' ;} ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i> CONTACT</a></li>

                                {{--@if(\Illuminate\Support\Facades\Auth::user())--}}
                                    {{--<li class="main-menu"><a class="btn btn-success btn-xs" style="color:#fff; padding:5px;">Online: {{Auth::user()->name}}</a>--}}
                                        {{--<ul class="sub-menu">--}}
                                            {{--<li><a href="{{route('admin')}}">Dashboard</a></li>--}}
                                            {{--<li><a href="{{route('logout')}}"><i class="fa fa-unlock"></i> Logout</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--@else--}}
                                    {{--<li><a>Login</a></li>--}}
                                {{--@endif--}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3 nepali-time">
                        <div class="search_box pull-right" style="height: 40px;">
                            <a href="" style="color:#fff;">
                                <iframe scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0" allowtransparency="true" src="https://www.ashesh.com.np/linknepali-time.php?time_only=no&font_color=fff&aj_time=yes&font_size=12&line_brake=0&bikram_sambat=0&nst=no&api=631118j229" width="100%" height="50"></iframe>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
    <div style="clear:both;"></div>
    <div id="space"></div>
@stop