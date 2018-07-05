<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Comment;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Image;

class CommentController extends Controller
{
    public function viewComment()
    {
        $post = Post::orderBy('id','asc')->get();
        return view('user.post.view', ['post' => $post]);
    }
}
