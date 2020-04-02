<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\providerpost;
use App\tutorBiodata;
use DB;
use App\LoginRegistration;
use Session;
session_start();

class registrationController extends Controller
{
   public function registration(Request $request){

      $password=$request->password;
   	$confirm_password=$request->confirm_password;

   	if(	$password==$confirm_password){
	   	$data=array();
	   	$data['first_name']=$request->first_name;
	   	$data['last_name']=$request->last_name;
	   	$data['email']=$request->email;
	   	$data['password']=md5($password);
	   	$dataSave=DB::table('login_table')->insert($data);
	   	Session::put('message','Registration Successfully');
	   	return Redirect::to('/tuitionoffer/getTutorProvider');
   	}else{
   		Session::put('message','Wrong! Try Again');
	   	return Redirect::to('/tuitionoffer');
   	}

       //return response()->json(array('e'=>$first_name));
   	
   }
   public function login(Request $request){
   	   $email=$request->email;
   	   $password=$request->password;
   	    $password=md5($password);
   	   $login_provider=LoginRegistration::leftjoin('tuition_provider','tuition_provider.registration_id','=','login_table.login_id')
               ->where('password','=',$password)
   	   	   ->where('email_address','=',$email)
   	   	   ->first();

         $login_tutor=LoginRegistration::
               leftjoin('tutor_biodata','tutor_biodata.register_id','=','login_table.login_id')
               ->where('password','=',$password)
               ->where('tutor_email','=',$email)
               ->first();
         

   	   if($login_provider!=null){
   	   		return view('users.usersProfile')
   	   			->with('login_provider',$login_provider);
   	   } 
         if($login_tutor!=null){
               return view('users.tutorsProfile')
                  ->with('login_tutor',$login_tutor);
         }
   	   else{
   	   		return Redirect::to('/tuitionoffer');
   	   }
   	 //return response()->json(array('e'=>$email,'data'=>$login_user));
   }
  
   public function logout(){

        return Redirect::to('/tuitionoffer');
   }
 
}
