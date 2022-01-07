<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\footer;
use App\Http\Requests\StoreblogRequest;
use App\Http\Requests\UpdateblogRequest;
use Illuminate\Support\Facades\DB;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function index_fr()
    {
        $blogs = DB::table('blogs')->get();
        $footer = Footer::all();
        return view('frontend.Blog',[
            'blogs'=> $blogs,
            'footer' => $footer,
        ]);
    }

/**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    // public function show(Blogs $blogs)
    // {
    //     //  return view('frontend.content-blog', [
    //     //     "blog" => $blog]);

    //      return view('frontend.contentBlog', ["blogs" => $blogs]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreblogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreblogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
       
        return view('frontend.contentBlog', ['blog' => $blog]);
        
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateblogRequest  $request
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateblogRequest $request, blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(blog $blog)
    {
        //
    }
}
