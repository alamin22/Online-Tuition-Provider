<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\providerpost;
use App\tutorBiodata;

class usersController extends Controller
{
    public function tuitionofferHome(Request $request){
    	try{
    		$tuition_provider=providerpost::orderBy('posted_date','DESC')
                ->limit(6)->get();
            $tutors_data=tutorBiodata::orderBy('posted_date','DESC')
                ->limit(6)->get();
    		return View('users.index')
    			->with('tuition_provider',$tuition_provider)
                ->with('tutors_data',$tutors_data);
    	}
    	catch(Exception $e){
    		$e->getMessage();
    	}
    }
    public function tuitionofferAbout(Request $request){
        try{
            return View('users.aboutTuition');
        }
        catch(Exception $e){
            $e->getMessage();
        }
    }
    public function tuitionofferHelp(Request $request){
        try{
            return View('users.helpCenter');
        }
        catch(Exception $e){
            $e->getMessage();
        }
    }
}
