<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\user as Authenticatable;

class user extends  Model
{
	protected $table = 'users'; // khai bao ten bang, bien bang thanh model
    protected $fillable = ['full_name', 'email','password','phone', 'address','remember_token']; // ten cua cac truong trong bang do
    public $timestamps=true; // thiet lap timestamp, cho phep su dung
     
}
