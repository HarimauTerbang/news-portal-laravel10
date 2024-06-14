<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::latest()->paginate(12);

        return view('dashboard.posts.index', [
            'title' => 'BERITA',
            'posts' => $post,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'title' => 'TAMBAH BERITA'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'title' => 'required|max:100',
        'slug' => 'required|unique:posts',
        'description' => 'required|max:255',
        'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        'body' => 'required',
    ]);

    // Check if an image file is uploaded
    if ($request->hasFile('image')) {
        $file = $request->file('image');

        // Generate a unique name for the file
        $nama_file = time() . "_" . $file->getClientOriginalName();

        // Define the upload path
        $tujuan_upload = 'public/post-images';

        // Move the uploaded file to the destination path
        $file->move($tujuan_upload, $nama_file);

        // Save the file name in the validated data array
        $validatedData['image'] = $nama_file;
    } else {
        return redirect()->back()->withErrors(['image' => 'Gambar wajib diisi!']);
    }

    // Check if the slug is provided
    if ($request->input('slug') == null) {
        return redirect()->back()->withErrors(['slug' => 'Slug tidak boleh kosong, ketik ulang judul untuk mengisi slug']);
    }

    // Create a new post with the validated data
    Post::create($validatedData);

    // Redirect with success message
    return redirect('/dashboard/posts')->with('success', 'New Post has been added!');
}


    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'title' => 'BERITA',
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post:: destroy($post->id);
        return redirect ('/dashboard/posts')->with('success', 'Post has been deleted!');
    }
}
