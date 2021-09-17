<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;

class PostStoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $post = Models\post::all();
        $post = Models\post::with('category')->orderBy('id','DESC')->get();
        // return $post;
        // return view('pages/home_page',['data' => $post]);
        return view('test/PostStories/index',['post' => $post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Models\Category_posts::all();
        return view('test/PostStories/create')->with(compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post=new Models\post();
        $post->title = $request->title;
        $post->short_desc = $request->short_desc;
        $post->desc = $request->desc;
        $post->post_category_id = $request->post_category_id;

        if($request['image']){
            $image = $request['image'];
            $ext = $image->getClientOriginalExtension();
            $name = time().'_'.$image->getClientOriginalName();
            Storage::disk('public')->put($name,File::get($image));
            $post->image = $name;
        }
        else
            $post->image = 'dedault.img';
        $post->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        $category=Models\Category_posts::all();
        $post = Models\post::find($post);
        return view('test/PostStories/show')->with(compact('post','category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idPost)
    {
        $post = Models\post::find($idPost);
        $post->title = $request->title;
        $post->short_desc = $request->short_desc;
        $post->desc = $request->desc;
        $post->post_category_id = $request->post_category_id;

        if($request['image']){
            $image = $request['image'];
            $ext = $image->getClientOriginalExtension();
            $name = time().'_'.$image->getClientOriginalName();
            Storage::disk('public')->delete($post->image);
            Storage::disk('public')->put($name,File::get($image));
            $post->image = $name;
        }
        $post->save();
        // return redirect()->back();
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        $category=Models\post::find($post);
        $category->delete();
        return redirect()->back();
    }
}
