@extends($masterPath.'.master.master')

@section('content')

    <section class="Gallery" style="margin:20px 0;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" style="background-color: #fff; padding: 10px;">
                    <h4 style="padding:5px; background-color: orangered; color:#fff;">Blogs</h4>
                    @foreach($blogData as $newsValue)
                        <div class="col-sm-3 col-xs-12 news-feed">
                            {{--<div class="product-image-wrapper">--}}
                            <div class="single-products" >
                                <div class="productinfo text-center">
                                    <a href="{{url('Blogs/'.$newsValue->id.'/'.$slugs= str_slug($newsValue->news_title))}}">
                                        <img src="{{url('public/images/news/'.$newsValue->news_photo)}}" style="width:100%; padding:5px;" alt="" />
                                        <h5>{{$newsValue->news_title}}</h5>
                                    </a>
                                </div>
                                {{--</div>--}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>



@endsection