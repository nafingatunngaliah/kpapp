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
            'deskripsi' => 'required',
            
        ]);
        $input['nama'] = $request->nama;
        $input['tgl_bd'] = $request->tgl_bd;
        $input['deskripsi'] = $request->deskripsi;
        dd($input);
        //Ultah::create($input);
        return back()
            ->with('success','Ultah submitted successfully.');
    }
    //end - add post

    //update post
    public function editFormTambah($id_post)
    {
        $post = Post::find($id_post);
        return view('user.post.edit', compact('post'));
    }

    public function updateFormTambahPost(Request $request, $id_post)
    {
        $this->validate($request, [
            'kategori_post' => 'required',
            'judul_post' => 'required',
            'image_post' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'isi_post' => 'required',
        ]);
        $post = Post::find($id_post);
        $post->kategori_post = $request->input('kategori_post');
        $post->judul_post = $request->input('judul_post');
        $post->isi_post = $request->input('isi_post');
        if ($request->hasFile('image_post')) {    
            $image_post = $request->file('image_post');
            $image_post_name = time() . '.' .$image_post->getClientOriginalExtension();
            Image::make($image_post)->resize(1850, 1350)->save( public_path('/image_post/' . $image_post_name ));
            $post->image_post = $image_post_name;
        }
        $post->save();
        
        //dd($post);

        //Post::updated($post);
        return redirect()->back();
    }

    //end - update post

    //delete post
    public function deletePost($id_post)
    {
        Post::destroy($id_post);
        return back();
    }
}
