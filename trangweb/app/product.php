<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';// ten table trong database
    protected $fillable = ['name','id_type','description','unit_price','promotion_price','image','unit','new'];
    public $timestamps = True; //thiet lap
    public function product(){
    	return $this->hasMany('App\product','id_type','id');// thiet lap quan he
    }
}
