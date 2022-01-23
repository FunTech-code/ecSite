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
            'item_code' => 'HB-001',
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
            'item_code' => 'HB-002',
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
            'item_code' => 'HB-003',
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
            'item_code' => 'HB-004',
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
            'item_code' => 'HB-005',
            'price' => '¥5,000',
            'image_url' => 'img/chopper.png',
            'stock' => 90,
            'goods_description' => 'チョッパーのおもちゃです',
            'created_user' => 'admin',
            'updated_user' => 'admin',
        ];
        DB::table('goods')->insert($param);

        $param = [
            'goods_name' => 'ブルック',
            'item_code' => 'HB-006',
            'price' => '¥5,000',
            'image_url' => 'img/brook.png',
            'stock' => 100,
            'goods_description' => 'ブルックのおもちゃです',
            'created_user' => 'admin',
            'updated_user' => 'admin',
        ];
        DB::table('goods')->insert($param);

        $param = [
            'goods_name' => 'フランキー',
            'item_code' => 'HB-007',
            'price' => '¥5,000',
            'image_url' => 'img/franky.png',
            'stock' => 100,
            'goods_description' => 'フランキーのおもちゃです',
            'created_user' => 'admin',
            'updated_user' => 'admin',
        ];
        DB::table('goods')->insert($param);

        $param = [
            'goods_name' => 'ジンベエ',
            'item_code' => 'HB-008',
            'price' => '¥5,000',
            'image_url' => 'img/jinbe.png',
            'stock' => 100,
            'goods_description' => 'ジンベエのおもちゃです',
            'created_user' => 'admin',
            'updated_user' => 'admin',
        ];
        DB::table('goods')->insert($param);

        $param = [
            'goods_name' => 'ロビン',
            'item_code' => 'HB-009',
            'price' => '¥5,000',
            'image_url' => 'img/robin.png',
            'stock' => 100,
            'goods_description' => 'ロビンのおもちゃです',
            'created_user' => 'admin',
            'updated_user' => 'admin',
        ];
        DB::table('goods')->insert($param);
    }
}
