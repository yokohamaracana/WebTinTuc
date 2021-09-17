<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category_posts;
use App\Notifications\ProductNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;

class CategoryPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::find(1)->unreadNotifications;

        // return $user;
        $category=Category_posts::all();
        return view('test/index_category',['category' => $category,'notifications'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('test/store_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=User::where('level','=','1')->get();
        $category = new Category_posts;
        $category->title = $request->title;
        $category->save();
        Notification::send($user,new ProductNotification($request->title));
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($categoryPost)
    {
        $category=Category_posts::find($categoryPost);
        // return view('test/show_category')->with(compact('category'));
        return $category;
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
        // echo 'test';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $categoryPost)
    {
        $category=Category_posts::find($categoryPost);
        $category->title=$request->title;
        $category->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($categoryPost)
    {
        $category=Category_posts::find($categoryPost);
        $category->delete();
        return redirect()->back();
    }
}
// https://hocweb.vn/huong-dan-dung-javascript-de-lay-du-lieu-fetch-api-tu-ngan-hang-uk/
