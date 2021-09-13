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
    
    public function show($id)
    {
        $username = DB::table('user')->where('user_id', $id)->value('user_name');
        return view('user/show',['user' => $username]);
    }

}