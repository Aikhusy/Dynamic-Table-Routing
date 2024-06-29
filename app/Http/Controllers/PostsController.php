<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    protected $route = [];
    /**
     * Display a listing of the resource.
     */

    protected $posts;

    // Konstruktor dengan Dependency Injection
    public function __construct(Post $posts)
    {
        $this->posts = $posts;
        $this->route['create'] = 'posts.create';
        $this->route['edit'] = 'posts.edit';
        $this->route['update'] = 'posts.update';
        $this->route['store'] = 'posts.store';
        $this->route['delete'] = 'posts.destroy';
    }
    public function index()
    {
        //
        $column = $this->posts->getForms();
        $route = $this->route;
        $items = Post::all();
        return view('layouts.pages.indexTable', compact('route', 'column', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $forms = $this->posts->getForms();
        $title = "Create Post";

        $route = $this->route;

        return view('layouts.pages.formCreate', compact('forms', 'title', 'route'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $post = $request->all();
        Post::create($post);
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $forms = $this->posts->getForms();
        $title = "Edit Post";  // Ganti judul jika diperlukan
        $route = $this->route;
        $items = $post;
        return view('layouts.pages.formEdit', compact('forms', 'title', 'route', 'items'));
    }


    /**
     * Update the specified resource in storage.
     */
    /**
 * Update the specified resource in storage.
 */
public function update(Request $request, Post $post)
{
    // Validasi data input dari form jika diperlukan
    // Ambil data dari form input
    $postData = $request->all();
    
    // Update data post yang sesuai dengan $post
    $post->update($postData);

    // Redirect ke halaman index post setelah update berhasil
    return redirect()->route('posts.index');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // Hapus satu post berdasarkan instance Post yang diterima dari route
        $post->delete();

        // Redirect ke halaman index post setelah penghapusan
        return redirect()->route('posts.index');
    }
}
