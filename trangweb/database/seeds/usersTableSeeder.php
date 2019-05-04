<?php

use Illuminate\Database\Seeder;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         

        DB::table('users')->truncate();
        DB::table('users')->insert([
        	[ 'full_name'=>'Thao Vi ', 'email'=>'vi.thao@gmail.com','password'=> bcrypt('012345678'), 'phone'=>'23456789', 'address'=>'Hoàng Diệu 2', 'remember_token'=>1],
            [ 'full_name'=>'Huu Tuan', 'email'=>'tuan.nguyen@gmail.com','password'=> bcrypt('123456789'), 'phone'=>'23456789', 'address'=>'Hoàng Diệu 2', 'remember_token'=>1]
        ]);
    }
}
 