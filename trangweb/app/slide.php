<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slide extends Model
{
    protected $table = 'slides'; // khai bao ten bang, bien bang thanh model
    protected $fillable = ['link', 'image']; // ten cua cac truong trong bang do
    public $timestamps=true; // thiet lap timestamp, cho phep su dung
    
}
 
