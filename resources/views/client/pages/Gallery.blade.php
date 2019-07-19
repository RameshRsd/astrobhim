@extends($masterPath.'.master.master')

@section('content')

    <section class="Gallery" style="margin:20px 0;">
        <div class="container">
            <div class="row">
                <div style="background-color: #fff; padding-top:10px;">
                    <div style="clear: both;"></div>
                    <div class="col-sm-12">
                        <h4  style="padding:5px; background-color: orangered; color:#fff;">Gallery</h4>
                    </div>
                    @foreach($CatData as $cat)
                        @if(count($cat->galleries)>0)
                        <div class="col-sm-12">
                            <h5 class="btn btn-primary btn-xs">{{$cat->name}} ({{count($cat->galleries)}})</h5>
                        </div>
                        @endif
                        <div style="clear: both;"></div>
                        @foreach($SlideData as $value)
                            @if($value->cat_id == $cat->id)
                                <div class="col-sm-3">
                                    <a href="{{url('public/images/Slide/'.$value->photo)}}" target="_blank">
                                        <div class="col-sm-12" style="padding:10px; background-color: lightgray; border: 1px solid #d2d0d0; margin-bottom: 10px;">
                                            <div style="height: 150px; overflow: hidden;">
                                                <img src="{{url('public/images/Slide/'.$value->photo)}}" style="width: 100%;">
                                            </div>
                                            <div>
                                                <h5 style="color: #043c68; display:block; width: 100%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{$value->title}}</h5>
                                                <i class="fa fa-briefcase" aria-hidden="true"></i> {{$value->category->name}}<br>
                                                <i style="color:Green;">By :</i> <span style="color:purple;">admin</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                        <div style="clear: both;"></div>
                    @endforeach
                    <div style="padding:20px; background-color: orangered;">
                        <a href="https://www.facebook.com/bhimsen.counsellor/photos_all" target="_blank" style="color:#fff;">View More Photos in Facebook Gallery</a>
                    </div>

                </div>
                </div>
            {{--<div class="row">--}}
                {{--@foreach($SlideData as $key=>$value)--}}
                    {{--<div class="col-sm-4">--}}
                        {{--<div style="padding:10px; background-color: #fff; border: 1px solid #d2d0d0; margin-bottom: 10px;">--}}
                            {{--<img src="{{url('public/images/Slide/'.$value->photo)}}" style="width:100%; height: 180px;" onclick="openModal();currentSlide({{++$key}})" class="hover-shadow cursor">--}}
                            {{--<h2 style="font-size: 20px; color: #043c68;">{{$value->title}}</h2>--}}
                            {{--<i class="fa fa-briefcase" aria-hidden="true"></i> {{$value->category->name}}<br>--}}
                            {{--<i style="color:Green;">Post By :</i> <span style="color:purple;">admin</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endforeach--}}
            {{--</div>--}}

            {{--<div id="myModal" class="modal">--}}
                {{--<span class="close cursor" onclick="closeModal()">&times;</span>--}}
                {{--<div class="modal-content">--}}

                    {{--@foreach($SlideData as $key=>$value)--}}
                    {{--<div class="mySlides">--}}
                        {{--<div class="numbertext">{{++$key}} / {{count($SlideData)}}</div>--}}
                        {{--<img src="{{url('public/images/Slide/'.$value->photo)}}" style="width:100%; height: 600px;">--}}
                    {{--</div>--}}
                    {{--@endforeach--}}

                    {{--<a class="prev" onclick="plusSlides(-1)">&#10094;</a>--}}
                    {{--<a class="next" onclick="plusSlides(1)">&#10095;</a>--}}

                    {{--<div class="caption-container">--}}
                        {{--<p id="caption"></p>--}}
                    {{--</div>--}}

                    {{--@foreach($SlideData as $key=>$value)--}}
                    {{--<div class="column">--}}
                        {{--<img class="demo cursor" src="{{url('public/images/Slide/'.$value->photo)}}" style="width:100%" onclick="currentSlide({{++$key}})" alt="{{$value->title}}">--}}
                    {{--</div>--}}
                        {{--@endforeach--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </section>



@endsection