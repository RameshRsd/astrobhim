<?php

namespace App\Http\Controllers\server;

use App\Category;
use App\Gallery;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GalleryController extends ServerController
{

    public function addGallery(Request $request)
    {
        if ($request->isMethod('get')) {
            $this->data('userData', User::all());
            $this->data('SlideData', Gallery::all());
            $this->data('catData', Category::all());
            $this->data('title', $this->title('Slide Controll'));
            return view($this->pagePath . 'addGallery', $this->data);
        }
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'title' => 'required',
                'cat_id' => 'required',
            ]);


            if (($request->hasFile('photo'))) {
                $gallery_photo = $request->file('photo');
                $ext = $gallery_photo->getClientOriginalExtension();
                $imageName = md5(microtime()) . '.' . $ext;
                $uploadPath = public_path('images/Slide/');
                if ($gallery_photo->move($uploadPath, $imageName)) {
                    $data['photo'] = $imageName;
                }


            }

            $data['title'] = $request->title;
            $data['cat_id'] = $request->cat_id;
            $data['description'] = $request->description;

            if (Gallery::create($data)) {
                return redirect()->route('addGallery')->with('success', 'Gallery Record Created Successfully');
            }
        }
    }
    public function editSlide($id)
    {
        $this->data('userData', User::all());
        $this->data('CatData', Category::all());
        $this->data('updateSlideData',Gallery::findOrFail($id));
        return view($this->pagePath.'editGallery',$this->data);
    }

    public function updateSlide(Request $request, $id)
    {
        $galleries = Gallery::findOrFail($id);
        $galleries->title = \request('title');
        $galleries->cat_id = \request('cat_id');
        $galleries->description = \request('description');

        if($request->hasFile('photo')){
            if (is_file($galleries->photo) && file_exists($galleries->photo)){
                unlink($galleries->photo);
            }
            $filename = time().'.'.request()->file('photo')->getClientOriginalExtension();

            $filename = md5(microtime()) . '.' . $filename;

            request()->file('photo')->move('public/images/Slide/',$filename);
            $galleries->photo =$filename;
        }
        $galleries->save();
        return redirect()->route('addGallery')->with('success', 'Record Updated');
    }
    public function destroy($id)
    {
        $addSlide = Gallery::findOrFail($id);

        $addSlide->delete();

        return redirect()->route('addGallery')->with('success', 'Record Deleted');

    }
}
