@extends('layouts.sourchfile')
@section('title')
 Tuitionoffer
@endsection

@section('banner')
<div style="background: #7667ae">
<div id="multi-item-example" class="carousel slide carousel-multi-item " data-ride="carousel">

 
  <div class="carousel-inner" role="listbox">

    <!--First slide-->
<div style="margin-top: 100px;">
    <div class="carousel-item active">
    <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12">
    	<div class="row">
    	
      <div class="col-12 con-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
        <div class="card mb-2">
          <img class="card-img-top"
            src="{{asset('images/info_pic/register.jpg')}}"
            alt="Card image cap" width="260" height="258.5">
          <div class="card-body">
            <h4 class="card-title">Registration</h4>
            <p class="card-text">Are You Tution Seeker ? Registration Here First And Add Your Biodata.</p>
            <a data-toggle="modal" data-target="#exampleModalCenter" class="btn" style="background-color:#afd578;color: white;border-radius:30px; ">Registration</a>
          </div>
        </div>
      </div>

      <div class="col-12 con-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
        <div class="card mb-2">
          <img class="card-img-top"
            src="{{asset('images/info_pic/provider.jpg')}}"
            alt="Card image cap" width="260" height="258.5">
          <div class="card-body">
            <h4 class="card-title">Tuition Post</h4>
            <p class="card-text"> Are You Student Guardiant ? To Geting parfect Tutor Here Click Here And Post Your Requirment.</p>
            <a href="{{route('users.tuitionProviderPost')}}" class="btn" style="background-color:#afd578;color: white;border-radius:30px">Post</a>
          </div>
        </div>
      </div>

      <div class="col-12 con-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
        <div class="card mb-2">
          <img class="card-img-top"
            src="{{asset('images/info_pic/biodata.jpg')}}"
            alt="Card image cap" width="260" height="258.5">
          <div class="card-body">
            <h4 class="card-title">Add Biodata</h4>
            <p class="card-text">Tutor Who Seek Tuition Add Their Biodata for Tuition Provider</p>
            <a href="{{route('users.tutorBiodataForm')}}" class="btn" style="background-color:#afd578;color: white;border-radius:30px">Add Biodata</a>
          </div>
        </div>
      </div>

    </div>
    </div>
   </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class="carousel-item">
    	<div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12">
    	<div class="row"> 
      <div class="col-12 con-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
        <div class="card mb-2">
          <img class="card-img-top"
            src="{{asset('images/info_pic/login.jpg')}}" alt="Card image cap" width="260" height="280">
          <div class="card-body">
            <h4 class="card-title">User Login</h4>
            <p class="card-text">Register User Access Their Account With Login</p>
            <a data-toggle="modal" data-target="#exampleModalCenter" class="btn" style="background-color:#afd578;color: white;border-radius:30px">Login</a>
          </div>
        </div>
      </div>

      <div class="col-12 con-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
        <div class="card mb-2">
          <img class="card-img-top"
            src="{{asset('images/info_pic/connect.jpg')}}" alt="Card image cap" width="260" height="280">
          <div class="card-body">
            <h4 class="card-title">Connect</h4>
            <p class="card-text">Connect to Tuition Provider</p>
            <a class="btn" style="background-color:#afd578;color: white;border-radius:30px">Connect</a>
          </div>
        </div>
      </div>

      <div class="col-12 con-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
        <div class="card mb-2">
          <img class="card-img-top"
            src="{{asset('images/info_pic/about.jpg')}}" alt="Card image cap" width="260" height="280">
          <div class="card-body">
            <h4 class="card-title">Knowledge About Tuition Offer</h4>
            <p class="card-text">Click to Know More About Tuition Offer Information</p>
            <a class="btn" href="{{route('users.tuitionofferAbout')}}" style="background-color:#afd578;color: white;border-radius:30px">About </a>
          </div>
        </div>
      </div>
</div>
</div>
    </div>

    <!--/.Second slide-->

    <!--Third slide-->
    <div class="carousel-item">
<div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12">
    	<div class="row"> 
      <div class="col-12 con-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
        <div class="card mb-2">
          <img class="card-img-top"
            src="{{asset('images/info_pic/tutors.jpg')}}" alt="Card image cap" width="260" height="280">
          <div class="card-body">
            <h4 class="card-title">Tutor Biodata</h4>
            <p class="card-text">Click to See Tuition Interested Tutors Biodata</p>
            <a href="{{route('users.getTutorPage')}}" class="btn" style="background-color:#afd578;color: white;border-radius:30px">Tutors</a>
          </div>
        </div>
      </div>

      <div class="col-12 con-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
        <div class="card mb-2">
          <img class="card-img-top"
            src="{{asset('images/info_pic/help.jpg')}}" alt="Card image cap" width="260" height="280">
          <div class="card-body">
            <h4 class="card-title">Help</h4>
            <p class="card-text">Any Help From TuitionOffer Click Here</p>
            <a class="btn" href="{{route('users.tuitionofferHelp')}}" style="background-color:#afd578;color: white;border-radius:30px">Help</a>
          </div>
        </div>
      </div>

      <div class="col-12 con-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
        <div class="card mb-2">
          <img class="card-img-top"
            src="{{asset('images/info_pic/Comment.jpg')}}" alt="Card image cap" width="260" height="280">
          <div class="card-body">
            <h4 class="card-title">Comments</h4>
            <p class="card-text">Users Any Query Comment Here</p>
            <a class="btn" href="{{route('users.userComments')}}" style="background-color:#afd578;color: white;border-radius:30px">Comments</a>
          </div>
        </div>
      </div>
   </div>
  </div>
    </div>
  </div>
    <!--/.Third slide-->

  </div>
  <!--/.Slides-->
   
</div>

 
  </div>

    <div class=" col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12" style="background: #7667ae;height: 100px">
      <div class="row">
        <ol class="carousel-indicators">
      <li data-target="#multi-item-example" data-slide-to="0"></li>
      <li data-target="#multi-item-example" data-slide-to="1"></li>
      <li data-target="#multi-item-example" data-slide-to="2"></li>
    </ol>  
      </div>
  
  </div>

@endsection

@section('container')

  <div id="container">
  	 <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12">
  	 	<div class="card-body">
  	 		<div class="row">
  	 			<div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" style="color: #7667ae">
  	 				<h1>Tuition Offer</h1>
  	 				<strong> There is a tuition crisis and it`s very hard to find tuitions for tuitions seeker. Also that is not easy forthe tuition provider to recruit perfect tuition seeker what they exactly want. So, this system helps the tuition provider view their profile from database and contact if they expect from those tuition seeker to be suitable for particular tuition.</strong>
  	 			</div>	
  	 		</div>
  	 		<div class="row" id="container_section">
  	 			<div class="col-12 con-sm-12 col-md-6 col-lg-6 col-xl-6" style="background: #7667ae;color:#7667ae">
  	 				<div class="card">
  	 				    <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12" >
  	 				    	<p></p>
		  	 				<h5>About Tutor</h5>
		  	 				<p> There is a tuition crisis and it`s very hard to find tuitions for tuitions seeker. Also that is not easy forthe tuition provider to recruit perfect tuition seeker what they exactly want. So, this system helps the tuition provider view their profile from database and contact if they expect from those tuition seeker to be suitable for particular tuition.There is a tuition crisis and it`s very hard to find tuitions for tuitions seeker. Also that is not easy forthe tuition provider to recruit perfect tuition seeker what they exactly want.</p>
  	 			        </div>
  	 				</div>	
  	 			</div>
  	 			<div class="col-12 con-sm-12 col-md-6 col-lg-6 col-xl-6" style="background: #7667ae;color:#7667ae">
  	 				<div class="card">
  	 					<div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12">
  	 						<p></p>
		  	 				<h5>About Tuition Provider</h5>
		  	 				<p> There is a tuition crisis and it`s very hard to find tuitions for tuitions seeker. Also that is not easy forthe tuition provider to recruit perfect tuition seeker what they exactly want. So, this system helps the tuition provider view their profile from database and contact if they expect from those tuition seeker to be suitable for particular tuition.There is a tuition crisis and it`s very hard to find tuitions for tuitions seeker. Also that is not easy forthe tuition provider to recruit perfect tuition seeker what they exactly want.</p>
  	 					</div>
  	 				</div>
  	 			</div>
  	 		</div>
  	 		<div class="card" id="provider_section" style="background-color:#afd578;color: white;margin-top: 30px;">
 				<div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
 					<div class="card-body">
 						<h3>Tuition Provider</h3>
 						<p>Tuition Provider Recent Posted</p>
 					</div>
 				</div>
 			</div>
 			<div class="row" id="provider_post">
        @foreach($tuition_provider as $eachprovider)
 				<div class="col-12 con-sm-12 col-md-4 col-lg-4 col-xl-4">
 					<div class="card mt-4">
 						<div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12">
 						     <div class="row">
                    <div class="col-12 con-sm-12 col-md-4 col-lg-4 col-xl-4">
                      <div class="card-body">
                        <img src="{{asset('images/human/provider.png')}}" width="110" height="120">   
                      </div>  
                    </div>
                     <div class="col-12 con-sm-12 col-md-8 col-lg-8 col-xl-8" style="font-size: 14px">
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
                      <h3> <button class="text-center disabled"><i class="fas fa-eye"></i></button></h3>
                   </div>
                 </div>
					    </div>
 					</div>
 				</div>
        @endforeach
         <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12 text-right" id="provider_post2" >
          <div class="row">
             <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12 text-right">
               <div class="card-header">
                  <a  class="btn" href="{{route('users.getProviderPage')}}" style="background-color:#afd578;color: white;border-radius: 30px">More Student...</a>
               </div> 
               </div>  
          </div>  
        </div>
 			</div>

<!-- Tutor section -->

 			<div class="card" id="provider_section" style="background-color:#62b3a0;color: white;margin-top: 30px;">
 				<div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
 					<div class="card-body">
 						<h3>Tutors</h3>
 						<p>Tutor Recent Add Biodata</p>
 					</div>
 				</div>
 			</div>
 			<div class="row mt-4" id="tutor_post">
          @foreach($tutors_data as $eachbiodata)
 				 <div class="col-12 con-sm-12 col-md-4 col-lg-4 col-xl-4">
        
          <div class="card mt-2">
            <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12">
                 <div class="row">
                    <div class="col-12 con-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
                      <div class="card-body">
                        <img src="{{asset('images/tutors-image/'.$eachbiodata->tutor_image)}}" width="110" height="120">   
                      </div>  
                    </div>
                     <div class="col-12 con-sm-12 col-md-6 col-lg-6 col-xl-6" style="font-size: 12px">
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
                      <h3> <button class="text-center disabled" style="color: #62b3a0"><i class="fas fa-eye"></i></button></h3>
                   </div>
                 </div>
              </div>
          </div>
         
        </div>
         @endforeach
  	 	</div> 	
  	</div>
      <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12 text-right" id="provider_post2" >
        <div class="row">
           <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12 text-right">
             <div class="card-header">
                <a  class="btn" href="{{route('users.getTutorPage')}}" style="background-color:#62b3a0;color: white;border-radius: 30px">More Tutor...</a>
             </div> 
             </div>  
        </div>  
      </div>
  </div>

  <script>
    $("#registration_button").click(function(){
      var l=$("#last_name").val();
      $.ajax({
        url:"{{route('users.registration')}}",
        type:"POST",
        data:{
          l:l
        },
        datatype:"json",
        success:function(data){
          console.log(data);
        },
        error:function(data){
          console.log(data);
        }
      });
    });
 </script>

@endsection

