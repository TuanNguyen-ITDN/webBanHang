<?php

use Illuminate\Database\Seeder;

class billsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bills')->insert([
    		[ 'id_customer' => 1, 'date_order'=> '2017-03-23','total' => 160000, 'payment' => 'COD', 'note' => 'k'],

    		[ 'id_customer' => 2, 'date_order'=>'2017-03-21', 'total' => 400000, 'payment' => 'ATM', 'note' => 'Vui lòng giao hàng trước 5h'],
    		[ 'id_customer' => 3, 'date_order'=>'2017-03-21','total' =>  520000, 'payment' => 'COD','note' =>  'Vui lòng chuyển đúng hạn'],
    		[ 'id_customer' => 4, 'date_order'=>'2017-03-21','total' =>  420000, 'payment' => 'COD','note' =>  'không chú'],
    		[ 'id_customer' => 5, 'date_order'=>'2017-03-24', 'total' => 220000, 'payment' => 'COD','note' =>  'e']


    	]); 
    }
}
