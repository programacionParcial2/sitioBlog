<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function CreatePost(Request $request){
        $u = new Post();
        $u -> title = $request -> post("title");
        $u -> body = $request -> post("body");
        $u -> author_id = Auth::id();
        $u -> save();

        return redirect("/post")->with("blogPublished",true);

    }
}


