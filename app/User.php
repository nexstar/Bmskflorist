<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Moloquent;
use DB;


//class User extends Authenticatable
class User extends Moloquent
{
    use Notifiable;

    protected $collection = 'users';
    protected $primaryKey = '_id';

    protected $fillable = [
		'name','smsname','smspwd','ecpayname','ecpaypwd'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];




}

