<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\providerpost;
use App\LoginRegistration;
use App\division;
use App\district;
use DB;
use Session;
session_start();

class providerController extends Controller
{
     public function getProviderPage(Request $request){
    	try{
            $tuition_provider=providerpost::orderBy('posted_date','DESC')
                ->get();
    		return View('users.providers')
                ->with('tuition_provider',$tuition_provider);
    	}
    	catch(Exception $e){
    		$e->getMessage();
    	}
    } 
    public function tuitionProviderPost(Request $request){
    	try{
            $division=division::all();
    		return View('users.tuitionProviderPost')
                ->with('division',$division);
    	}
    	catch(Exception $e){
    		$e->getMessage();
    	}
    }

    public function tuitionProviderPostSave(Request $request){
        $registration_id=LoginRegistration::where('email','=',$request->email_address)->first();
        $data=array();
        $data['first_name']=$request->first_name;
        $data['last_name']=$request->last_name;
        $data['class_name']=$request->class_name;
        $data['institute_name']=$request->institute_name;
        $data['tuition_subject']=$request->tuition_subject;
        $data['week_day']=$request->week_day;
        $data['salary']=$request->salary;
        $data['tutorsgender']=$request->tutor_gender;
        $data['student_gender']=$request->student_gender;
        $data['hire_date']=$request->hire_date;
        $data['division']=$request->division;
        $data['district']=$request->district;
        $data['contact_address']=$request->contact_address;
        $data['email_address']=$request->email_address;
        $data['phone_number']=$request->phone_number;
        $data['posted_date']=date('Y-m-d');
        $data['comments']=$request->comments;
        $data['registration_id']=$registration_id->login_id;

        $dataSave=DB::table('tuition_provider')->insert($data);
        Session::put('post_message','Your Post Added Successfully');
        return Redirect::to('/tuitionoffer/provider/post');

        //return response()->json(array('status'=>'success','data'=>$registration_id->login_id));
    }

    public function viewTuitiondetail(Request $request){
        $id=$request->id;
        $getStudentRow=providerpost::where('provider_id',$id)->first();
        return response()->json(array('status'=>'success','gettuitionData'=>$getStudentRow));
    }
     public function tuitiondivition(Request $request){
        $division=$request->division;
        $getdistrict=district::where('division_name',$division)->get();

        $getdistrict_record=array();
        foreach($getdistrict as $eachdistrict){
            $getdistrict_record[]=array(
                'district_name'=>$eachdistrict->name
            );
        }
        return response()->json(array('status'=>'success','getdistrict'=>$getdistrict_record));
    }
}
