<?php

namespace App\Http\Controllers\server;

use App\Jobs;
use App\News;
use App\Slide;
use App\Contact;
use App\Trainings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TrainingsController extends ServerController
{

    public function addTraining(Request $request){
        if($request->isMethod('get')){
            $this->data('viewMessage',Contact::paginate(5));
            $this->data('title',$this->title('add Training Details'));
            return view($this->pagePath.'addTraining',$this->data);
        }

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'training_title' => 'required',

            ]);
            


            if (($request->hasFile('upload'))) {
                $image = $request->file('upload');
                $ext = $image->getClientOriginalExtension();

                $imageName = (microtime()) . '.' . $ext;
                $uploadPath = public_path('images/Training/');
                if ($image->move($uploadPath, $imageName)) {
                    $data['image'] = $imageName;
                }
            }

            $data['training_title'] = $request->training_title;
            $data['training_content'] = $request->training_content;
            $data['training_duration'] = $request->training_duration;
            $data['training_cost'] = $request->training_cost;
                    if (Trainings::create($data)) {
                return redirect()->route('addTraining')->with('success', 'Training details inserted successfully');
            }

        }

    }
    }
