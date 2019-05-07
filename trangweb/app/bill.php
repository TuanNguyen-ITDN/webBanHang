<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    protected $table = 'bills'; // khai bao ten bang, bien bang thanh model
    protected $fillable = ['id_customer','date_order','total','payment','note']; // ten cua cac truong trong bang do
    public $timestamps=true; // thiet lap timestamp, cho phep su dung
    public function product(){ // ten model cua bang product
    	return $this->hasMany('App\bill','id_customer','id');// thiet lap quan he
    }
}
