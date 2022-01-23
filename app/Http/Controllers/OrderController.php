<?php

namespace App\Http\Controllers;

use App\User;
use App\Goods;
use App\Order;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // 購入画面バリデーションメッセージオーバーライド
    public function messages()
    {
        return [
            'purchase_number.required' => 'hoge1',
            'purchase_number.max' => 'hoge2',
        ];
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buy(Request $request, $goods_id)
    {
        // $this->buy_validate($request, $goods_id);
        $request->validate([
            'purchase_number' => 'required|max:3',
        ]);
        $purchase_number = $request->input('purchase_number');
        $item = Goods::where('goods_id',$goods_id)->first();
        $stock = $item->stock;
        if(($stock - $purchase_number) <= 0){
            return redirect()
                ->action('GoodsController@show', ['id' => $goods_id])
                ->with('err_msg', "在庫数が足りません。残り在庫：$stock");
            // return redirect()->route('goods.show', ['id' => $goods_id]);
        }
        
        // 現在認証されているユーザーの取得
        $user = Auth::user();

        // 購入処理
        // 発注
        $this->order_process($user, $goods_id, $purchase_number);
        
        $this->stock_calc($user, $item, $purchase_number);
        
        $item = Goods::where('goods_id',$goods_id)->first();
        return view('order/complete', ['user' => $user,'item' => $item]);
    }
    
    // データも一緒に、直前ページに戻す場合
    public function back() {
        return back()->with('result', 'ok！');
        return back()->withInput();     // 送信データがセッション内に格納される
    }
    // 在庫処理
    public function order_process($user, $goods_id, $purchase_number)
    {
        $order = new Order;
        // $order->user_id = $request->user_id;
        $order->user_id = $user->id;
        $order->goods_id = $goods_id;
        $order->purchase_number = $purchase_number;
        $order->created_user = $user->user_name;
        $order->updated_user = $user->user_name;
        $order->save();
        
    }
    
    // 在庫処理
    public function stock_calc($user, $item, $purchase_number)
    {
        // $item = Goods::where('goods_id',$goods_id)->first();
        $calc_stock = $item->stock - $purchase_number;
        $item->updated_user = $user->user_name;
        $item->updated_at = now();
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
        $user = User::where('user_id',$request->input('login_id', 1))->first();
        $item = Goods::where('goods_id',$id)->first();
        return view('order/complete', [ 'user' => $user,'item' => $item ]);
    }
}
