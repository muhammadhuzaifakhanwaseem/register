<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
    public function userslist(){
        return view('userslist');
    }
    public function uploadvoucher(){
        return view('uploadvoucher');
    }
    public function edituser(){
        return view('edituser');
    }
}
