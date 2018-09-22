<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Mail;
class FrontController extends Controller
{
    public function addFeedback(Request $request)
    {
        $input = $request->all();
        Mail::send('index.feedbackcontent', array('name'=>$input["name"],'email'=>$input["email"], 'content'=>$input['comment']), function($message){
            $message->to('dangnamk55@gmail.com', 'Visitor')->subject('Visitor Feedback!');
        });
        flash('Send message successfully!')->success();

        return response()->redirectToRoute( 'contact' );
    }
}
