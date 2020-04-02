@extends('layouts.sourchfile')
@section('title')
	User Profile
@endsection
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
@section('usersection')
<div class="container-fluid" style="margin-top: 100px">

	<div class="card">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
				<div class="card-header">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10 mt-2">
							<h4>User Profile</h4>
						</div>
						<div class="col-12 col-sm-12 col-md2 col-lg-2 col-xl-2">
							  <div class="dropdown">
							  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
							    Options
							  </button>
							  <div class="dropdown-menu" style="background: #dddd">
							    <a class="dropdown-item" href="#">Update Post</a>
							    <a class="dropdown-item" data-toggle="modal" data-target="#commentmodal">Comment</a>
							    <a class="dropdown-item" href="#">Delete Post</a>
							    <a class="dropdown-item" href="{{route('users.logout')}}">Logout</a>
							  </div>
							</div> 
						</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card-body">
				  <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <div class="row">
                    <div class="col-12 con-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
                       <img src="{{asset('images/human/provider.png')}}" width="130" height="140">
                    </div>
                    <div class="col-12 con-sm-12 col-md-7 col-lg-7 col-xl-7 mt-2">
                       <div class="row">
                         <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                           <strong>Name :</strong>
                         </div>
                         <div class="col-12 con-sm-12 col-md-7 col-lg-7 col-xl-7">
                           <p id="name">{{$login_provider->first_name}} {{$login_provider->last_name}}</p>
                         </div>
                       </div>
                       <div class="row">
                         <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                           <strong>Class :</strong>
                         </div>
                         <div class="col-12 con-sm-12 col-md-7 col-lg-7 col-xl-7">
                           <p id="class">{{$login_provider->class_name}}</p>
                         </div>
                       </div>
                        <div class="row">
                         <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                           <strong>Gender :</strong>
                         </div>
                         <div class="col-12 con-sm-12 col-md-7 col-lg-7 col-xl-7">
                           <p id="gender">{{$login_provider->student_gender }}</p>
                         </div>
                       </div>
                       <div class="row">
                         <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                           <strong>Institution :</strong>
                         </div>
                         <div class="col-12 con-sm-12 col-md-7 col-lg-7 col-xl-7">
                           <p id="institute">{{$login_provider->institute_name }}</p>
                         </div>
                       </div>
                    </div>
                  </div>
                </div>
           
            <div class="card-header mt-4">
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
                    <p id="subject">{{$login_provider->tuition_subject  }}</p>
                  </div> 
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>Day in a Week :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <p id="day_week">{{$login_provider->week_day }}</p>
                  </div>
                </div> 
                <div class="row">
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>Hire Date :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <p id="hire">{{$login_provider->hire_date }}</p>
                  </div> 
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>Salary :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <p id="salary">{{$login_provider->salary }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>Requirment</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <p id="requirement">{{$login_provider->comments }}</p>
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
                    <p id="division">{{$login_provider->division }}</p>
                  </div> 
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>District :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <p id="district">{{$login_provider->district }}</p>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>Location :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <p id="location">{{$login_provider->contact_address }}</p>
                  </div> 
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>Phone No :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <p id="phone">{{$login_provider->phone_number }}</p>
                  </div>
              </div>
               <div class="row">
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>Email :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <p id="email">{{$login_provider->email_address }}</p>
                  </div> 
              </div>
            </div>
          </div>
			</div>
		</div>
	</div>
  <!-- start modal -->
 <div class="modal fade" id="commentmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Write Comments</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" value="{{$login_provider->first_name}} {{$login_provider->last_name}}" id="useer_name" class="form-control" readonly>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" value="{{$login_provider->email_address}}" id="user_email" class="form-control" readonly>
         <!--  <label data-error="wrong" data-success="right" for="form29"></label> -->
        </div>

        <div class="md-form">
          <i class="fas fa-pencil prefix grey-text"></i>
          <textarea type="text" id="user_comment" class="md-textarea form-control" rows="4"></textarea>
          <label data-error="wrong" data-success="right" for="comments">Your Comments</label>
        </div>

      </div>
      <div class="modal-footer d-flex float-right">
        <button class="btn btn-success" id="comments_button" style="border-radius: 22px">Save<i class="fas fa-paper-plane-o ml-1"></i></button>
       <button type="button" style="border-radius: 23px;display: none" class="btn btn-danger" id="closeModal" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
<script>
    $("#comments_button").click(function(){
     var useer_name=$("#useer_name").val();
     var user_email=$("#user_email").val();
     var user_comment=$("#user_comment").val();
      $.ajax({
         type:"POST",
         url:"{{route('users.userCommentSave')}}",
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         data:{
           useer_name:useer_name,
           user_email:user_email,
           user_comment:user_comment
         },
        datatype:"json",
         success:function(data){
           console.log(data);
           $("#closeModal").click();
         },
         error:function(data){
          console.log(data);
        },
      });
    });
</script>
@endsection

 