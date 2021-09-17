<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\Category_posts;

class search extends Controller
{
    public function searchPost(Request $request){
        $category=Category_posts::limit(7)->get();
        $List = post::where('title','like','%'.$request->keyword.'%')->get();
        return view('pages/search_page',['data' => $List, 'category' => $category]);
    }
}
