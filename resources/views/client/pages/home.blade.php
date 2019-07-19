@extends($masterPath.'.master.master')

@section('content')


	<section id="sub-buttom-section">
		<div class="container">
			<div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <div class="col-sm-12" style="background-color: #fff; padding:5px; border: 1px solid lightgrey; margin-bottom: 10px;">
                            <div class="recommended_items"><!--recommended_items-->
                                <!-- Start of nepali patro badge -->
                                <script type="text/javascript"> <!--
                                    var nc_cb_width = 'responsive';
                                    var nc_cb_height = 100;
                                    var nc_cb_shadow = 'false';
                                    var nc_cb_api_id = 43820190116460; //-->
                                </script>
                                <script type="text/javascript" src="https://www.ashesh.com.np/nepali-calendar/widget/cb.js"></script><div id="ncwidgetlink">© <a href="https://www.ashesh.com.np/nepali-calendar/" id="nclink" title="Nepali calendar" target="_blank">nepali calendar</a></div>
                                <!-- End of nepali patro badge -->                            <!-- End of nepali calendar widget -->
                            </div>
                        </div><!--/recommended_items-->
                        <div class="col-sm-12" style="background-color: #fff; padding:5px; border: 1px solid lightgrey; margin-bottom: 10px;">
                            <div class="recommended_items"><!--recommended_items-->
                                <div class="list-group">
                                    <a href="#" class="list-group-item" style="background-color: orangered; color:#fff; ">
                                        List of Services
                                    </a>
                                    @foreach($serviceData as $services)
                                        @if($services->id ==15)
                                        <a href="#" class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i>
                                            {{$services->name}}
                                        </a>
                                        @else
                                        <a href="#" class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i>
                                            {{$services->name}}
                                        </a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div style="clear: both;">
                                <a href="{{url('Services')}}" class="btn" style="background-color: orangered; color:#fff;">View All</a>
                            </div>
                        </div><!--/recommended_items-->
                    </div>

                    <div class="col-sm-6 col-xs-12">
                        <div class="col-sm-12" style="padding:5px; background-color: #fff; border: 1px solid lightgrey;">
                            <!-- Start Responsive Slider BODY section -->
                            <div class="product-image-wrapper">
                            @if(count($SlideData)>0)

                                <div id="wowslider-container1">
                                    <div class="ws_images"><ul>
                                            @foreach($SlideData as $slideValue)
                                                <li><img src="{{url('public/images/Slide/'.$slideValue->photo)}}" title="{{$slideValue->title}}" id="wows1_0" style="overflow: hidden;">
                                                </li>
                                            @endforeach
                                        </ul></div>
                                    <div class="ws_shadow"></div>
                                </div>
                                <script type="text/javascript" src="{{url('public/wow/engine1/wowslider.js')}}"></script>
                                <script type="text/javascript" src="{{url('public/wow/engine1/script.js')}}"></script>

                            @else
                                <div id="wowslider-container1">
                                    <div class="ws_images"><ul>
                                            <li><img src="{{url('public/wow/data1/images/slide01.jpg')}}" title="" id="wows1_0"/>
                                                <span style="color:#fff;">Title</span>
                                            </li>
                                            <li><img src="{{url('public/wow/data1/images/slide02.jpg')}}" title="" id="wows1_1"/>
                                                <span style="color:#fff;">Title</span>
                                            </li>
                                            <li><img src="{{url('public/wow/data1/images/slide03.jpg')}}" title="" id="wows1_2"/>
                                                <span style="color:#fff;">Title</span>
                                            </li>
                                        </ul></div>
                                    <div class="ws_shadow"></div>
                                </div>
                                <script type="text/javascript" src="{{url('public/wow/engine1/wowslider.js')}}"></script>
                                <script type="text/javascript" src="{{url('public/wow/engine1/script.js')}}"></script>
                            @endif
                        <!-- End Responsive Slider BODY section -->
                            </div>
                        </div>
                        <div class="col-sm-12" style="margin-top:10px; padding:5px; background-color: #fff; border: 1px solid lightgrey;">
                            <div class="product-image-wrapper">
                                <h5 class="title text-center" style="padding:5px; background-color: orangered; color:#fff;">Introduction about Guruji</h5>
                                <div class="productinfo text-center" style="padding:5px;">
                                    @foreach($guruji as $intro)
                                    <img src="{{url('public/images/staff/').'/'.$intro->photo}}" class=" img-circle" style="width:50%; border:1px solid #f3f3f3; padding:5px;" alt="" />
                                    <br>
                                    <p style="text-align: justify;">
                                        {!! $intro->intro !!}
                                    </p>
                                        <p style="text-align: left;">
                                            <br>
                                            Sincerely,<br>
                                            <b>{{$intro->name}} <i>({{$intro->title}})</i></b><br>
                                            <b>{{$intro->number}}</b>

                                        </p>
                                        @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 col-xs-12">
                        <div class="col-sm-12" style="background-color: #fff; padding:5px; border: 1px solid lightgrey;">
                            <div class="recommended_items"><!--recommended_items-->
                                <h5 class="title text-center" style="padding:5px; background-color: orangered; color:#fff;">Get Enquiry</h5>

                                <form action="{{url('contact')}}" method="post">
                                    @if(session('success'))
                                        <div class="col-sm-12" style="clear:both; margin-bottom: 5px;">
                                            <span class="alert alert-success"> {{session('success')}}</span>
                                        </div>
                                        <div style="clear:both;"></div>
                                    @endif
                                    @if($errors->any())
                                            <div class="col-sm-12" style="margin-bottom: 5px;">
                                                <ul  class="alert alert-danger">
                                                    @foreach($errors->all() as $error)
                                                        <li>{{$error}}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        <div style="clear:both;"></div>
                                    @endif

                                    {{csrf_field()}}
                                    <div class="col-sm-12" style="clear:both; margin-bottom: 5px;">
                                        <input type="text" class="form-control" name="name" placeholder="Full Name" required="required">
                                    </div>
                                    <div class="col-sm-12" style="clear:both; margin-bottom: 5px;">
                                        <input type="text" class="form-control" name="contact" placeholder="Mobile Number" required="required">
                                    </div>
                                    <div class="col-sm-12" style="clear:both; margin-bottom: 5px;">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address (Optonal)">
                                    </div>
                                    <div class="col-sm-12" style="clear:both; margin-bottom: 5px;">
                                        <textarea type="text" id="content" class="form-control" name="message" placeholder="Your Questions"></textarea>
                                    </div>
                                    <div class="col-sm-12" style=" margin-bottom: 5px;">
                                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                    </div>
                                </form>

                            </div><!--/recommended_items-->
                        </div>

                        <div class="col-sm-12" style="background-color: #fff; padding:5px; margin-top:10px; border: 1px solid lightgrey;">
                                <div class="recommended_items"><!--recommended_items-->
                                    <h5 class="title text-center" style="padding:5px; background-color: orangered; color:#fff;">Blogs</h5>
                                    @if(count($newsData)>0)
                                        @foreach($newsData as $newsValue)
                                            <div class="col-sm-12">
                                                {{--<div class="product-image-wrapper">--}}
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <a href="{{url('Blogs/'.$newsValue->id.'/'.$slugs= str_slug($newsValue->news_title))}}" target="_blank">
                                                            <img src="{{url('public/images/news/'.$newsValue->news_photo)}}" style="width:200px; height:100px; padding:5px;" alt="" />
                                                            <h5>{{$newsValue->news_title}}</h5>
                                                        </a>
                                                    </div>
                                                    {{--</div>--}}
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="col-sm-12 col-xs-12" style="text-align: center; margin-bottom: 10px;">
                                            <hr>
                                            <a href="{{url('Blogs')}}" class="btn" style="background-color: orangered; color:#fff;">View All</a>
                                        </div>
                                    @endif
                                </div>
                            </div><!--/recommended_items-->
                    </div>
                <div style="clear: both; margin-top:10px;"></div>
                <div class="col-sm-12">
                    <div style=" padding: 10px; margin-bottom: 10px; background-color:lightgray; border: 2px solid orangered;">
                        <div class="col-sm-4" style="text-align: center;">
                            <img src="{{url('public/images/Ganesh.png')}}" alt="" style="width: 85%;">
                        </div>
                        <div class="col-sm-4">
                            <p style="text-align: center; font-size: 20px; padding:10px;">
                                <b><img src="{{url('public/images/1265272.png')}}" alt="" style="width: 50px; height: 50px;"></b>
                                <img src="{{url('public/images/om.png')}}" alt="" style="width: 60px;">
                                <b><img src="{{url('public/images/1265272.png')}}" alt="" style="width: 50px; height: 50px;"></b><br>
                                <i>
                                    <span style="font-size: 30px; font-weight: bolder;">“</span>प्रत्यक्षं ज्योतिष शास्त्र चन्द्रर्को यन्त्र साक्षिणो<span style="font-size: 30px; font-weight: bolder;">”</span>,<br>
                                    योग ज्योतिष र जडिबुटीको त्रिवेणी,<br>
                                    शिव शक्ति ज्योतिष परामर्श सेवा केन्द्र<br>
                                    काठमाण्डौ, नेपाल
                                </i>
                            </p>
                        </div>
                        <div class="col-sm-4" style="text-align: center;">
                            <img src="{{url('public/images/Shiva.png')}}" alt="" style="width: 60%;">
                        </div>
                        <div style="clear: both;"></div>

                    </div>

                </div>
        </div>

	</section>
@endsection