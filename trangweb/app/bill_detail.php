<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill_detail extends Model
{
    protected $table = 'bill_details'; // khai bao ten bang, bien bang thanh model
    protected $fillable = ['id_bill','id_product','quantity','unit_price']; // ten cua cac truong trong bang do
    public $timestamps=true; // thiet lap timestamp, cho phep su dung
    public function product(){ // ten model cua bang product
    	return $this->hasMany('App\bill_detail','id_bill','id');// thiet lap quan he
    	return $this->hasMany('App\bill_detail','id_product','id');// thiet lap quan he
}
