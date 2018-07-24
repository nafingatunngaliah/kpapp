<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;
use App\Post;
use App\Slide;
use App\Ultah;
use App\Buletin;
use App\Galeri;
use Auth;
use App\Http\Requests;
use Illuminate\Database\Query\Builder;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

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
        $post = Post::orderBy('id','asc')->paginate(8);
        $post2 = Post::orderBy('created_at','asc')->paginate(3);
        $post3 = Post::orderBy('created_at', 'desc')->first();
        $slide = Slide::get();
        $buletin = Buletin::get();
        $ultah = Ultah::whereRaw("DATE_FORMAT(tgl_bd, '%m-%d') = DATE_FORMAT(now(),'%m-%d')")
        ->orWhereRaw("DATE_FORMAT(tgl_bd,'%m-%d') = '02-29' and DATE_FORMAT(tgl_bd, '%m') = '02' AND 
        LAST_DAY(NOW()) = DATE(NOW())")
        ->selectRaw('nama, tgl_bd')
        ->get();
        $kategori = DB::table('post')
                     ->select(DB::raw('count(id_post) as jumlah, kategori_post'))
                     ->groupBy('kategori_post')
                     ->orderBy('jumlah')
                     ->get();
        $target = DB::table('post')->select('judul_post','isi_post','image_post')->where('kategori_post','Target')->get();
        $galeri = Galeri::orderBy('created_at','asc')->paginate(8);
        return view('index',['post' => $post, 'slide' => $slide, 'post2' => $post2, 'post3' => $post3,'ultah' => $ultah, 'kategori' => $kategori, 'target' => $target, 'galeri' => $galeri, 'buletin' => $buletin]);
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
        $slide->save();
        return redirect()->back();
    }

    
}
