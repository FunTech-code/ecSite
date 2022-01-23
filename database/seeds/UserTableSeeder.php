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
        DB::table('users')->truncate();
    
        // データ挿入
        $param = [
            'name' => 'ゲスト',
            'name_kana' => 'ゲスト',
            'email' => 'guest@gmail.com',
            'tell' => '09012345678',
            'postal_code' => '123-1234',
            'prefectures' => '青森県',
            'municipalities' => '青森市',
            'address_details' => '青森町1-2-3',
            'password' => '$2y$10$jrSW4qlzX7ndKx/uN9FuVO2iNlSoijhLu.fjUGSrJXxwn4tQH4hGe',
            'created_user' => 'admin',
            'updated_user' => 'admin',
        ];
        DB::table('users')->insert($param);
    }
}
