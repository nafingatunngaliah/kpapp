<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use Auth;
use App\Http\Requests;
use Illuminate\Database\Query\Builder;
use App\Http\Controllers\Controller;
class PostController extends Controller
{
    public function viewPost(Request $request)
    {
        $post =Post::orderBy('judul_post', 'desc')->paginate(2);
        $post2 =Post::orderBy('created_at', 'desc')->take(6)->get();
        $kategori = DB::table('post')
                     ->select(DB::raw('count(id_post) as jumlah, kategori_post'))
                     ->groupBy('kategori_post')
                     ->orderBy('jumlah')
                     ->get();
        //dd($kategori);
        return view ('user.post.view', ['post' => $post, 'post2' => $post2, 'kategori' => $kategori]);
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
            'kategori_post' => 'required',
            'judul_post' => 'required',
            'image_post' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'isi_post' => 'required',
        ]);
        $input['id'] = Auth::User()->id;
        $input['kategori_post'] = $request->kategori_post;
        $input['judul_post'] = $request->judul_post;
        $input['isi_post'] = $request->isi_post;
        

        if ($request->hasFile('image_post')) {
            $image_post = $request->file('image_post');
            $image_post_name = time() . '.' .$image_post->getClientOriginalExtension();
            Image::make($image_post)->resize(1850, 1350)->save( public_path('/image_post/' . $image_post_name ));
            $input['image_post'] = $image_post_name;
           // $input->save();
        }
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
