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

 public function ListPost(Request $request)
{
    $listaPosts = Post::with("users")->get();
    return view("listPost", [
        "posts" => $listaPosts
    ]);
}

 public function ModificarPost(Request $request){
        $post = Post::findOrFail($request -> post("id"));
        $post -> title = $request -> post("title");
        $post -> body = $request -> post("body");
        $post -> save();

        return redirect("/listPost")->with("modified",true);
    }

} 


