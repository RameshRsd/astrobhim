@extends($masterPath.'.master.master')

@section('content')



    <section id="news-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="left-sidebar" style="padding:0 10px; border: 1px solid #c3c3c2; margin-bottom: 20px; background-color: #fff;">
                        @foreach($aboutYoga as $details)
                            <h4  style="padding:5px; background-color: orangered; color:#fff;">{{$details->name}}</h4>
                            <div class="col-sm-12" style="float: left; margin-bottom: 10px; border: 1px solid lightgrey; padding:10px;">
                                <img src="{{url('public/images/Yoga/03.jpg')}}" alt="" style="width: 100%; text-align: center;">
                            </div>
                        <div style="clear:both;"></div>
                            <div class="col-sm-8" id="accordian">
                                {!! $details->intro !!}
                            </div>
                            <div class="col-sm-4">
                                <div class="col-sm-12" style="float: left; margin-bottom: 10px; border: 1px solid lightgrey; padding:10px;">
                                    <img src="{{url('public/images/Yoga/01.jpg')}}" alt="" style="width: 100%; text-align: center;">
                                </div>
                                <div class="col-sm-12" style="float: left; margin-bottom: 10px; border: 1px solid lightgrey; padding:10px;">
                                    <img src="{{url('public/images/Yoga/02.jpg')}}" alt="" style="width: 100%; text-align: center;">
                                </div>
                                <div class="col-sm-12" style="float: left; margin-bottom: 10px; border: 1px solid lightgrey; padding:10px;">
                                    <img src="{{url('public/images/Yoga/Ashtanga-Yoga-Primary-Series-Chart.png')}}" alt="" style="width: 100%; text-align: center;">
                                </div>
                                <div class="col-sm-12" style="float: left; margin-bottom: 10px; border: 1px solid lightgrey; padding:10px;">
                                    <img src="{{url('public/images/Yoga/hatha yoga.png')}}" alt="" style="width: 100%; text-align: center;">
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                        @endforeach
                    </div>
                </div>
                {{--<div class="col-sm-3 col-xs-12">--}}
                    {{--@include($masterPath.'.partials.training')--}}
                {{--</div>--}}
            </div>
        </div>
    </section>

@endsection