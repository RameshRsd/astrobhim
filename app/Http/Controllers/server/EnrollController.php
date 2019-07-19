<?php

namespace App\Http\Controllers\server;

use App\Category;
use App\Contact;
use App\NepalDistrict;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EnrollController extends ServerController
{
    public function viewCategories(Request $request){
        if($request->isMethod('get')) {
            $this->data('viewMessage',Contact::paginate(5));
            $this->data('districtData',NepalDistrict::all());
            $this->data('viewCat',Category::orderBy('name','ASC')->get());
            $this->data('title',$this->title('Application Details'));

            return view($this->pagePath.'viewCategories',$this->data);
        }
        if($request->isMethod('post')) {

            $this->validate($request, [
                'name' => 'required',

            ]);


            $data['name'] = $request->name;
            $data['description'] = $request->description;

            if (Category::create($data)) {
                return redirect()->route('viewCategories')->with('success', 'Category Created successfully');
            }
        }
    }
    public function editCategories($id)
    {
        $this->data('viewMessage',Contact::paginate(5));
        $this->data('editCategories',Category::findOrFail($id));
        return view($this->pagePath.'editCategories',$this->data);
    }
    public function updateCategories($id)
    {
        $category = Category::findOrFail($id);
        $category->name = \request('name');
        $category->description = \request('description');

        $category->save();
        return redirect()->route('viewCategories')->with('success', 'Record Updated');

    }
//    public function destroy($id)
//    {
//        $viewApplication = Application_Form::findOrFail($id);
//
//        $viewApplication->delete();
//
//        return redirect()->route('viewApplication')->with('success', 'Applicantion Record Deleted');
//
//    }

}
