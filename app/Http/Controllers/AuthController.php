<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function store(Request $request){
        $request->validate([
                'company_name'=>'required',
                'company_mobile'=>'required',
                'company_email'=>'required',
                'company_address'=>'required',
                'password'=>'required',
                'password_confirmation'=>'required',
                
        ]);

          $company= new Company();
          $company -> company_name = $request -> input('company_name');
          $company -> company_mobile = $request -> input('company_mobile');
          $company -> company_email = $request -> input('company_email');
          $company -> company_address = $request -> input('company_address');
          $company -> password = Hash::make($request->input('password'));

          $company ->save();
          return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }
    public function login(){
       return view('login');
    }
    public function register(){
        return view('user_register');
    }
    public function userRegister(Request $request){
        $request->validate([
            'username'=>'required',
            'mobile'=>'required',
            'email'=>'required',
            'password'=>'required',
            'password_confirmation'=>'required',
            
    ]);

      $user= new User();
      $user -> username = $request -> input('username');
      $user -> mobile = $request -> input('mobile');
      $user-> email = $request -> input('email');
    //   $company -> company_address = $request -> input('password');
      $user  -> password = Hash::make($request->input('password'));

      $user ->save();
      return redirect()->route('login')->with('success', 'Registration successful. Please log in.'); 
    }
}

