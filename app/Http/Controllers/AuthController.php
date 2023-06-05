<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;



class AuthController extends Controller
{
    public function loginpage(){
        $people = new People();
        return view('login',compact('people'));
    }



    public function login(Request $req){
        $credentials = [
            'useremail' => $req->email,
            'password' => $req->password
        ];

        if ($req->rememberme) {
            Cookie::queue('mycookie',$req->email,5);

            Cookie::queue('mypassword',$req->password,5);
        }
        if (Auth::attempt($credentials,true)) {
            Session::put('mysession',$credentials);

            return redirect()->route('dashboard');
        }

        return redirect()->back();

    }

    public function logout(){

        Auth::logout();
        return redirect('/');
    }
}
