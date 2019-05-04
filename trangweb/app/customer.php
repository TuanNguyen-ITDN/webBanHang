<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customers'; // khai bao ten bang, bien bang thanh model
    protected $fillable = ['name','gender','email','address','phone_number','note']; // ten cua cac truong trong bang do
    public $timestamps=true; // thiet lap timestamp, cho phep su dung
    public function customer(){ // ten model cua bang product
    	return $this->belongsTo('App\bill','id_customer','id');// thiet lap quan he
    }
}
