<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateSignUp;

class PostController extends Controller
{
     //
    public function __construct(){

    }

    //displays the sign up page
    public function signup(){

    	return view('view.signup');

    }

    public function store(){

    	dd(request()->all());
    	
    }


   /* public function store(ValidateSignUp $request){

    	//insert user data into db
    	$user = User::create([
    				'name' => request('name'),
    				'email' => request('email'),
    				'password' => bcrypt(request('password'))
    			]);

    	//sign user in
    	auth()->login($user);

    	//takes user to sign in page after succesfully sign up
    	return redirect('/sigin')->withMessage("Registration Successful");
    }
*/
}
