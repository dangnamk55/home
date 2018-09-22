<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logoutController extends Controller
{
    public function logOut(){
        session(['user'=>null]);
        return redirect('/');
    }
}
