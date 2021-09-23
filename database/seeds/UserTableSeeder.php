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
    }
}
