<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataModel;

class PostsController extends Controller
{
    //

    function getPostsData(){
        $postsData = DataModel::where('category', '=', 'Updates')->get();
        return view('Pages.PostsPage',['data'=>$postsData]);
    }
    function getNewsData(){
        $newsData  = DataModel::where('category', '=', 'News')->get();
        return view('Pages.Newspage',['data'=>$newsData]);
    }
}
