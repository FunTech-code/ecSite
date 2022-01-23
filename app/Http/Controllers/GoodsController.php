<?php

namespace App\Http\Controllers;

use App\Goods;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    // 商品一覧
    public function index()
    {
        $items = Goods::paginate(6);
        return view('goods/index', [ 'items' => $items ]);
    }

    // 商品詳細
    public function show($id)
    {
        $item = Goods::where('goods_id',$id)->first();
        return view('goods/show', [ 'item' => $item ]);
    }
}
