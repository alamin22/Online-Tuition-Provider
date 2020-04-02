@extends('layouts.sourchfile')
@section('title')
	Tuition
@endsection
@section('provider')

   <div class="container-fluid" style="margin-top:80px">
   	<div class="row">
      @foreach($tuition_provider as $eachprovider)
 				<div class="col-12 con-sm-12 col-md-4 col-lg-4 col-xl-4">
 					<div class="card mt-4">
 						<div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12">
 						    <div class="row">
                    <div class="col-12 con-sm-12 col-md-4 col-lg-4 col-xl-4 nopadding">
                      <div class="card-body">
                        <img src="{{asset('images/human/provider.png')}}" width="110" height="120">
                      </div>  
                    </div>
                     <div class="col-12 con-sm-12 col-md-7 col-lg-7 col-xl-7" style="font-size: 14px">
                      <div class="card-body">
                        <b>Need A Tutor For</b>
                        <section><b>Class : </b>{{$eachprovider->class_name}}</section>
                        <section><b>Tuition Subject :</b> {{$eachprovider->tuition_subject}}</section>
                        <section><b>Location : </b>{{$eachprovider->contact_address}}</section>
                         <section><b>Posted Date : </b>{{$eachprovider->posted_date}}</section>
                      </div>  
                    </div>     
                 </div>
                 <div class="row">
                   <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12 text-right">
                      <h3> <button data-toggle="modal" data-target="#providerModal" class="text-center" onclick="viewTuitiondetail({{$eachprovider->provider_id }})"><i class="fas fa-eye"></i></button></h3>
                   </div>
                 </div>
					    </div>
 					</div>
 				</div>
      @endforeach
 		</div>
   </div>

   {{-- Start modal --}}
    <div class="modal fade" id="providerModal" tabindex="-1" role="dialog"         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tuition Detail Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <div class="row">
                    <div class="col-12 con-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
                       <img src="{{asset('images/human/provider.png')}}" width="130" height="150">
                    </div>
                    <div class="col-12 con-sm-12 col-md-7 col-lg-7 col-xl-7">
                       <div class="row">
                         <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                           <strong>Name :</strong>
                         </div>
                         <div class="col-12 con-sm-12 col-md-7 col-lg-7 col-xl-7">
                           <p id="name"></p>
                         </div>
                       </div>
                       <div class="row">
                         <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                           <strong>Class :</strong>
                         </div>
                         <div class="col-12 con-sm-12 col-md-7 col-lg-7 col-xl-7">
                           <p id="class"></p>
                         </div>
                       </div>
                        <div class="row">
                         <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                           <strong>Gender :</strong>
                         </div>
                         <div class="col-12 con-sm-12 col-md-7 col-lg-7 col-xl-7">
                           <p id="gender"></p>
                         </div>
                       </div>
                       <div class="row">
                         <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                           <strong>Institution :</strong>
                         </div>
                         <div class="col-12 con-sm-12 col-md-7 col-lg-7 col-xl-7">
                           <p id="institute"></p>
                         </div>
                       </div>
                    </div>
                  </div>
                </div>
           
            <div class="card-header">
              <div class="row">
                <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <h5>Tuition Details</h5>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="row">
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>Subject :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <p id="subject"></p>
                  </div> 
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <strong>Day in a Week :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <p id="day_week"></p>
                  </div>
                </div> 
                <div class="row">
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>Hire Date :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <p id="hire"></p>
                  </div> 
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>Salary :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <p id="salary"></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>Requirment</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <p id="requirement"></p>
                  </div> 
              </div>
              </div>
            </div>
            <div class="card-header">
              <div class="row">
                <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <h5>Contact Information</h5>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="row">
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>Division :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <p id="division"></p>
                  </div> 
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>District :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <p id="district"></p>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>Location :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <p id="location"></p>
                  </div> 
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>Phone No :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <p id="phone"></p>
                  </div>
              </div>
               <div class="row">
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>Email :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <p id="email"></p>
                  </div> 
              </div>
            </div>
          </div>
        </div>
            <div class="modal-footer">
                <button type="button" style="border-radius: 23px" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
  function viewTuitiondetail(id){

      $.ajax({
        url:"{{route('users.viewTuitiondetail')}}",
        type:"GET",
        data:{
          id:id
        },
        datatype:"json",
        success:function(data){
           console.log(data);
           var json_data=data.gettuitionData;
         var name='<p>'+json_data.first_name+' '+json_data.last_name+'<p>';
         var classs='<p>'+json_data.class_name+'<p>';
         var gender='<p>'+json_data.student_gender+'<p>';
         var institute='<p>'+json_data.institute_name+'<p>';
         var subject='<p>'+json_data.tuition_subject+'<p>';
         var week_day='<p>'+json_data.week_day+'<p>';
         var hire='<p>'+json_data.hire_date+'<p>';
         var requirement='<p>'+json_data.comments+'<p>';
         var salary='<p>'+json_data.salary+'<p>';

         var division='<p>'+json_data.division+'<p>';
         var district='<p>'+json_data.district+'<p>';
         var location='<p>'+json_data.contact_address+'<p>';
         var phone='<p>'+json_data.phone_number+'<p>';
         var email='<p>'+json_data.email_address+'<p>';

          $("#name").html(name);
          $("#class").html(classs);
          $("#gender").html(gender);
          $("#institute").html(institute);
          $("#subject").html(subject);
          $("#hire").html(hire);
          $("#day_week").html(week_day);
          $("#salary").html(salary);
          $("#requirement").html(requirement);

          $("#division").html(division);
          $("#district").html(district);
          $("#location").html(location);
          $("#phone").html(phone);
          $("#email").html(email);
        },
        error:function(data){
          console.log(data);

        }
      });
    }
</script>

@endsection
