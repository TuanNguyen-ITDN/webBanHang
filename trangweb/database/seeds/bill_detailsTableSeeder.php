<?php

use Illuminate\Database\Seeder;

class bill_detailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('bill_details')->insert([
	        ['id_bill'=> 1,'id_product'=>  2,'quantity'=> 5,'unit_price'=> 220000],
			[ 'id_bill'=> 2,'id_product'=> 2, 'quantity'=> 1, 'unit_price'=>160000],
			[ 'id_bill'=> 2,'id_product'=>  10, 'quantity'=> 1,'unit_price'=> 200000],
			[ 'id_bill'=> 3, 'id_product'=>39,'quantity'=>  1,'unit_price'=> 200000],
			[ 'id_bill'=> 4, 'id_product'=>30, 'quantity'=> 2,'unit_price'=> 200000],
			[ 'id_bill'=> 4,'id_product'=> 12, 'quantity'=> 1,'unit_price'=> 120000],
			['id_bill'=>  5,'id_product'=> 21,'quantity'=>  1,'unit_price'=> 120000],
			['id_bill'=> 5, 'id_product'=>57, 'quantity'=> 2, 'unit_price'=>150000]
    	]); 
    }
}
