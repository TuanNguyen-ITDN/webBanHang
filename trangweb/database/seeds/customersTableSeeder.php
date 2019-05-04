<?php

use Illuminate\Database\Seeder;

class customersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
    	DB::table('customers')->insert([
    		['name' =>'ê', 'gender' =>'Nữ', 'email' =>'huongnguyen@gmail.com','address' =>  'e', 'phone_number' => 'e', 'note' => 'e'],
    		['name' =>'hhh', 'gender' =>'nam', 'email' =>'huongnguyen@gmail.com', 'address' => 'Lê thị riêng','phone_number' =>  '99999999999999999','note' =>  'k'],
    		['name' =>'Hương Hương', 'gender' =>'Nữ','email' => 'huongnguyenak96@gmail.com','address' =>  'Lê Thị Riêng, Quận 1', 'phone_number' => '23456789', 'note' => 'Vui lòng giao hàng trước 5h'],
    		['name' =>'Khoa phạm','gender' => 'Nam', 'email' =>'khoapham@gmail.com', 'address' => 'Lê thị riêng','phone_number' =>  '1234567890','note' =>  'Vui lòng chuyển đúng hạn'],
    		['name' => 'Hương Hương','gender' => 'Nữ','email' => 'huongnguyenak96@gmail.com','address' =>  'Lê Thị Riêng, Quận 1', 'phone_number' => '234567890-','note' =>  'không chú']
    	]); 
    }
}
