<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\LoginRegistration;
use App\tutorBiodata;
use App\division;
use App\district;
use DB;
use Session;
session_start();

class tutorsController extends Controller
{
    public function getTutorPage(Request $request){
    	try{
        $getBiodata=tutorBiodata::orderBy('posted_date','DESC')
            ->get();
    		return View('users.tutors')
            ->with('getBiodata',$getBiodata);
    	}
    	catch(Exception $e){
    		$e->getMessage();
    	}
    } 
    public function tutorBiodataForm(Request $request){
    	try{
            $division=division::all();
    		return View('users.tutorsBiodataForm')
               ->with('division',$division);
    	}
    	catch(Exception $e){
    		$e->getMessage();
    	}
    }

    public function tutorBiodata(Request $request){
       $registration_id=LoginRegistration::where('email','=',$request->tutor_email)->first();
       $data=array();
       $data['first_name']=$request->first_name;
       $data['last_name']=$request->last_name;
       $data['phone_no']=$request->phone_no;
       $data['tutor_email']=$request->tutor_email;
       $data['gender']=$request->gender;
       $data['occupation']=$request->occupation;
       $data['prefer_subject']=$request->prefer_subject;
       $data['expected_salary']=$request->expected_salary;
       $data['education_lebel']=$request->education_lebel;
       $data['institute']=$request->institute;
       $data['present_division']=$request->present_division;
       $data['present_district']=$request->present_district;
       $data['present_location']=$request->present_location;
       $data['permanent_division']=$request->permanent_division;
       $data['permanent_district']=$request->permanent_district;
       $data['permanent_location']=$request->permanent_location;
       $data['posted_date']=date('Y-m-d');
            $image=$request->file('photo');
            $image_ext=$image->getClientOriginalExtension();
            $image_name=time().'.'.$image_ext;
            $image->move('images/tutors-image',$image_name);
       $data['tutor_image']=$image_name;
       $data['register_id']=$registration_id->login_id;

       $dataSave=DB::table('tutor_biodata')->insert($data);
       Session::put('message','Add Biodata Successfully');
       return redirect('/tuitionoffer/tutor/biodataForm')
            ->with('registration_id',$registration_id);

        //return response()->json(array('status'=>'success','value'=>$registration_id));
    } 
    public function tutorsdivition(Request $request){
        $division=$request->present_division;
        $getdistrict=district::where('division_name',$division)->get();

        $getdistrict_record=array();
        foreach($getdistrict as $eachdistrict){
            $getdistrict_record[]=array(
                'district_name'=>$eachdistrict->name
            );
        }
        return response()->json(array('status'=>'success','getdistrict'=>$getdistrict_record));
    } 
    public function permanentdivition(Request $request){
        $division=$request->permanent_division;
        $getdistrict=district::where('division_name',$division)->get();

        $getdistrict_record=array();
        foreach($getdistrict as $eachdistrict){
            $getdistrict_record[]=array(
                'district_name'=>$eachdistrict->name
            );
        }
        return response()->json(array('status'=>'success','getdistrict'=>$getdistrict_record));
    }
    public function getBiodata(Request $request){
        $tutor_id=$request->tutor_id;
        $gettutorData=tutorBiodata::where('tutor_id',$tutor_id)
             ->first();
        return response()->json(array('status'=>'success','gettutorData'=>$gettutorData));
    }
}
