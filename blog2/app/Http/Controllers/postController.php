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

    public function postShow($id){
        $data = Posts::where('alias', $id)->first()->toarray();
        return view('admin.post.detail', compact('data'));
    }


    public function creat(){
        return view('admin.post.add');
    }

    public function store(){

    }

}
