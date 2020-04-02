@extends('layouts.sourchfile')
@section('title')
	Tutor
@endsection
@section('tutors')

    <div class="container-fluid" style="margin-top: 80px">
   		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
   			<div class="row mt-4">
   				<div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 m-auto" >
				@foreach($getBiodata as $eachbiodata)
		          <div class="card mt-3">
		            <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12">

		                 <div class="row">
		                    <div class="col-12 con-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
		                      <div class="card-body">
		                        <img src="{{asset('images/tutors-image/'.$eachbiodata->tutor_image)}}" width="160" height="170" >   
		                      </div>  
		                    </div>
		                     <div class="col-12 con-sm-12 col-md-6 col-lg-6 col-xl-6" style="font-size: 16px;line-height: 37px">
		                      <div class="card-body">
		                        <b>Interested For Tuition</b>
		                        <section><b>Name :</b> {{$eachbiodata->first_name}} {{$eachbiodata->last_name}}</section>
		                        <section><b>Profession :</b> {{$eachbiodata->occupation}}</section>
		                        <section><b>Education Lebel :</b> {{$eachbiodata->education_lebel}}</section>
		                        <section><b>Current City :</b> {{$eachbiodata->present_district}}</section>
		                      </div>  
		                    </div>     
		                 </div>
		                 <div class="row">
		                   <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12 text-right">
		                      <h4> <button data-toggle="modal" data-target="#tutorModal" onclick="getBiodata({{$eachbiodata->tutor_id}})" style="color: #62b3a0"><i class="fas fa-eye"></i></button></h4>
		                   </div>
		                 </div>
		              </div>
		          </div>
		          @endforeach
   				</div>
   			</div>
   		</div>
   </div>

   {{-- Start modal --}}
    <div class="modal fade" id="tutorModal" tabindex="-1" role="dialog"         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Tutor Detail Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <div class="row">
                    <div class="col-12 con-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
                      <input type="hidden" value="{{asset('images/tutors-image/')}}" id="images_hidden" name="">
                      <img src="" id="image_id" width="130" height="150">
                      <!--  <img src="{{asset('images/human/provider.png')}}" width="130" height="150"> -->
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
                           <strong>Phone :</strong>
                         </div>
                         <div class="col-12 con-sm-12 col-md-7 col-lg-7 col-xl-7">
                           <p id="phone"></p>
                         </div>
                       </div>
                        <div class="row">
                         <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                           <strong>Email :</strong>
                         </div>
                         <div class="col-12 con-sm-12 col-md-7 col-lg-7 col-xl-7">
                           <p id="email"></p>
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
                    </div>
                  </div>
                </div>
           
            <div class="card-header mt-3">
              <div class="row">
                <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <h5>Education & prefer Details</h5>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="row">
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <strong>Education Lebel:</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <p id="education"></p>
                  </div> 
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <strong>Profession :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <p id="profession"></p>
                  </div>
                </div> 
                <div class="row">
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <strong>Prefer Subject :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <p id="prefer_subject"></p>
                  </div> 
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <strong>Expected Salary :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <p id="expected_salary"></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <strong>Institution Name :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <p id="institution"></p>
                  </div>       
                </div>
              </div>
            </div>
            <div class="card-header">
              <div class="row">
                <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <h5>Present Address</h5>
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
                    <p id="present_division"></p>
                  </div> 
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>District :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <p id="present_district"></p>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>Location :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <p id="present_location"></p>
                  </div> 
              </div> 
            </div>
          </div> 
          <div class="card-header">
              <div class="row">
                <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <h5>Permanent Address</h5>
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
                    <p id="permanent_division"></p>
                  </div> 
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>District :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <p id="permanent_district"></p>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>Location :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <p id="permanent_location"></p>
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
	function getBiodata(tutor_id){
		$.ajax({
			url:"{{route('users.getBiodata')}}",
			type:"GET",
			headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			data:{
				tutor_id:tutor_id
			},
			datatype:"JSON",
			success:function(data){
				console.log(data);
				var json_data=data.gettutorData;
				var name='<p>'+json_data.first_name+' '+json_data.last_name+'<p>';
				var phone='<p>'+json_data.phone_no+'<p>';
				var email='<p>'+json_data.tutor_email+'<p>';
				var gender='<p>'+json_data.gender+'<p>';
				var education='<p>'+json_data.education_lebel+'<p>';
				var profession='<p>'+json_data.occupation+'<p>';
				var prefer_subject='<p>'+json_data.prefer_subject+'<p>';
				var expected_salary='<p>'+json_data.expected_salary+'<p>';
				var present_division='<p>'+json_data.present_division+'<p>';
				var present_district='<p>'+json_data.present_district+'<p>';
				var present_location='<p>'+json_data.present_location+'<p>';
				var permanent_division='<p>'+json_data.permanent_division+'<p>';
				var permanent_district='<p>'+json_data.permanent_district+'<p>';
				var permanent_location='<p>'+json_data.permanent_location+'<p>';
				var institution='<p>'+json_data.institute+'<p>';
        var image_value=$("#images_hidden").val();
        $("#image_id").attr('src',''+image_value+'/'+json_data.tutor_image+'');

				$("#name").html(name);
				$("#phone").html(phone);
				$("#email").html(email);
				$("#gender").html(gender);
				$("#education").html(education);
				$("#profession").html(profession);
				$("#prefer_subject").html(prefer_subject);
				$("#expected_salary").html(expected_salary);
				$("#institution").html(institution);
				$("#present_division").html(present_division);
				$("#present_district").html(present_district);
				$("#present_location").html(present_location);
				$("#permanent_division").html(permanent_division);
				$("#permanent_district").html(permanent_district);
				$("#permanent_location").html(permanent_location);
        $("#tutor_image").html(tutor_image);
			},
			error:function(data){
				console.log(data);
			},
		});
	}
</script>


@endsection
