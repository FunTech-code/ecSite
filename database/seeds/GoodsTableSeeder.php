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
            'goods_name' => 'ルフィ',
            'price' => '¥1,000',
            'image_url' => 'img/luffy.png',
            'stock' => 10,
            'goods_description' => 'ルフィのおもちゃです',
            'created_user' => 'admin',
            'updated_user' => 'admin',
        ];
        DB::table('goods')->insert($param);

        $param = [
            'goods_name' => 'ゾロ',
            'price' => '¥2,000',
            'image_url' => 'img/zoro_bandana.png',
            'stock' => 50,
            'goods_description' => 'ゾロのおもちゃです',
            'created_user' => 'admin',
            'updated_user' => 'admin',
        ];
        DB::table('goods')->insert($param);

        $param = [
            'goods_name' => 'ナミ',
            'price' => '¥3,000',
            'image_url' => 'img/nami.png',
            'stock' => 150,
            'goods_description' => 'ナミのおもちゃです',
            'created_user' => 'admin',
            'updated_user' => 'admin',
        ];
        DB::table('goods')->insert($param);

        $param = [
            'goods_name' => 'ウソップ',
            'price' => '¥10,000',
            'image_url' => 'img/usopp_sogeking.png',
            'stock' => 300,
            'goods_description' => 'ウソップのおもちゃです',
            'created_user' => 'admin',
            'updated_user' => 'admin',
        ];
        DB::table('goods')->insert($param);

        $param = [
            'goods_name' => 'チョッパー',
            'price' => '¥5,000',
            'image_url' => 'img/chopper.png',
            'stock' => 90,
            'goods_description' => 'チョッパーのおもちゃです',
            'created_user' => 'admin',
            'updated_user' => 'admin',
        ];
        DB::table('goods')->insert($param);
    }
}
