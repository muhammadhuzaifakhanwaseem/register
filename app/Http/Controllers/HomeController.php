<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function mail(){
        return view('mail');
    }
    
    public function coursedetail(){
        return view('coursedetail');
    }
}
