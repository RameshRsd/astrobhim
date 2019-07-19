@section('main_footer')
    <footer id="footer"><!--Footer-->

        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="single-widget">
                        <div class="companyinfo">
                            <h2><span>about</span>-Astro-Guru</h2>
                            <p>
                                <?php $Introdesc = \App\About::all(); ?>
                                @foreach($Introdesc as $aboutIntrodesc)
                                    {!! str_limit($aboutIntrodesc->introduction,250) !!}
                                    @endforeach
                            </p>
                            <a href="{{route('Profile')}}">Read More</a>
                        </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-widget">
                            <h2>About Our Site</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="{{route('contact')}}" class="<?php if(request()->segment('1') =='contact'){ echo 'active' ;}?>">Contact Us</a></li>
                                <li><a href="{{route('Profile')}}" class="<?php if(request()->segment('1') =='Profile'){ echo 'active' ;}?>">About Us</a></li>
                                <li><a href="{{route('Blogs')}}" class="<?php if(request()->segment('1') =='Blogs'){ echo 'active' ;}?>">Blog</a></li>
                                <li><a href="{{route('Gallery')}}" class="<?php if(request()->segment('1') =='Gallery'){ echo 'active' ;}?>">Gallery</a></li>
                                <li><a href="{{route('Horoscope')}}" class="<?php if(request()->segment('1') =='Horoscope'){ echo 'active' ;}?>">Horoscope</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="single-widget">
                            <h2>Other links</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="{{route('aboutAstrology')}}" class="<?php if(request()->segment('1') =='aboutAstrology'){ echo 'active' ;}?>">About Astrology</a></li>
                                <li><a href="{{route('aboutYoga')}}" class="<?php if(request()->segment('1') =='aboutYoga'){ echo 'active' ;}?>">About Yoga</a></li>
                                <li><a href="{{route('aboutSpa')}}" class="<?php if(request()->segment('1') =='aboutSpa'){ echo 'active' ;}?>">About SPA</a></li>
                                <li><a href="{{route('aboutMeditation')}}" class="<?php if(request()->segment('1') =='aboutMeditation'){ echo 'active' ;}?>">About Meditation</a></li>
                                <li><a href="{{route('DateConvertor')}}" class="<?php if(request()->segment('1') =='DateConvertor'){ echo 'active' ;}?>">Date Convertor</a></li>
                                @if(Auth::check())
                                    <li><a href="{{url('login')}}" style="background-color: green; color:#fff; padding:5px; width: 100px;">Dashboard</a></li>
                                    @else
                                <li><a href="{{route('login')}}">Admin Login</a></li>
                                    @endif

                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="single-widget">
                            <h2>Contact Information</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <?php $officeIntro = \App\About::all() ?>
                                @foreach($officeIntro as $aboutIntro)
                                    <li><a href="#">{{$aboutIntro->office_name}}</a></li>
                                    <li><a href="#">{{$aboutIntro->office_address}}</a></li>
                                    <li><a href="#">Email: {{$aboutIntro->office_email}}</a></li>
                                    <li><a href="#">@if(isset($aboutIntro->office_tel)){{$aboutIntro->office_tel}}, {{$aboutIntro->office_mob}}@else{{$aboutIntro->office_mob}}@endif</a></li>
                                @endforeach
                                <?php ; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left"> Astrology & Yoga Counselling Service Center © {{date('Y')}} All rights reserved.</p><p class="pull-right">Designed by <span><a href="http://geniusservice.com.np" target="_blank" href="/">Genius Service Nepal</a></span>
                    </p>
                </div>
            </div>
        </div>

    </footer><!--/Footer-->
@stop