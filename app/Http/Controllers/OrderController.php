<?php

namespace App\Http\Controllers;

use App\User;
use App\Goods;
use App\Order;
use Illuminate\Support\Facades\Auth;
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
        // 現在認証されているユーザーの取得
        $user = Auth::user();
        $purchase_number = $request->input('purchase_number');

        $this->order_process($user, $goods_id, $purchase_number);
        
        $this->stock_calc($user, $goods_id, $purchase_number);
        
        $item = Goods::where('goods_id',$goods_id)->first();
        return view('order/complete', ['user' => $user,'item' => $item]);
    }

    // 在庫処理
    public function order_process($user, $goods_id, $purchase_number)
    {
        $order = new Order;
        // $order->user_id = $request->user_id;
        $order->user_id = $user->id;
        $order->goods_id = $goods_id;
        
        $order->purchase_number = $purchase_number;
        $order->save();
        
    }
    
    // 在庫処理
    public function stock_calc($user, $goods_id, $purchase_number)
    {

        // $item = Goods::find(1);
        $item = Goods::where('goods_id',$goods_id)->first();
        $calc_stock = $item->stock - $purchase_number;
        $item->stock = $calc_stock;
        $item->save();
        
    }

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
