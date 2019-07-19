@extends($masterPath.'.master.master')

@section('content')

    <section class="Gallery" style="margin:20px 0;">
        <div class="container">
            <div class="row">
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
                <div style="clear: both;"></div>

                <div class="col-sm-3">
                    <div style="background-color: #fff; padding: 10px;">
                    <h4 style="padding:5px; background-color: orangered; color:#fff;">Filter Services</h4>
                        <div id="accordion">
                            <form action="" method="post">
                                {{csrf_field()}}
                                <input type="text" name="name" class="form-control" placeholder="Insert Your Query">
                                <div style="clear: both; margin:10px 0;"></div>
                                <select name="id" id="" class="form-control">
                                    <option value="">[Select Service]</option>
                                    @foreach($FilterService as $key=>$Value)
                                        <option value="{{$Value->id}}">{{$Value->name}}</option>
                                    @endforeach
                                </select>
                                <div style="clear: both; margin:10px 0;"></div>
                                <button type="submit" class="form-control" style="background-color: orangered; color:#fff;">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div style="background-color: #fff; padding: 10px;">
                        <h4 style="padding:5px; background-color: orangered; color:#fff;">Our Services</h4>
                        <div id="accordion" class="col-sm-8">
                            @foreach($serviceData as $key=>$newsValue)
                                <div class="card" style="margin-bottom: 10px;">
                                    <div class="card-header" id="heading{{$newsValue->id}}">
                                        <h5 class="mb-0">
                                            <button class="btn" data-toggle="collapse" data-target="#collapse{{$newsValue->id}}" aria-expanded="true" aria-controls="collapse{{$newsValue->id}}">
                                                {{$newsValue->name}} <span class="fa fa-angle-down"></span>
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapse{{$newsValue->id}}" class="collapse" aria-labelledby="heading{{$newsValue->id}}" data-parent="#accordion">
                                        <div class="card-body">
                                            {!! $newsValue->description !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                                <div class="card-header" id="headingOther">
                                    <h5 class="mb-0" style="background-color: orangered; padding:5px; text-align: center;">
                                            <p style="color:#fff; text-align: center;">
                                                Finally the above questions answers should be given in this Astrology service center.<hr>
                                                <i  style="color:#fff; font-size: 20px;"><span style="font-size: 30px;">"</span>Baydic Karma Also Available<span style="font-size: 30px;">"</span></i>
                                            </p>
                                    </h5>
                                </div>
                                <div class="card-header" id="headingOther">
                                    <h5 class="mb-0">
                                            <p style="color:orangered; font-size: 25px; text-align: center;">
                                                विशिष्ट व्राह्मणद्धारा ग्रह पुजा, रुद्रि, नारायण पुजा आदि कर्म गराईन्छ ।
                                            </p>
                                    </h5>
                                </div>
                                <div class="col-sm-4 col-sm-offset-4">
                                {{$serviceData->render()}}
                            </div>
                            <div style="clear:both;"></div>

                        </div>
                        <div class="col-sm-4" style="border: 1px solid orangered; padding:5px;">
                            <img src="{{url('public/images/Astro/kundali.png')}}" alt="" style="width: 100%; text-align: center; margin-bottom: 5px;">
                            <img src="{{url('public/images/Yoga/01.jpg')}}" alt="" style="width: 100%; text-align: center; margin-bottom: 5px;">
                            <img src="{{url('public/images/Spa/01.jpg')}}" alt="" style="width: 100%; text-align: center; margin-bottom: 5px;">
                            <img src="{{url('public/images/Yoga/hatha yoga.png')}}" alt="" style="width: 100%; text-align: center; margin-bottom: 5px;">
                            <img src="{{url('public/images/Yoga/02.jpg')}}" alt="" style="width: 100%; text-align: center; margin-bottom: 5px;">
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection