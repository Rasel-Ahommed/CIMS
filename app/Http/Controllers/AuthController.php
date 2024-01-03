<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{   
    public function loginPage(){
        if(!Auth::check()){
            return redirect(route('/'));
        }
    }
    

    //view login page
    function login(){
        if(Session()->has('email')){
            return redirect(route('dashboard'));
        }else{
            return view('login');
        }
        
    }

    //view registration page
    function register(){
        return view('register');
    }

    //validate login
    function loginPost(Request $request){
        $request-> validate([
            "email" => "required|email",
            "password" => "required|min:6|max:12"
        ]);
        $check = $request->only('email','password');

        if(Auth::attempt($check)){
            if($request->chackBox == true){
                Session()->put('email', $request->email);//set session
            }
            return redirect()->to(route('dashboard'));
        }
        return redirect('/')->with('error', 'Something went wrong!'); 
    }

    //validate registration
    function registerPost(Request $request){
        $request-> validate([
            "email" => "required|email|unique:users|min:6|max:80",
            "password" => "required|min:6|max:12"
        ]);

        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        $user = User::create($data);

        if(!$user){
            return redirect(route('register'))->with("error","Reginstration faild!");
        }
        return redirect(route('dashboard'));
    } 
    
    //log out
    public function logOut(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }

    //view add customer
    public function viewAddCustomer(){
        return view("addCustomer");
    }

    
}
