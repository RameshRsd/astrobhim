<?php

namespace App\Http\Controllers\server;

use App\About;
use App\Page;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FrontMenuController extends ServerController
{

    public function addAbout()
    {
            $this->data('aboutData', About::all());
            $this->data('title', $this->title('Front Menu Controll'));
            return view($this->pagePath . 'Front-Menu.addAbout', $this->data);
    }
    public function editMission($id)
    {
        $this->data('aboutData',About::findOrFail($id));
        return view($this->pagePath.'Front-Menu.editMission',$this->data);
    }
    public function updateMission(Request $request, $id)
    {
        $about = About::findOrFail($id);
        $requestData = \request()->all();
        $about->update($requestData);
        return redirect()->route('addAbout')->with('success', 'Record Updated');
    }
    public function otherPages(){

        $this->data('pageData', Page::all());
        $this->data('title', $this->title('Front Menu Controll'));
        return view($this->pagePath . 'Front-Menu.otherPages', $this->data);
    }
    public function editPage ($id)
    {
        $this->data('pageData',Page::findOrFail($id));
        return view($this->pagePath.'Front-Menu.editPage',$this->data);
    }
    public function updatePage(Request $request, $id)
    {
        $about = Page::findOrFail($id);
        $requestData = \request()->all();
        $about->update($requestData);
        return redirect()->route('otherPages')->with('success', 'Record Updated');
    }

    public function editIntro($id)
    {
        $this->data('aboutData',About::findOrFail($id));
        return view($this->pagePath.'Front-Menu.editIntro',$this->data);
    }
    public function updateIntro(Request $request, $id)
    {
        $about = About::findOrFail($id);
        $requestData = \request()->all();
        $about->update($requestData);
        return redirect()->route('addAbout')->with('success', 'Record Updated');
    }
    public function editGoal($id)
    {
        $this->data('aboutData',About::findOrFail($id));
        return view($this->pagePath.'Front-Menu.editGoal',$this->data);
    }
    public function updateGoal(Request $request, $id)
    {
        $about = About::findOrFail($id);
        $requestData = \request()->all();
        $about->update($requestData);
        return redirect()->route('addAbout')->with('success', 'Record Updated');
    }

}
