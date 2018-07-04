<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Image;

class PostController extends Controller
{
    public function viewPost()
    {
        $post = Post::orderBy('id','asc')->get();
        // //dd($post);
        // return view('user.post.view', ['post'=>$post]);
        return view('user.post.view', ['post' => $post]);
    }

    // menambah post
    public function getFormTambahPost()
    {
        $post = Post::get();
        return view('user.post.add', compact('post'));
    }
    public function setFormTambahPost(Request $request)
    {
        
        // $post = new Post();
        // $post->judul_post = $request->input('judul_post');
        // $post->image_post = $request->input('image_post');
        // $post->isi_post = $request->input('isi_post');
        // dd($post);
        // $post->save();

        // return redirect()->back();
        $this->validate($request, [
            'judul_post' => 'required',
            'image_post' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'isi_post' => 'required',
        ]);


        $input['image_post'] = time().'.'.$request->image_post->getClientOriginalExtension();
        $request->image_post->move(public_path('image_post'), $input['image_post']);


        $input['judul_post'] = $request->judul_post;
        $input['isi_post'] = $request->isi_post;
        Post::create($input);


        return back()
            ->with('success','Post submitted successfully.');
    }
}
