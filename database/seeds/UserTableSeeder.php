<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // データのクリア
        DB::table('user')->truncate();
    
        // データ挿入
        $param = [
            'user_name' => '青森',
            'user_name_kana' => 'アオモリ',
            'email' => 'aomori@gmail.com',
            'tell' => '00011112222',
            'postal_code' => '111-2222',
            'address' => '青森県青森市青森町1-2-3',
            'password' => 'aomori1',
            'created_user' => 'admin',
            'updated_user' => 'admin',
        ];
        DB::table('user')->insert($param);

        $param = [
            'user_name' => '秋田',
            'user_name_kana' => 'アキタ',
            'email' => 'akita@gmail.com',
            'tell' => '00011123333',
            'postal_code' => '112-2222',
            'address' => '秋田県秋田市秋田町1-2-3',
            'password' => 'akita1',
            'created_user' => 'admin',
            'updated_user' => 'admin',
        ];
        DB::table('user')->insert($param);

        $param = [
            'user_name' => '岩手',
            'user_name_kana' => 'イワテ',
            'email' => 'iwate@gmail.com',
            'tell' => '00011132222',
            'postal_code' => '113-2222',
            'address' => '岩手県岩手市岩手町1-2-3',
            'password' => 'iwate1',
            'created_user' => 'admin',
            'updated_user' => 'admin',
        ];
        DB::table('user')->insert($param);

        $param = [
            'user_name' => '宮城',
            'user_name_kana' => 'ミヤギ',
            'email' => 'miyagi@gmail.com',
            'tell' => '00011156666',
            'postal_code' => '115-2222',
            'address' => '宮城県宮城市宮城町1-2-3',
            'password' => 'miyagi1',
            'created_user' => 'admin',
            'updated_user' => 'admin',
        ];
        DB::table('user')->insert($param);

        $param = [
            'user_name' => '山形',
            'user_name_kana' => 'ヤマガタ',
            'email' => 'yamagata@gmail.com',
            'tell' => '00011167777',
            'postal_code' => '116-2222',
            'address' => '山形県山形市山形町1-2-3',
            'password' => 'yamagata1',
            'created_user' => 'admin',
            'updated_user' => 'admin',
        ];
        DB::table('user')->insert($param);

        $param = [
            'user_name' => '福島',
            'user_name_kana' => 'フクシマ',
            'email' => 'fukushima@gmail.com',
            'tell' => '00011189999',
            'postal_code' => '116-2222',
            'address' => '福島県福島市福島町1-2-3',
            'password' => 'fukushima1',
            'created_user' => 'admin',
            'updated_user' => 'admin',
        ];
        DB::table('user')->insert($param);
    }
}
