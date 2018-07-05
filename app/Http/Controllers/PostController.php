<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Image;

class PostController extends Controller
{
    public function viewPost()
    {
        $post = Post::orderBy('id_post','asc')->get();
        return view('user.post.view', ['post' => $post]);
    }

    // add post
    public function getFormTambahPost()
    {
        $post = Post::get();
        return view('user.post.add', compact('post'));
    }
    public function setFormTambahPost(Request $request)
    {
        $this->validate($request, [
            'judul_post' => 'required',
            'image_post' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'isi_post' => 'required',
        ]);
        $input['id'] = Auth::User()->id;
        $input['image_post'] = time().'.'.$request->image_post->getClientOriginalExtension();
        $request->image_post->move(public_path('image_post'), $input['image_post']);
        $input['judul_post'] = $request->judul_post;
        $input['isi_post'] = $request->isi_post;
        Post::create($input);


        return back()
            ->with('success','Post submitted successfully.');
    }
    //end - add post

    //update post
    public function editFormTambahPost($id_post)
    {
        $post = Post::find($id_post);
        return view('user.post.edit', compact('post'));
    }

    public function updateFormTambahPost(Request $request, $id_post)
    {
        $this->validate($request, [
            'judul_post' => 'required',
            'image_post' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'isi_post' => 'required',
        ]);

        $post = Post::find($id_post);
        $post->judul_post = $request->input('judul_post');
        $post['image_post'] = time().'.'.$request->image_post->getClientOriginalExtension();
        $request->image_post->move(public_path('image_post'), $post['image_post']);
        $post->isi_post = $request->input('isi_post');
        $post->save();
        //dd($post);
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
