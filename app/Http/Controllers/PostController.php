<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateSignUp;

class PostController extends Controller
{
     /*
    |--------------------------------------------------------------------------
    | Post Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    public function __construct(){

        $this->middleware('guest');
    }

    //displays the sign up page
    public function signup(){

    	return view('view.signup');

    }

    public function store(ValidateSignUp $request){

    	//insert user data into db
    	$user = User::create([
    				'name' => request('name'),
    				'email' => request('email'),
    				'password' => bcrypt(request('password'))
    			]);

    	//sign user in
    	auth()->login($user);

    	//takes user to sign in page after succesfully sign up
    	return redirect('/dashboard')->withMessage("Registration Successful");
    }

}
