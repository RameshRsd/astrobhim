<?php

namespace App\Http\Controllers\server;

use App\Slide;
use App\onGoingTraining;
use App\User;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SlideController extends ServerController
{

    public function addSlide(Request $request){
        if($request->isMethod('get')){
            $this->data('viewMessage',Contact::paginate(5));
            $this->data('title',$this->title('add slide'));
            return view($this->pagePath.'addSlide',$this->data);
        }

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'title' => 'required|unique:slides,title',
                'description' => 'required|max:500',


            ]);


            if (($request->hasFile('image'))) {
                $image = $request->file('image');
                $ext = $image->getClientOriginalExtension();
                $imageName = md5(microtime()) . '.' . $ext;
                $uploadPath = public_path('images/slide/');
                if ($image->move($uploadPath, $imageName)) {
                    $data['image'] = $imageName;
                }
                


            }

            $data['title'] = $request->title;
            $data['description'] = $request->description;
                    if (Slide::create($data)) {
                return redirect()->route('addSlide')->with('success', 'slide was inserted successfully');
            }

        }

    }
    public function addOnGoingTraining(Request $request){
        if($request->isMethod('get')){
            $this->data('viewMessage',Contact::paginate(5));
            $this->data('userData', User::all());
            $this->data('title',$this->title('add slide'));
            return view($this->pagePath.'addOnGoingTraining',$this->data);
        }

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'training_name' => 'required',


            ]);


            if (($request->hasFile('training_photo'))) {
                $training_photo = $request->file('training_photo');
                $ext = $training_photo->getClientOriginalExtension();
                $imageName = md5(microtime()) . '.' . $ext;
                $uploadPath = public_path('images/TrainingPhoto/');
                if ($training_photo->move($uploadPath, $imageName)) {
                    $data['training_photo'] = $imageName;
                }
                


            }

            $data['training_name'] = $request->training_name;
            $data['training_location'] = $request->training_location;
            $data['user_id'] = $request->user_id;
                    if (onGoingTraining::create($data)) {
                return redirect()->route('addOnGoingTraining')->with('success', 'slide was inserted successfully');
            }

        }

    }
}
