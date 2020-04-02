@extends('layouts.sourchfile')
@section('title')
	User Profile
@endsection
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

@section('tutorProfilesection')
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
							    <button class="dropdown-item" data-toggle="modal" data-target="#commentmodal">Comment</button>
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
                       <img src="{{asset('images/tutors-image/'.$login_tutor->tutor_image)}}" width="180" height="190">
                    </div>
                    <div class="col-12 con-sm-12 col-md-7 col-lg-7 col-xl-7 mt-2">
                       <div class="row">
                         <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                           <strong>Name :</strong>
                         </div>
                         <div class="col-12 con-sm-12 col-md-7 col-lg-7 col-xl-7">
                           <p id="name">{{$login_tutor->first_name}} {{$login_tutor->last_name}}</p>
                         </div>
                       </div>
                       <div class="row">
                         <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                           <strong>Mobile :</strong>
                         </div>
                         <div class="col-12 con-sm-12 col-md-7 col-lg-7 col-xl-7">
                           <p id="mobile">{{$login_tutor->phone_no}}</p>
                         </div>
                       </div>
                        <div class="row">
                         <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                           <strong>Email :</strong>
                         </div>
                         <div class="col-12 con-sm-12 col-md-7 col-lg-7 col-xl-7">
                           <p id="email">{{$login_tutor->tutor_email}}</p>
                         </div>
                       </div>
                       <div class="row">
                         <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                           <strong>Gender :</strong>
                         </div>
                         <div class="col-12 con-sm-12 col-md-7 col-lg-7 col-xl-7">
                           <p id="gender">{{$login_tutor->gender}}</p>
                         </div>
                       </div>
                    </div>
                  </div>
                </div>
           
            <div class="card-header mt-4">
              <div class="row">
                <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <h5>Qualification Details</h5>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="row">
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>Profession :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <p id="Profession">{{$login_tutor->occupation}}</p>
                  </div> 
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>Education Lebel :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <p id="Edu_lebel">{{$login_tutor->education_lebel }}</p>
                  </div>
                </div> 
                <div class="row">
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>Prefer Subject :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <p id="subject">{{$login_tutor->prefer_subject}}</p>
                  </div> 
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>Expected Salary :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <p id="ex_salary">{{$login_tutor->expected_salary}}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>Institute Name</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <p id="Institute">{{$login_tutor->institute}}</p>
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
                    <p id="pre_division">{{$login_tutor->present_division}}</p>
                  </div> 
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>District :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <p id="pre_district">{{$login_tutor->present_district}}</p>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>Location :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <p id="pre_location">{{$login_tutor->present_location}}</p>
                  </div> 
              </div>
            </div>
          </div>
          <div class="card-header">
            <div class="row">
              <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h5>Parmanent Address</h5>
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
                    <p id="par_division">{{$login_tutor->permanent_division }}</p>
                  </div> 
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>District :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <p id="par_district">{{$login_tutor->permanent_district}}</p>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12 con-sm-12 col-md-2 col-lg-2 col-xl-2">
                    <strong>Location :</strong>
                  </div>
                  <div class="col-12 con-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <p id="par_location">{{$login_tutor->permanent_location}}</p>
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
          <input type="text" value="{{$login_tutor->first_name}} {{$login_tutor->last_name}}" id="user_tutor_name" class="form-control" readonly>
        </div>

        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" value="{{$login_tutor->tutor_email}}" id="user_tutor_email" class="form-control" readonly>
         <!--  <label data-error="wrong" data-success="right" for="form29"></label> -->
        </div>

        <div class="md-form">
          <i class="fas fa-pencil prefix grey-text"></i>
          <textarea type="text" id="user_tutor_comment" class="md-textarea form-control" rows="4"></textarea>
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
     var useer_name=$("#user_tutor_name").val();
     var user_email=$("#user_tutor_email").val();
     var user_comment=$("#user_tutor_comment").val();
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