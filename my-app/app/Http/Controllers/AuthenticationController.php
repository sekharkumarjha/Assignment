<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    //
    function Login()
    {
        return view("Pages.Login");
    }
    function LoginAuth(Request $request)
    {
        $request->validate([
            'username' => 'required|email',
            'password' => 'required|min:5'
        ]);
        $username = $request->input('username');
        $password = $request->input('password');
        if ($username == 'a@gmail.com' && $password == 'sekhar') {
            $request->session()->put('name', 'sekhar');
            return redirect('Home');
        } else {
            $request->session()->flash('error', 'Please enter valid login credentials');
            return redirect('Login');
        }
    }
    function Logout(Request $request)
    {
        $request->session()->forget('name');
        echo 'Logout Success';
    }
    function SignUp(){
        return view('Pages.Signup');
    }
    function SignUpAuth(){
        echo 'Sign Up';
    }
}
