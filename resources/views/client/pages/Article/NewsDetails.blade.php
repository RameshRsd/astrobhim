@extends($masterPath.'.master.master')

@section('content')

    <div class="news-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-12 col-xs-12 article" style="background-color: #fff; margin:20px 0; padding-bottom: 20px;">
                    <h2>{{$article->news_title}}</h2>
                        <img src="{{url('public/images/news/'.$article->news_photo)}}" style="width:100%; height:auto; padding:5px;" alt="" />
                        <a  style="color:Blue;"><i class="fa fa-calendar" aria-hidden="true"></i> <span style="color:Red;">{{$article->created_at }}</span></a>
                        | <a style="color:Blue;"><i class="fa fa-user" aria-hidden="true"></i> Author :
                            <span style="color:Red;">
                                {{$article->user->name}}
                            </span>
                            | <span class="fa fa-eye"></span> Views ({{$article->views}})
                             | <span class="fa fa-comment-o"></span> Comments ({{count($article->comments)}})
                        </a>
                        <hr>
                        <span>
                            {!! $article->news_description !!}
                        </span>
                        <div style="clear: both; margin:10px 0; border-top:1px solid lightgray; "></div>
                        <div class="col-sm-12">
                            <h4  style="padding:5px; background-color: orangered; color:#fff;">Leave Your Reply</h4>
                            <form action="{{url('commentPost')}}" method="post">
                                {{csrf_field()}}
                                @if(Auth::check())
                                <input type="hidden" class="form-control" name="name" value="{{Auth::user()->name}}">
                                <input type="hidden" class="form-control" name="user_id" value="{{Auth::user()->id}}">
                                @else
                                <input type="text" class="form-control" name="name" placeholder="Your Name">
                                <input type="hidden" class="form-control" name="user_id" value="0">
                                @endif
                                <textarea type="text" id="content" class="form-control" name="comment_content" placeholder="Your Comment"></textarea>
                                <input type="hidden" class="form-control" name="news_id" value="{{$article->id}}">
                                <button type="submit" class="btn btn-primary">Post</button>
                            </form>
                        </div>
                        <div style="clear: both; margin:10px 0; border-top:1px solid lightgray; "></div>
                        <div class="col-sm-12">
                            <h4  style="padding:5px; background-color: orangered; color:#fff;">Recents Comments</h4>
                            @foreach($commentData as $comment)
                                @if($comment->news_id == $article->id)
                            <div style="margin-top:10px; background-color: lightgray; padding:5px 5px 10px 5px;">
                                <div style="float: left; padding:5px;">
                                    @if($comment->user->username == 'visitor')
                                    <img src="{{url('public/images/staff/default-logo.png')}}" alt="" class="img-circle" style="width:50px; height: 50px; border: 1px solid grey;">
                                    @else
                                    <img src="{{url('public/images/staff/').'/'.$comment->user->image}}" alt="" class="img-circle" style="width:50px; height: 50px; border: 1px solid grey;">
                                        @endif
                                </div>
                                <div>
                                    <b>{{$comment->name}}</b> <i>Commented at {{$comment->created_at}}</i><br>
                                    <span>{!! $comment->comment_content !!}</span>
                                </div>
                                <div style="clear: both; margin:10px"></div>

                            </div>

                                @endif
                            @endforeach
                        </div>

                    </div>
                </div>
                <div style="clear:both;"></div>
                <div class="col-sm-12">
                    <div class="col-sm-12" style="background-color: #fff; margin:20px 0; padding: 10px;">
                        <h4  style="padding:5px; background-color: orangered; color:#fff;">Related Blogs</h4>
                        @foreach($newsData as $related)
                            @if($related->id == $article->id)
                                @else
                        <div class="col-sm-3">
                            <div style="margin-bottom: 10px;">
                                <a href="{{url('Blogs/'.$related->id.'/'.$slugs= str_slug($related->news_title))}}">
                                <img src="{{url('public/images/news/').'/'.$related->news_photo}}" alt="" class="img-responsive" style="height: 150px;">
                                <h5>{{$related->news_title}}</h5>
                                </a>
                                <i class="fa fa-user" aria-hidden="true"></i>
                                    <span style="color:Red;">
                                {{$related->user->user_type}}
                            </span>
                                    | <span class="fa fa-eye"></span> ({{$related->views}})
                                    | <span class="fa fa-comment-o"></span> ({{count($related->comments)}})

                            </div>
                        </div>
                            @endif
                            @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection