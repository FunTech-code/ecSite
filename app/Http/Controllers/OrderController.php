<?php

namespace App\Http\Controllers;

use App\User;
use App\Goods;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buy(Request $request, $goods_id)
    {
        // 購入処理
        // 発注
        $order = new Order;
        // $order->user_id = $request->user_id;
        $order->user_id = 1;
        $order->goods_id = $goods_id;
        $order->purchase_number = $request->input('purchase_number');
        $order->save();

        // 在庫処理
        // $item = Goods::find(1);
        $item = Goods::where('goods_id',$goods_id)->first();
        $calc_stock = $item->stock - $request->input('purchase_number');
        $item->stock = $calc_stock;
        $item->save();
        
        // $user = User::where('user_id',$request->input('login_id', 1))->first();
        $user = User::find(1);
        $item = Goods::where('goods_id',$goods_id)->first();
        return view('order/complete', ['user' => $user,'item' => $item]);
    }
    // public function buy(Request $request, $goods_id)
    // {
    //     // 購入処理
    //     // 発注
    //     $order = new Order;
    //     // $order->user_id = $request->user_id;
    //     $order->user_id = 1;
    //     $order->goods_id = $request->goods_id;
    //     $order->purchase_number = $request->purchase_number;
    //     $order->save();

    //     // 在庫処理
    //     // $item = Goods::find(1);
    //     $item = Goods::where('goods_id',$id)->first();
    //     $calc_stock = $item->stock - $request->purchase_number;
    //     $item->stock = $calc_stock;
    //     $item->save();
        
    //     $user = User::where('user_id',$request->input('login_id', 1))->first();
    //     $item = Goods::where('goods_id',$id)->first();
    //     return view('order/index', ['item' => $item]);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function complete(Request $request)
    {
        //
        $user = User::where('user_id',$request->input('login_id', 1))->first();
        $item = Goods::where('goods_id',$id)->first();
        return view('order/complete', [ 'user' => $user,'item' => $item ]);
    }
}
