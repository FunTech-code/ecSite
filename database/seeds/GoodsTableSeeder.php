<?php

use Illuminate\Database\Seeder;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // データのクリア
        DB::table('goods')->truncate();
    
        // データ挿入
        $param = [
            'goods_name' => '青い森のおもちゃ',
            'price' => '¥1,000',
            'image_url' => 'https://hoge.com',
            'stock' => 100,
            'goods_description' => '説明説明説明説明説明説明説明説明説明説明説明説明',
            'created_user' => 'admin',
            'updated_user' => 'admin',
        ];
        DB::table('goods')->insert($param);
    }
}
