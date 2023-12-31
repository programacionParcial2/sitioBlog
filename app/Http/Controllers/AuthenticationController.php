<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function Register(Request $request){
        $user = new User();
        $user -> name = $request -> post("name");
        $user -> email = $request -> post("email");
        $user -> password = Hash::make($request -> post("password"));
        $user -> save();

        return redirect("/register")->with("registered",true);

    }

    public function Login(Request $request){
        $credenciales = $request -> only(["email","password"]);
        if(!Auth::attempt($credenciales))
            return redirect("/login")->with("error",true);
        return redirect("/");
    }

    public function Logout(Request $request){
        Auth::logout();
        return redirect("/");
    }
}
