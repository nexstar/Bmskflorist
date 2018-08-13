<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;

class UserController extends Controller
{

    public function TestInsertUser(){
        $users = new User;
        $users->name = "kate";
        $users->password = bcrypt('123');
        $users->smsname  = "0972153032";
        $users->smspwd   = "5a33";
        $users->ecpayname = "";
        $users->ecpaypwd  = "";
        $users->save();
		return "insert ok";
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

}

