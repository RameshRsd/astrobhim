@extends($masterPath.'.master.master')

@section('content')



    <section id="news-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="left-sidebar" style="padding:0 10px; border: 1px solid #c3c3c2; margin-bottom: 20px; background-color: #fff;">
                        <h4  style="padding:5px; background-color: orangered; color:#fff;">About Us</h4>
                        <div class="panel-group category-products" id="accordian" style="text-align: center;">
                            <div class="col-md-12 col-sm-12 col-xs-12" id="Introduction" style="text-align: center; padding-top:20px;">
                                <h5 style="margin:0; padding:0 0 10px; text-align: left;">1. About Me (Mr. Bhim)</h5>
                                <span>
                                @foreach($aboutGuru as $Guruvalue)
                                        {!! $Guruvalue->intro !!}
                                    @endforeach
                                </span>
                                <hr>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12" id="Mission" style="text-align: left; padding-top:20px;">
                                <h5 style="margin:0; padding:0 0 10px; text-align: left;">2. Identification</h5>
                                <table border="1" style="margin-bottom:30px; max-width:100%;" class="table table-bordered table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th> Astrology & Yoga Counselling Service Center</th>
                                    </tr>
                                    <tr>
                                        <th style="padding-bottom: 10%;">Address/Phone Numbers</th>
                                        <td>
                                            <table class="table table-bordered table-striped table-hover" style="margin-bottom: 0px;  max-width:100%; overflow: hidden;">
                                                <tr>
                                                    <td>Head Office</td>
                                                    <td>
                                                        <?php $contactDetails = \App\About::all() ?>
                                                        @foreach($contactDetails as $ContactValue)
                                                        {{$ContactValue->office_address}}
                                                        <br>
                                                        {{$ContactValue->office_mob}}
                                                        <br>
                                                        {{$ContactValue->office_email}}
                                                            @endforeach
                                                        <?php ; ?>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="padding-bottom: 10%;">Legal Registration</th>
                                        <td>
                                            <table class="table table-bordered table-striped table-hover" style="margin-bottom: 0px;  max-width:100%; overflow: hidden;">
                                                <tr>
                                                    <td>Company</td>
                                                    <td>
                                                        Kathmandu Metropolitan Office<br>
                                                        Regd No.: 2433<br>
                                                        Registration Date: 2069/09/27
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>PAN</td>
                                                    <td>
                                                        Inland Revenue Department(IRD)<br>
                                                        Registration Date: 2071/02/19
                                                        PAN NO. : 602156457
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12" id="Introduction" style="text-align: center; padding-top:20px;">
                                <h5 style="margin:0; padding:0 0 10px; text-align: left;">3. About Astrolgy</h5>
                                <span>
                                @foreach($aboutAstro as $Astro)
                                        {!! $Astro->intro !!}
                                    @endforeach
                                </span>
                                <hr>
                            </div>

                            <div style="clear:both;"></div>
                        </div>
                    </div>
                </div>
                {{--<div class="col-sm-3 col-xs-12">--}}
                    {{--@include($masterPath.'.partials.training')--}}
                {{--</div>--}}
            </div>
        </div>
    </section>

@endsection