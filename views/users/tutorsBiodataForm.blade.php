@extends('layouts.sourchfile')
@section('title')
	Tutor Biodata Form
@endsection
@section('tutors_biodata')
<div class="container-fluid" style="margin-top: 100px">
	<div class="card">
    <form method="POST" action="{{route('users.tutorBiodata')}}" enctype="multipart/form-data">
      @csrf
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
				<div class="card-header">
					<h4>Fill Up The Form And Add Your Biodata</h4>
				</div>
			</div>
			<div class="card-body">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="row">
           <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 text-center">
                <div class="wrapper">
                  <div class="box" >
                    <div class="js--image-preview" >
                    </div>
                    <div class="upload-options">
                      <label>
                     <input style="padding:15px;" type="file" name="photo" class="image-upload">
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">   
                <div class="row mt-2">
                    <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                       <label for="first_name">First Name</label>
                       <input type="text" class="form-control" id="first_name" name="first_name">
                    </div>
                    <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                       <label for="last_name">Last Name</label>
                       <input type="text" class="form-control" id="last_name" name="last_name">
                    </div>
                 </div> 
                 <div class="row mt-3">
                    <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                       <label for="phone_no">Phone No</label>
                       <input type="text" class="form-control" id="phone_no" name="phone_no">
                    </div>
                    <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                       <label for="tutor_email">Email Address</label>
                       <input type="text" class="form-control" id="tutor_email" name="tutor_email">
                    </div>
                 </div>
                 <div class="row mt-3">
                    <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                       <label for="gender">Gender</label>
                       <select class="custom-select" id="gender" name="gender">
                          <option value="" selected disabled>Select</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                       </select>
                    </div>
                    <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                       <label for="occupation">Profession</label>
                       <input type="text" class="form-control" id="occupation" name="occupation">
                    </div>
                 </div>
              </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <label for="prefer_subject">Prefer Tuition Subject</label>
                    <input type="text" class="form-control" id="prefer_subject" name="prefer_subject">
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <label for="expected_salary">Expected Salary</label>
                    <input type="text" class="form-control" id="expected_salary" name="expected_salary">
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <label for="education_lebel">Education Level</label>
                    <input type="text" class="form-control" id="education_lebel" name="education_lebel">
                </div>
            </div> 
            <div class="row mt-3">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <label for="institute">Institute Name</label>
                    <input type="text" class="form-control" id="institute" name="institute">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="background: #dddd">
                    <label class="mt-2">Present Address</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                   <label for="present_division">Division</label>
                   <select class="custom-select" id="present_division" name="present_division">
                      <option value="" selected disabled>Select</option>
                       @foreach($division as $eachdivision)
                        <option value="{{$eachdivision->name}}">{{$eachdivision->name}}</option>
                      @endforeach
                   </select>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                   <label for="present_district">District</label>
                   <select class="custom-select" id="present_district" name="present_district">
                      <option value="need" selected disabled>Select</option>

                   </select>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <label for="present_location">Location</label>
                    <input type="text" class="form-control" id="present_location" name="present_location">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="background: #dddd">
                    <label class="mt-2">Parmanent Address</label>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                   <label for="permanent_division">Division</label>
                   <select class="custom-select" id="permanent_division" name="permanent_division">
                      <option value="" selected disabled>Select</option>
                       @foreach($division as $eachdivision)
                        <option value="{{$eachdivision->name}}">{{$eachdivision->name}}</option>
                      @endforeach
                   </select>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                   <label for="permanent_district">District</label>
                   <select class="custom-select" id="permanent_district" name="permanent_district">
                      <option value="need" selected disabled>Select</option>
                     
                   </select>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <label for="permanent_location">Location/P.O</label>
                    <input type="text" class="form-control" id="permanent_location" name="permanent_location">
                    <input type="hidden" id="add_date" value="<?= date('Y-m-d'); ?>" name="">
                </div>
            </div>
				</div>
			</div>
		</div>
    <div class="card-footer">
       <div class="row">
         <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
            @php
             $msg=Session::get('message');
             if($msg){
              echo '<div class="text-success">'.$msg.'</div>';
              Session::put('message',null);
            }
            @endphp
         </div>
         <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
          <input type="submit" class="btn btn-success" value="Save">
          <!--  <button class="btn btn-success" id="tutor_biodata_button">Save</button> -->
         </div>
       </div>
    </div>
  </form>
	</div>
</div>

<script type="text/javascript">
  $("#present_division").change(function(){
    var present_division=$("#present_division").val();
  $.ajax({
        type:"GET",
        url:"{{route('users.tutorsdivition')}}",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data:{
          present_division:present_division
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
          $("#present_district").html(html);
          
        },
        error:function(data){
          console.log(data);
        },
      });
  });
   $("#permanent_division").change(function(){
    var permanent_division=$("#permanent_division").val();
  $.ajax({
        type:"GET",
        url:"{{route('users.permanentdivition')}}",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data:{
          permanent_division:permanent_division
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
          $("#permanent_district").html(html);
          
        },
        error:function(data){
          console.log(data);
        },
      });
  });
</script>
<!-- upload photo preview -->

<script type="text/javascript">
function initImageUpload(box) {
  let uploadField = box.querySelector('.image-upload');

  uploadField.addEventListener('change', getFile);

  function getFile(e){
    let file = e.currentTarget.files[0];
    checkType(file);
  }
  
  function previewImage(file){
    let thumb = box.querySelector('.js--image-preview'),
        reader = new FileReader();

    reader.onload = function() {
      thumb.style.backgroundImage = 'url(' + reader.result + ')';
    }
    reader.readAsDataURL(file);
    thumb.className += ' js--no-default';
  }

  function checkType(file){
    let imageType = /image.*/;
    if (!file.type.match(imageType)) {
      throw 'Datei ist kein Bild';
    } else if (!file){
      throw 'Kein Bild gewählt';
    } else {
      previewImage(file);
    }
  }
  
}

// initialize box-scope
var boxes = document.querySelectorAll('.box');

for (let i = 0; i < boxes.length; i++) {
  let box = boxes[i];
  initDropEffect(box);
  initImageUpload(box);
}



/// drop-effect
function initDropEffect(box){
  let area, drop, areaWidth, areaHeight, maxDistance, dropWidth, dropHeight, x, y;
  
  // get clickable area for drop effect
  area = box.querySelector('.js--image-preview');
  area.addEventListener('click', fireRipple);
  
  function fireRipple(e){
    area = e.currentTarget
    // create drop
    if(!drop){
      drop = document.createElement('span');
      drop.className = 'drop';
      this.appendChild(drop);
    }
    // reset animate class
    drop.className = 'drop';
    
    // calculate dimensions of area (longest side)
    areaWidth = getComputedStyle(this, null).getPropertyValue("width");
    areaHeight = getComputedStyle(this, null).getPropertyValue("height");
    maxDistance = Math.max(parseInt(areaWidth, 10), parseInt(areaHeight, 10));

    // set drop dimensions to fill area
    drop.style.width = maxDistance + 'px';
    drop.style.height = maxDistance + 'px';
    
    // calculate dimensions of drop
    dropWidth = getComputedStyle(this, null).getPropertyValue("width");
    dropHeight = getComputedStyle(this, null).getPropertyValue("height");
    
    // calculate relative coordinates of click
    // logic: click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center
    x = e.pageX - this.offsetLeft - (parseInt(dropWidth, 10)/2);
    y = e.pageY - this.offsetTop - (parseInt(dropHeight, 10)/2) - 30;
    
    // position drop and animate
    drop.style.top = y + 'px';
    drop.style.left = x + 'px';
    drop.className += ' animate';
    e.stopPropagation();
    
  }
}
</script>

@endsection