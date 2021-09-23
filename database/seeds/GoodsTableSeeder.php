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
            'image_url' => 'https://aomori.com',
            'stock' => 10,
            'goods_description' => 'アオモリです',
            'created_user' => 'admin',
            'updated_user' => 'admin',
        ];
        DB::table('goods')->insert($param);

        $param = [
            'goods_name' => '秋田のおもちゃ',
            'price' => '¥2,000',
            'image_url' => 'https://akita.com',
            'stock' => 50,
            'goods_description' => '秋田です',
            'created_user' => 'admin',
            'updated_user' => 'admin',
        ];
        DB::table('goods')->insert($param);

        $param = [
            'goods_name' => '岩手のおもちゃ',
            'price' => '¥3,000',
            'image_url' => 'https://iwate.com',
            'stock' => 150,
            'goods_description' => '岩手です',
            'created_user' => 'admin',
            'updated_user' => 'admin',
        ];
        DB::table('goods')->insert($param);

        $param = [
            'goods_name' => '宮城のおもちゃ',
            'price' => '¥10,000',
            'image_url' => 'https://miyagi.com',
            'stock' => 300,
            'goods_description' => '宮城です',
            'created_user' => 'admin',
            'updated_user' => 'admin',
        ];
        DB::table('goods')->insert($param);

        $param = [
            'goods_name' => '山形のおもちゃ',
            'price' => '¥5,000',
            'image_url' => 'https://yamagata.com',
            'stock' => 90,
            'goods_description' => '山形です',
            'created_user' => 'admin',
            'updated_user' => 'admin',
        ];
        DB::table('goods')->insert($param);
    }
}
