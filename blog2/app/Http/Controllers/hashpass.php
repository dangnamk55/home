<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class hashpass extends Controller
{
    public function pwhash(){
        $pass = 'dangnam'; // tùy ý thay
        echo Hash::make($pass);
    }
}
