<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // データのクリア
        DB::table('order')->truncate();
    
        // データ挿入
        $param = [
            'user_id' => 1,
            'goods_id' => 2,
            'purchase_number' => 5,
            'created_user' => 'admin',
            'updated_user' => 'admin',
        ];
        DB::table('order')->insert($param);
    }
}
