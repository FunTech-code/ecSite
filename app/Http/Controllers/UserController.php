<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index()
    {
        return view('user/index');
    }

    public function show(Request $request)
    {
        $request->flash();

        $id = $request->input('login_id', 1);
        // $password = $request->input('login_pass');

        $username = DB::table('user')->where('user_id', $id)->value('user_name');
        return view('toppage',['user' => $username]);
    }
    
    
    public function create($id)
    {
        return view('user/login');
    }

}