<?php

namespace App\Http\Controllers;

use App\User;
use App\Goods;
use Illuminate\Http\Request;

class TopPageController extends Controller
{

    public function index(){
        $items = Goods::inRandomOrder()->take(3)->get();
        return view('toppage', [ 'items' => $items ]);
    }
}
