<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use App\User;
use App\Http\Controllers\Controller;
use Image;
use Auth;

class CommentController extends Controller
{
    public function viewDetailPost($id_post)
    {
        $post = Post::find($id_post);
        $post2 =Post::orderBy('created_at', 'desc')->take(6)->get();
        $komen = Comment::where('id_post','=',$id_post)->get();
        $kategori = DB::table('post')
                     ->select(DB::raw('count(id_post) as jumlah, kategori_post'))
                     ->groupBy('kategori_post')
                     ->orderBy('jumlah')
                     ->get();
        return view('user.comment.view', ['post' => $post, 'komen' => $komen, 'post2' => $post2, 'kategori' => $kategori]);
    }

    public function addComment(Request $request, $id_post)
    {
        $komen['id'] = Auth::User()->id;
        $komen['id_post']= $id_post;
        $komen['komentator'] = $request->komentator;
        $komen['komentar'] = $request->komentar;
        
        //dd($komen);
        Comment::create($komen);
        return back()
            ->with('success','Post submitted successfully.');
    }

}
