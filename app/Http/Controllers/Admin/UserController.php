<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash, Auth;
class UserController extends Controller
{
    public function login( Request $request )
    {
     //  User::create( [
      //     'name'=>'empresa',
      //     'email'=>'funnywebs0@gmail.com', 
      //     'password'=>Hash::make('1234')
      // ]); 
    
		$credenciales = $this->validate($request,[
			'email'=>['email','required'],
			'password'=>'required',
		]);
		$user = Auth::attempt($credenciales);

		if (!$user) {

			return redirect()->back()->with('message','Alguno de los campos es incorrecto')->with('type','warning');
		}

		$request->session()->regenerate();

		return redirect()->route('panel');

	}
    public function logout(){
		Auth::logout();

		redirect('/');
	}

}
