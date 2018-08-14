<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\User;

class UserController extends Controller
{

	protected $validator;

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

	public function login(Request $request){
		$this->validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'password' => 'required',
        ]);
		
		if ($this->validator->fails()) {
            return redirect('/')->withErrors($this->validator)->withInput();
        }

        if ( Auth::attempt( $request->only('name','password') )) {
            return redirect()->route('successUserController.index');
        }else{
			return redirect('/');
		}

	}

	public function index()
    {
		return view('Customer.index');
    }


	public function logout(Request $request){
		Auth::logout();
		return redirect('/');
	}

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

}

