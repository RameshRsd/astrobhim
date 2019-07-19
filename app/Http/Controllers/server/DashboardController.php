<?php

namespace App\Http\Controllers\server;

use App\About;
use App\Introduction;
use App\User;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends ServerController
{

    public function index()
    {
        $this->data('title', $this->title('Admin Dashboard'));
        $this->data('guruji', Introduction::firstOrNew(['user_id'=>Auth::user()->id]));
        $this->data('contactInfo', About::firstOrNew(['id'=>'1']));
        return view($this->pagePath . 'dashboard', $this->data);

    }
    public function introPost(Request $request){
        $uid = Auth::user()->id;
//        dd(\request()->all());
//        dd($uid);
        $this->validate(\request(), [
            'name' => 'required',
            'title' => 'required',
            'intro' => 'required',
        ]);

        $guruji = Introduction::firstOrNew(['user_id'=>$uid]);
        $guruji->name = \request('name');
        $guruji->title = \request('title');
        $guruji->intro = \request('intro');
        $guruji->number = \request('number');
        if ($request->hasFile('photo')){
            if (is_file($guruji->photo) && file_exists($guruji->photo)){
                unlink($guruji->photo);
            }
            $filename = time().'.'.request()->file('photo')->getClientOriginalExtension();

            $filename = md5(microtime()) . '.' . $filename;

            request()->file('photo')->move('public/images/staff/',$filename);
            $guruji->photo =$filename;
        }

        $guruji->save();
        return redirect()->back()->with('success', 'Record Updated');
    }
    public function introPostContact(Request $request){
//        dd(\request()->all());
//        dd($uid);
        $this->validate(\request(), [
            'office_name' => 'required',
            'office_address' => 'required',
            'office_mob' => 'required|max:22',
            'office_email' => 'required',
        ]);

        $guruji = About::firstOrNew(['id'=>'1']);
        $guruji->office_name = \request('office_name');
        $guruji->office_address = \request('office_address');
        $guruji->office_mob = \request('office_mob');
        $guruji->office_tel = \request('office_tel');
        $guruji->office_email = \request('office_email');

        $guruji->save();
        return redirect()->back()->with('success', 'Record Updated');
    }

}
