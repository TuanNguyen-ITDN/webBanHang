<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Eloquent::unguard();
         // $this->call(customersTableSeeder::class);
         // $this->call(billsTableSeeder::class);
         // $this->call(newsTableSeeder::class);
         // $this->call(type_productsTableSeeder::class);
         // $this->call(slidesTableSeeder::class);
         // $this->call(productsTableSeeder::class);
         // $this->call(bill_detailsTableSeeder::class);
         $this->call(usersTableSeeder::class);
    }
}
