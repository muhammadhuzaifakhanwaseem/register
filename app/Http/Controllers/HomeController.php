<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function thanksforregister(){

        if(session()->has('myemail')){
   
            return view('thank_for_register');
        }
        else{
            return redirect('/register');
        }
    }
    public function mail(){
        return view('mail');
    }
    
    public function coursedetail(){
        return view('coursedetail');
    }
}
