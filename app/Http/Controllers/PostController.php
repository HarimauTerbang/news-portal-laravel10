<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest();

        if(request('search')){
            //cari berdasarkan judul
            $posts->where('title', 'like', '%' . request('search') . '%')
            //cari berdasarkan isi body
            ->orWhere('body', 'like', '%' . request('search') . '%');
        }
        
        return view('posts', [
            'title' => 'BERITA',
            'posts' => $posts->paginate(6),
        ]);
    }

    public function show(Post $post)
    {
        return view('post',[
            'title'=>'BERITA',
            'post'=> $post
        ]);
    }
}
