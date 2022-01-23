<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class AdminController extends Controller
{
    public function test(){
        
        return view('admin.index');
    }

        public function login(){
            return view('admin.login');
        }

        public function dologin(Request $request){
            // dd($request->all());
            $userInfo=$request->except('_token');
            if(Auth::attempt($userInfo)){
             
                return redirect()->route('vehical.dashboard')->with('message','login succesfull');
            }
            return redirect()->back()->withErrors('Invalid user credentials');

        }
        public function logout()
        {
            Auth::logout();
            return redirect()->route('admin.login')->with('message','logging out');
        }

    }
