<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     protected $posts;

    // Konstruktor dengan Dependency Injection
    public function __construct(Post $posts)
    {
        $this->posts = $posts;
    }
    public function index()
    {
        //
        return view('layouts.pages.indexTable');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $forms=$this->posts->getForms();
        $title="Create Post";
        return view('layouts.pages.formCreate',compact('forms','title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Posts $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posts $posts)
    {
        //
    }
}
