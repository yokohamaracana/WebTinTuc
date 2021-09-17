<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category_posts;
use App\Models\post;
use App\Models\viewer;

class PostPage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $viewer = new viewer();
        $viewer->post_id = $id;
        $viewer->title = $request->message;
        $viewer->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = post::find($id);
        $relative_post = post::where('id', '!=', $post->id)->where('post_category_id',$post->post_category_id)->limit(5)->get();
        $viewer = viewer::where('post_id',$id)->get();
        $category_post = Category_posts::limit(7)->get();
        return view('pages/single',['category' => $category_post, 'data' => $post,'viewer' => $viewer,'relative_post' => $relative_post] );
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
