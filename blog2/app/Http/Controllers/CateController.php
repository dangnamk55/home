<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\posts;

class CateController extends Controller
{
    public function getList(){
        $data = posts::select('id','name')->orderBy('id','DESC')->get()->toarray();
        return view('admin.quantri', compact('data'));
    }

    public function getDelete($id){
        echo $id;
    }
}
