<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //to view the index page
    public function index(){
    	return view('view.index');
    }

    public function signup(){
    	return view('view.signup');
    }
}
