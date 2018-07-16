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

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::orderBy('id','asc')->get();
        $post2 = Post::orderBy('id','asc')->get();
        $target = Post::orderBy('id','asc')->get();
        $slide = Slide::get();   
        return view('index',['post' => $post, 'slide' => $slide, 'post2' => $post2, 'target' => $target]);
    }

    public function getTarget()
    {
        $target = DB::table('post')->select('judul_post','isi_post','image_post')->where('kategori_post','Target')->get();
        return view('index', compact('post'));
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
