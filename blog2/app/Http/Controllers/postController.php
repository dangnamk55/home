<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function getAdd(){
        return view('admin.post.add');
    }

    public function addPost(){
        
    }
}
