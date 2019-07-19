<?php

namespace App\Http\Controllers\client;
use App\Category;
use App\Comment;
use App\Gallery;
use App\Introduction;
use App\Page;
use App\Service;
use App\User;
use App\NewsFeed;
use App\Contact;
use App\About;
use App\NepalDistrict;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class ApplicationController extends ClientController
{
    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $this->data('aboutData', About::all());
        $this->data('userData', User::all());
        $this->data('newsData', NewsFeed::orderBy('id', 'DESC')->limit(4)->get());
        $this->data('SlideData', Gallery::where('cat_id',2)->orderBy('id','DESC')->get());
        $this->data('serviceData', Service::orderBy('id','ASC')->limit(15)->get());
        $this->data('guruji', Introduction::all());
        $this->data('title', $this->title('Home Page'));
        return view($this->pagePath . 'home', $this->data);
    }
    public function About()
    {
        $this->data('aboutData', About::all());
        $this->data('userData', User::all());
        $this->data('newsData', NewsFeed::all());
        $this->data('title', $this->title('About Us'));
        return view($this->pagePath . 'About.About', $this->data);
    }
    public function aboutAstrology()
    {
        $this->data('aboutData', About::all());
        $this->data('userData', User::all());
        $this->data('newsData', NewsFeed::all());
        $this->data('aboutAstro', Page::where('id',1)->get());
        $this->data('title', $this->title('About Astrology'));
        return view($this->pagePath . 'About.aboutAstrology', $this->data);
    }
    public function aboutYoga()
    {
        $this->data('aboutData', About::all());
        $this->data('userData', User::all());
        $this->data('newsData', NewsFeed::all());
        $this->data('aboutYoga', Page::where('id',2)->get());
        $this->data('title', $this->title('About Yoga'));
        return view($this->pagePath . 'About.aboutYoga', $this->data);
    }
    public function aboutSpa()
    {
        $this->data('aboutData', About::all());
        $this->data('userData', User::all());
        $this->data('newsData', NewsFeed::all());
        $this->data('aboutSpa', Page::where('id',3)->get());
        $this->data('title', $this->title('About SPA'));
        return view($this->pagePath . 'About.aboutSpa', $this->data);
    }
    public function aboutMeditation()
    {
        $this->data('aboutData', About::all());
        $this->data('userData', User::all());
        $this->data('newsData', NewsFeed::all());
        $this->data('aboutSpa', Page::where('id',4)->get());
        $this->data('title', $this->title('About Meditation'));
        return view($this->pagePath . 'About.aboutMeditation', $this->data);
    }
    public function Profile()
    {
        $this->data('aboutData', About::all());
        $this->data('aboutGuru', Introduction::all());
        $this->data('aboutAstro', Page::where('id',1)->get());
        $this->data('userData', User::all());
        $this->data('newsData', NewsFeed::all());
        $this->data('title', $this->title('About Us'));
        return view($this->pagePath . 'Profile.Profile', $this->data);
    }
    public function Gallery()
    {
        $this->data('aboutData', About::all());
        $this->data('userData', User::all());
        $this->data('newsData', NewsFeed::all());
        $this->data('SlideData', Gallery::all());
        $this->data('CatData', Category::orderBy('name','ASC')->get());
        $this->data('title', $this->title('Gallery'));
        return view($this->pagePath . 'Gallery', $this->data);
    }
    public function Blogs()
    {
        $this->data('blogData', NewsFeed::orderBy('id','DESC')->get());
        $this->data('title', $this->title('Blogs'));
        return view($this->pagePath . 'Blogs', $this->data);
    }
    public function Services(Request $request)
    {
        if ($request->isMethod('get')) {
            $this->data('serviceData', Service::orderBy('id','ASC')->paginate(30));
            $this->data('title', $this->title('Service'));
            $this->data('FilterService', Service::orderBy('name','ASC')->get());
            return view($this->pagePath . 'Service', $this->data);
        }

        if ($request->isMethod('post')) {
            $requestData = Service::orderBy('id','DESC');
            if (\request('name')){
                $requestData->where('name','like','%'.\request('name').'%');
            }
            if (\request('id')){
                $requestData->where('id',\request('id'));
            }
            $serviceData = $requestData->paginate(5);
            $this->data('FilterService', Service::orderBy('id','DESC')->paginate(10));
            $this->data('title', $this->title('Filter Services'));
            return view($this->pagePath . 'Service', $this->data, compact('serviceData'));
        }

    }
    public function Horoscope ()
    {
        $this->data('title', $this->title('Blogs'));
        return view($this->pagePath . 'Horoscope ', $this->data);
    }
    public function DateConvertor()
    {
        $this->data('title', $this->title('Date Convertor'));
        return view($this->pagePath . 'DateConvertor', $this->data);
    }
    public function contact(Request $request)
    {
        if ($request->isMethod('get')) {
            $this->data('userData', User::all());
            $this->data('newsData', NewsFeed::all());
            $this->data('officeInfo', About::all());
            $this->data('title', $this->title('Contact Us'));
            return view($this->pagePath . 'contact', $this->data);
        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'name' => 'required',
                'contact' => 'required',
                'message' => 'required',
            ]);

            $data['name'] = $request->name;
            $data['contact'] = $request->contact;
            $data['email'] = $request->email;
            $data['message'] = ($request->message);

            if (Contact::create($data)) {
                return redirect()->back()->with('success', 'Successfully Sent Query');
            }
        }

    }
    public function BlogDetails($id)
    {
        $this->data('commentData', Comment::orderBy('id','DESC')->get());
        $this->data('userData', User::all());
        $this->data('newsData', NewsFeed::orderBy('id', 'DESC')->limit(8)->get());
        $this->data('article',NewsFeed::findOrFail($id));
        $this->data('title', NewsFeed::findOrFail($id)->news_title .' - Blogs - Astrology & Yoga Counselling Service Center');
        $this->data('description', NewsFeed::findOrFail($id)->news_description);
        $this->data('image', NewsFeed::findOrFail($id)->news_photo);
        $this->data('serviceData', Service::all());
        $title = NewsFeed::findOrFail($id)->news_title;
        $news = NewsFeed::findOrFail($id);
        $slugs = str_slug($title);
        NewsFeed::where('id',$news->id)->increment('views');

        return view($this->pagePath . 'Article.NewsDetails', $this->data, compact('slugs'));
    }
    public function commentPost(Request $request){
        if ($request->isMethod('get')) {
            return redirect()->back();
        }
        if ($request->isMethod('post')) {
            $this->validate(request(), [
                'comment_content' => 'required',
            ]);
            $data['comment_content'] = $request->comment_content;
            $data['user_id'] = $request->user_id;
            $data['news_id'] = $request->news_id;
            $data['name'] = $request->name;
            if (Comment::create($data)) {
                return redirect()->back()->with('success', 'Thank you for Comment !!');
            }

        }
    }


}