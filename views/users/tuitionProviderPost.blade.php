@extends('layouts.sourchfile')
@section('title')
	Tuition Provider Post
@endsection
@section('provider_post')
<div class="container-fluid" style="margin-top: 100px">
	<div class="card">
	   <form method="post" action="{{route('users.tuitionProviderPostSave')}}">
		  @csrf
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
				<div class="card-header">
					<h4>Fill Up The Form And Create Your Post</h4>
				</div>
			</div>
			<div class="card-body">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					
					<div class="row">
						<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
							<label for="first_name">First Name</label>
							<input type="text" class="form-control" id="first_name" name="first_name">
						</div>
						<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
							<label for="last_name">Last Name</label>
							<input type="text" class="form-control" id="last_name" name="last_name">
						</div>
						<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
							<label for="class_name">Class Name</label>
							<input type="text" class="form-control" id="class_name" name="class_name">
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
							<label for="institute_name">Institute Name</label>
							<input type="text" class="form-control" id="institute_name" name="institute_name">
						</div>
						<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
							<label for="tuition_subject">Tuition Subject</label>
							<input type="text" class="form-control" id="tuition_subject" name="tuition_subject">
						</div>
						<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
							<label for="day_week">Day In Week</label>
							<input type="number" class="form-control" id="week_day" name="week_day">
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
							<label for="salary_pay">Salary Pay</label>
							<input type="text" class="form-control" id="salary" name="salary">
						</div>
						<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
							<label for="tutor_gender">Required Tutor Gender</label>
							<select class="custom-select" id="tutor_gender " name="tutor_gender">
								<option value="" selected disabled>select Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select> 
						</div>
						<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
							<label for="student_gender">Student Gender</label>
							<select class="custom-select" id="student_gender" name="student_gender">
								<option value="" selected disabled>select Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select> 
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
							<label for="hire_date">Hire Date</label>
							<input type="date" class="form-control" id="hire_date" name="hire_date">
						</div>
						<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
							<label for="division">Division</label>
							<select class="custom-select" id="division" name="division">
								<option value="" selected disabled>select Division
								</option>
								@foreach($division as $eachdivision)
								<option value="{{$eachdivision->name}}">{{$eachdivision->name}}</option>
								@endforeach	
							</select> 
						</div>
						<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
							<label for="district">District</label>
							<select class="custom-select" id="district" name="district">
								<option value="" selected disabled>Select District
								</option>

							</select> 
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
							<label for="contact_address">Tuition Location</label>
							<input type="text" class="form-control" id="contact_address" name="contact_address">
						</div>
						<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
							<label for="email_address">Email Address</label>
							<input type="email" class="form-control" id="email_address" name="email_address">
						</div>
						<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
							<label for="phone_number">Phone Number</label>
							<input type="text" class="form-control" id="phone_number" name="phone_number">
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<label for="comments">Others Comment</label>
							<textarea rows="5" cols="" class="form-control" id="comments" name="comments"></textarea>
						</div>
					</div>
				
				</div>
			</div>
		</div>
		<div class="card-footer">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
						@php
						 $msg=Session::get('post_message');
						 if($msg){
						  echo '<div class="text-success">'.$msg.'</div>';
						  Session::put('post_message',null);
						}
						@endphp
						</div>
						<div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 text-center">
							<button class="btn btn-success" id="provider_post">Save</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">
	$("#division").change(function(){
		var division=$("#division").val();
	$.ajax({
        type:"GET",
        url:"{{route('users.tuitiondivition')}}",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data:{
          division:division
        },
       datatype:"json",
        success:function(data){
          console.log(data);
          html='';
          var get_district=data.getdistrict;
          for(var i=0;i<get_district.length;i++){
          	var array_data=get_district[i];
          	html+='<option value="'+array_data.district_name+'">'+array_data.district_name+'</option>';
          }
          $("#district").html(html);
          
        },
        error:function(data){
          console.log(data);
        },
      });
	});
</script>
@endsection

