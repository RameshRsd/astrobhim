@extends($masterPath.'.master.master')

@section('content')

    <section class="Gallery" style="margin:20px 0;">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="recommended_items" style="background-color: #fff; padding:5px; border: 1px solid lightgrey;">
                        <h5 class="title text-center" style="padding:5px; background-color: orangered; color:#fff;">Date Convertor</h5>
                        <!-- Start of nepali date converter -->
                        <script type="text/javascript"> <!--
                            var nc_dc_width = 'responsive';
                            var nc_dc_height = 190;
                            var nc_dc_api_id = 40820190116366; //-->
                        </script>
                        <script type="text/javascript" src="https://www.ashesh.com.np/nepali-date/dcnew.js"></script><div id="ncwidgetlink">Powered by © <a href="https://www.ashesh.com.np/nepali-date-converter.php" id="nclink" title="Nepali date converter" target="_blank">nepali date converter</a>
                     </div>
                    <!-- End of nepali date converter -->
                </div>
                </div>
                <div class="col-sm-5">
                    <div class="recommended_items" style="background-color: #fff; padding:5px; border: 1px solid lightgrey;"><!--recommended_items-->
                        <h5 class="title text-center" style="padding:5px; background-color: orangered; color:#fff;">Calender</h5>
                        <hr>
                        <!-- Start of nepali calendar widget -->
                        <script type="text/javascript"> <!--
                            var nc_width = 'responsive';
                            var nc_height = 185;
                            var nc_api_id = 70220190116888; //-->
                        </script>
                        <script type="text/javascript" src="https://www.ashesh.com.np/calendarlink/nc.js"></script><div id="ncwidgetlink">Powered by © <a href="https://www.ashesh.com.np/nepali-calendar/" id="nclink" title="Nepali calendar" target="_blank">nepali calendar</a>
                        </div>
                        <!-- End of nepali calendar widget -->
                    </div><!--/recommended_items-->

                </div>
                {{--<div class="col-sm-4">--}}
                    {{--<div class="recommended_items" style="background-color: #fff; padding:5px; border: 1px solid lightgrey;"><!--recommended_items-->--}}
                        {{--<h5 class="title text-center" style="padding:5px; background-color: orangered; color:#fff;">Preeti to Unicode</h5>--}}
                        {{--<hr>--}}
                        {{--<!-- Start of nepali calendar widget -->--}}
                        {{--<iframe src="https://www.ashesh.com.np/preeti-unicode/linkapi.php?api=641112j010" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" style="border:none; overflow:hidden; width:516px; height:400px;" allowtransparency="true">--}}
                        {{--</iframe><br><span style="color:gray; font-size:8px; text-align:left">© <a href="https://www.ashesh.com.np/preeti-unicode/" title="Preeti to unicode converter" target="_top" style="text-decoration:none; color:gray;">Preeti to unicode</a></span>                        </div>--}}
                        {{--<!-- End of nepali calendar widget -->--}}
                    {{--</div><!--/recommended_items-->--}}

                {{--</div>--}}
        </div>
    </section>



@endsection