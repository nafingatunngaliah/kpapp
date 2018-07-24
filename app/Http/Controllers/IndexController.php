<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;
use App\Post;
use App\Slide;
use App\Ultah;
use App\Buletin;
use Auth;
use App\Http\Requests;
use Illuminate\Database\Query\Builder;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Spatie\GoogleCalendar\Event;

class IndexController extends Controller
{
    public function index()
    {
        $post = Post::orderBy('id','asc')->paginate(8);
        $post2 = Post::orderBy('id','asc')->get();

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

        return view('index',['post' => $post, 'slide' => $slide, 'post2' => $post2, 'ultah' => $ultah, 'kategori' => $kategori, 'target' => $target, 'buletin' => $buletin]);
    }


}
