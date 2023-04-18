<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }
    public function login(){

        if(session()->has('email')){
            
            if(session()->get('role') == 1){

                return redirect('/dashboard');
            }


            return redirect('/');
            
        }
        return view('login');
    }

    public function loginstore(Request $req){

        $req->validate([
            'email' => 'required | max:50',
            'password' => 'required | max:50',
        ]);

        $result  = Db::select('select * from admin where username = ? and password = ?',
        [$req->email,md5($req->password)]);

        if($result){

            session()->put('email',$req->email);
            session()->put('name',$result[0]->name);
            session()->put('role',$result[0]->role);

            return redirect('/dashboard');

        }
        else{

            session()->flash('status','Incorrect Username and Password');

            return redirect('admin/login');
        }

    }
    
    

    public function logout(){

        session()->forget('name');
        session()->forget('email');
        session()->forget('role');

        return redirect()->route('admin.login');
    }

    public function registerstore(Request $req){

        $req->validate([
            'fullname' => 'required | max: 50',
            'email' => 'required | email | max: 50',
            'date' => 'required',
            'qualification' => 'required',
            'feetype' => 'required',
            'course' => 'required',
 
        ]);

        $data = Db::select('select * from register where email = ?',[$req->email]);

        if($data != null){
            
            session()->flash('status','Email already Used !');

             return redirect('/register');
        }
        else{


            $result =  Db::insert('insert into register(name,email,date,qualification,feetype,course,message) 
            values(?,?,?,?,?,?,?)',[$req->fullname,$req->email,$req->date,
            $req->qualification,$req->feetype,$req->course,$req->message]);
            
            
            
            if($result){

            $result2  = Db::select('select * from register where email = ?',[$req->email]);

            $stid = $result2[0]->stid;
            $email = $result2[0]->email;
            session()->put('myemail',$email);
            session()->put('stid',$stid);
                
            return view('thank_for_register');

            }
        }
        

    }


}
