<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;
use App\Post;
use App\Slide;
use Auth;
use App\Http\Requests;
use Illuminate\Database\Query\Builder;
use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    public function index()
    {
    	$post = Post::orderBy('id','asc')->get();
        $slide = Slide::get();
        //dd($slide);
        return view('index',['post' => $post, 'slide' => $slide]);

    }

    public function editSlider($id_slide)
    {
        $slide = Slide::find($id_slide);
        return view('edit-slider', compact('slide'));
    }

    public function setSlider(Request $request, $id_slide)
    {
        $this->validate($request, [
            'image_slide' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'judul_slide' => 'required',
            'isi_slide' => 'required',
        ]);
        $slide = Slide::find($id_slide);
        $slide->judul_slide = $request->input('judul_slide');
        $slide->isi_slide = $request->input('isi_slide');
        if ($request->hasFile('image_slide')) {    
            $image_slide = $request->file('image_slide');
            $image_slide_name = time() . '.' .$image_slide->getClientOriginalExtension();
            Image::make($image_slide)->resize(1850, 1250)->save( public_path('/image_slide/' . $image_slide_name ));
            $slide->image_slide = $image_slide_name;
        }
        //dd($slide);
        $slide->save();
        
        //dd($slide);

        //Post::updated($post);
        return redirect()->back();
    }
}
