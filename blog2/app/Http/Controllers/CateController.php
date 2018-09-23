<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class CateController extends Controller
{
    public function getList(){
        $data = Posts::select('id','name')->orderBy('id','DESC')->get()->toarray();// tên model sao ko viết hoa lại viết thường thế này
        return view('admin.quantri', compact('data'));
    }

    public function getDelete($id){
        echo $id;
    }
}
