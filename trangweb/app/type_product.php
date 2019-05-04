<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type_product extends Model
{
    protected $table = 'type_products'; // khai bao ten bang, bien bang thanh model
    protected $fillable = ['name','description', 'image']; // ten cua cac truong trong bang do
    public $timestamps=true; // thiet lap timestamp, cho phep su dung
    public function product(){ // ten model cua bang product
    	return $this->belongsTo('App\category','id_type','id'); // quan he 1 nhieu voi bang product
    }
}
