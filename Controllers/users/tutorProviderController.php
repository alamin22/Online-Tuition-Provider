<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tutorProviderController extends Controller
{
   public function getTutorProvider(Request $request){
    	try{
    		return View('users.tutorProviderPage');
    	}
    	catch(Exception $e){
    		$e->getMessage();
    	}
    } 
}
