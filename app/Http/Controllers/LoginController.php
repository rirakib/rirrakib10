<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }

    public function login_check(Request $request)
    {
        $username = $request->name;
        $password = md5($request->password);

        $result = User::where('name',$username)->where('password',$password)->first();
        if($result)
        {
            Session::put('name',$username);
            return redirect()->route('dashboard');
        }
        else
        {
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }
}
