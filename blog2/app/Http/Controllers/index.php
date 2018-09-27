<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index extends Controller
{
   public function information(){
       return view('index.information');
   }

   public function post(){
       return view('index.post');
   }

   public function contact(){
       return view('index.contact');
   }

    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }


}