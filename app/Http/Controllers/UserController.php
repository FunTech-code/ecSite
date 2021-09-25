<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        return view('user/index', ['user' => $user]);
    }

    public function show(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1])) {
            $msg = 'ログイン成功(' . Auth::user()->name . ')';
        } else {
            $msg = 'ログイン失敗';
        }
        return view('user.show',['message' => $msg]);


        // $username = DB::table('user')->where('user_id', $id)->value('user_name');
        // return view('toppage',['user' => $username]);
    }
    
    
    public function getAuth(Request $request)
    {
        $param = ['message' => 'ログインしてください。'];
        return view('user.auth',$param);
    }

    public function postAuth(Request $request)
    {
        // dump($request);
        // dd($request->input('email'));
        // dd($request->input('password'));
        // $email = $request->input('email');
        // $password = $request->input('password');
        $credentials = $request->only('email', 'password');
        dd(Auth::attempt($credentials));
        
        if (Auth::attempt(['email' => $email,'password' => $password])) {
                    $msg = 'ログイン成功(' . Auth::user()->name . ')';
        } else {
            $msg = 'ログイン失敗';
        }
        return view('user.auth',['message' => $msg]);
    }
}