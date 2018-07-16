<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;
use App\Post;
use App\Ultah;
use Auth;
use App\Http\Requests;
use Illuminate\Database\Query\Builder;
use App\Http\Controllers\Controller;
class UltahController extends Controller
{
    public function index()
    {
        $ultah = Ultah::get();
        return view('user.ultah.manage', compact('ultah'));
    }

    // add post
    public function getFormTambah()
    {
        $ultah = Ultah::get();
        return view('user.ultah.add', compact('ultah'));
    }

    public function setFormTambah(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'tgl_bd' => 'required',
        ]);
        $input['nama'] = $request->nama;
        $input['deskripsi'] = $request->deskripsi;
        $input['tgl_bd'] =  date('Y-m-d', strtotime(str_replace('-', '/', $request->tgl_bd)));
        //$input['tgl_bd'] = $request->tgl_bd;
        
        //dd($input);
        Ultah::create($input);
        return back()
            ->with('success','Ultah submitted successfully.');
    }
    //end - add post

    //update post
    public function editFormTambah($id_bd)
    {
        $ultah = Ultah::find($id_bd);
        return view('user.ultah.edit', compact('ultah'));
    }

    public function updateFormTambah(Request $request, $id_bd)
    {
        $this->validate($request, [
            'nama' => 'required',
            'tgl_bd' => 'required',
        ]);
        $ultah = Ultah::find($id_bd);
        $ultah->nama = $request->input('nama');
        $ultah->deskripsi = $request->input('deskripsi');
        $ultah->tgl_bd = date('Y-m-d', strtotime(str_replace('-', '/', $request->input('tgl_bd')))); 
        //dd($ultah);
        $ultah->save();
        
        //dd($post);

        //Post::updated($post);
        return redirect()->back();
    }

    //end - update post

    //delete post
    public function delete($id_bd)
    {
        Ultah::destroy($id_bd);
        return back();
    }
}
