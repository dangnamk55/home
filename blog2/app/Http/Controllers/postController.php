<?php

namespace App\Http\Controllers;

use App\Posts;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Container\Container;


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


    public function create(){
        $currentRoute = Route::currentRouteName();
        return view('admin.post.add', compact('currentRoute'));
    }

    public function store(Request $request){
        $this->validate( $request, [
            'name'        => 'required',
            'content'     => 'required',
            'image'       => 'required',
            'description' => 'required',
        ] );

        $item          = new Post();
        $data          = $request->all();
        //dd($data);
        $data['image'] = $request->file('image')->store('public/sponsor');
        $data['image'] = str_replace( '/storage/', '/public/', $data['image'] );

        $item->fill( $data );
        $item->save();
        flash( __( 'message.save_success' ), 'success' );

        return response()->redirectToRoute( 'quantri' );
    }

    public function edit(Post $post){
        $item  = $post;
        $currentRoute = Route::currentRouteName();
        return view( 'admin.post.add', compact(  'item','currentRoute' ));
    }

    public function update(Request $request, Post $post){

        $this->validate( $request, [
            'name'        => 'required',
            'content'     => 'required',
            'description' => 'required',
        ] );
        $item = $post;
        $data = $request->all();

        if ( $data['image'] !== $item->image ) {
            $data['image'] = $request->file('image')->store('public/sponsor');
            $data['image'] = str_replace( '/storage/', '/public/', $data['image'] );
        } else {
            $data['image'] = $item->image;
        }

        $item->fill( $data );
        $item->save();
        flash( __( 'message.save_success' ), 'success' );

        return response()->redirectTo( route( 'quantri', [ 'id' => $post->id ] ) );
    }
}
