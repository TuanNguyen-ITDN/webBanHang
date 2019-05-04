<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\user as Authenticatable;

class user extends  Model
{
	use Notifiable;
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users'; // khai bao ten bang, bien bang thanh model
    protected $fillable = ['email', 'password'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    
   
    public $timestamps=true; // thiet lap timestamp, cho phep su dung
     
}
