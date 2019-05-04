<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills',function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_customer')->unsigned();
            $table->date('date_order');
            $table->float('total');
            $table->String('payment',200);
            $table->String('note',500);
            // $table->integer('cate_id')->unsigned();
            $table->foreign('id_customer')->references ('id')->on('customers')->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
}
