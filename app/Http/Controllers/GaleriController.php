<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;
use App\Galeri;
use App\Album;
use Auth;
use App\Http\Requests;
use Illuminate\Database\Query\Builder;
use App\Http\Controllers\Controller;

class GaleriController extends Controller
{
    public function index(Request $request)
    {
        $album1 = DB::table('album')
                ->select('id_album','nama_album')
                ->get();
        $galeri = DB::table('album')
                ->select('album.nama_album','galeri.image_galeri', 'galeri.nama','album.id_album')
                ->join('galeri','galeri.id_album','=','album.id_album')
                ->get();
        //$galeri = Galeri::groupBy('nama_album')->get();
        return view('user.galeri.manage-galeri', ['album1' => $album1, 'galeri' => $galeri]);
    }
    // add post
    public function setFormTambahAlbum(Request $request)
    {
        $this->validate($request, [          
            'nama_album' => 'required',
        ]);
        

        $input['nama_album'] = $request->nama_album;
        Album::create($input);
        return back()
            ->with('success','Galeri created successfully.');
    }

    public function getFormTambah($id_album){
        Galeri::get();
        $album = Album::find($id_album);
        return view('user.galeri.add-galeri', ['album' => $album]);
    }

    public function setFormTambah(Request $request, $id_album)
    {
        $this->validate($request, [
            'image_galeri' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'nama' => 'required',      
        ]);
                
        $input['id_album'] = $id_album;
        $input['nama'] = $request->nama;
        if ($request->hasFile('image_galeri')) {
            $image_galeri = $request->file('image_galeri');
            $image_galeri_name = time() . '.' .$image_galeri->getClientOriginalExtension();
            Image::make($image_galeri)->resize(1850, 1350)->save( public_path('/image_galeri/' . $image_galeri_name ));
            $input['image_galeri'] = $image_galeri_name;
           // $input->save();
        }
        Galeri::create($input);


        return back()
            ->with('success','Galeri created successfully.');
    }
    //end - add post

    //delete post
    public function deletePost($id_galeri)
    {
        Galeri::destroy($id_galeri);
        return back();
    }
}
