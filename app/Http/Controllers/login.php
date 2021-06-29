<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class login extends Controller
{
public function login()
    {
        if(User::check()) {
            return view('pages.loginform');
        }else{
            return redirect('logout');
        }
    }

    public function handleLogin(Request $request)
    {
        $data = $request->only('username','password');

        if (User::attempt($data,$request->remember)) {
            return view('home');
        }else{
            return view('pages.loginform')->with(array('error' => 1));
        }
    }
        
}
?>