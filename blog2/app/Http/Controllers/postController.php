<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function postview(){
        $data = Posts::select('id','name','description','image','alias','content')->orderBy('id','DESC')->paginate(3);
        return view('admin.post.posts',compact('data'));
    }

    public function postShow(){

    }


    public function creat(){
        return view('admin.post.add');
    }

    public function store(){

    }

}
