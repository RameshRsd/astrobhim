<?php

namespace App\Http\Controllers\server;

use App\Contact;
use App\Service;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ServiceController extends ServerController
{

    public function addService (Request $request){
        if($request->isMethod('get')){
            $this->data('viewMessage',Contact::paginate(5));
            $this->data('userData', User::all());
            $this->data('serviceData', Service::paginate(5));
            $this->data('title',$this->title('add Service Details'));
            return view($this->pagePath.'addService',$this->data);
        }

        if ($request->isMethod('post')) {
            $this->validate($request, [
                'name' => 'required',

            ]);

            $data['name'] = $request->name;
            $data['description'] = $request->description;
                    if (Service::create($data)) {
                return redirect()->route('addService')->with('success', 'Service details inserted successfully');
            }

        }

    }
    public function editService($id){
        $services = Service::findOrFail($id);
        $this->data('viewMessage',Contact::paginate(5));
        $this->data('title',$this->title('Edit Service Details'));
        return view($this->pagePath.'editService',$this->data,compact('services'));

    }
    public function updateService(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $service = Service::findOrFail($id);
        $service->name = \request('name');
        $service->description = \request('description');

        $service->save();
        return redirect()->route('addService')->with('success', 'Record Updated');

    }

    public function destroy($id)
    {
        $addTraining = Service::findOrFail($id);

        $addTraining->delete();

        return redirect()->route('addService')->with('success', 'Record Deleted');

    }
    }
