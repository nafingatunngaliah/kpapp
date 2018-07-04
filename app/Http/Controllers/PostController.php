<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function viewPost()
    {
        // $post = Post::orderBy('id','asc')->get();
        // //dd($post);
        // return view('user.post.view', ['post'=>$post]);
        return view('user.post.view');
    }

    // menambah post
    public function addPost()
    {
        return view('user.post.add');
    }
    public function setFormTambahPost(Request $request)
    {
        
        // $post = new Post();
        // $post->judul_post = $request->input('judul_post');
        // $post->image_post = $request->input('image_post');
        // $post->isi_post = $request->input('isi_post');
        dd($post);
        $post->save();

        return view('user.post.view');
    }
}
