<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
    public function composeemail(){
        return view('compose_email');
    }
    public function userslist(){

        $users = Db::select("select * from register");

        return view('userslist',['users' => $users]);
    }
    public function uploadvoucher(){
        return view('uploadvoucher');
    }
    public function edituser(){
        return view('edituser');
    }
}
