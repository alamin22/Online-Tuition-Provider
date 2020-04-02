<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\userCommentModel;

class userComment extends Controller
{
    public function userComments(Request $request){
        try{
            return View('users.userComment');
        }
        catch(Exception $e){
            $e->getMessage();
        }
    }
    public function userCommentSave(Request $request){
        try{
            $user_name=$request->useer_name;
            $user_email=$request->user_email;
            $user_comment=$request->user_comment;
            $data=new userCommentModel();
            $data->comment_name=$user_name;
            $data->comment_email=$user_email;
            $data->comment_comments=$user_comment;
            $data->save();
            return response()->json(array('status'=>'success'));
        }
        catch(Exception $e){
            return response()->json(array('status'=>$e->getMessage()));
        }
    }
}
