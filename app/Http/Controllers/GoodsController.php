<?php

namespace App\Http\Controllers;

use App\Goods;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function index()
    {
        $items = Goods::all();
        return view('goods/index', [ 'items' => $items ]);
    }

    public function show($id)
    {
        $item = Goods::where('goods_id',$id)->first();
        return view('goods/show', [ 'item' => $item ]);
    }
}
