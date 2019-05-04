<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class new extends Model
{
    protected $table = 'news'; // khai bao ten bang, bien bang thanh model
    protected $fillable = ['title','content','image']; // ten cua cac truong trong bang do
    public $timestamps=true; // thiet lap timestamp, cho phep su dung
    //public function product(){ // ten model cua bang product
    	//return $this->hasMany('App\bill','id_customer','id');// thiet lap quan he
}
