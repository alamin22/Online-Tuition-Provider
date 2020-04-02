<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <script src="code.jquery.com/jquery-1.10.2.js"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('/css/mdb.css') }}" rel="stylesheet"> 
  <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet"> 
  <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet"> 
  <link href="{{ asset('/css/mdb.lite.css') }}" rel="stylesheet"> 
  <link href="{{ asset('/css/mdb.min.css') }}" rel="stylesheet"> 
  <link href="{{ asset('/css/animations-extended.min.css') }}" rel="stylesheet"> 
  <link href="{{ asset('/css/fontawesome.css') }}" rel="stylesheet"> 
  <link href="{{ asset('/css/style.css') }}" rel="stylesheet"> 

 <script type="text/javascript" src="{!! asset('js/bootstrap.js') !!}"></script>
 <script type="text/javascript" src="{!! asset('js/bootstrap.min.js') !!}"></script>
 <script type="text/javascript" src="{!! asset('js/jquery.js') !!}"></script>
 <script type="text/javascript" src="{!! asset('js/jquery.min.js') !!}"></script>
 <script type="text/javascript" src="{!! asset('js/mdb.js') !!}"></script>
 <script type="text/javascript" src="{!! asset('js/mdb.min.js') !!}"></script>
 <script type="text/javascript" src="{!! asset('js/popper.min.js') !!}"></script>
 <script type="text/javascript" src="{!! asset('js/popper.js') !!}"></script>
 <script type="text/javascript" src="{!! asset('js/modules/animations-extended.js') !!}"></script>
 <script type="text/javascript" src="{!! asset('js/modules/scrolling-navbar.min.js') !!}"></script>
 <script type="text/javascript" src="{!! asset('js/modules/fontawesome.js') !!}"></script>

 <meta name="csrf-token" content="{{csrf_token()}}">


</head>
<body>
  <div>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar" style="background: #7667ae">
        <a class="navbar-brand siteicon" href="{{route('users.tuitionofferHome')}}"><img src="{{asset('images/human/icon.png')}}" width="30" height="30" border-redius="15"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('users.tuitionofferHome')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('users.getProviderPage')}}">Tuition</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-user"></i>Sign In</a>
                </li> 
            </ul>
        </div>
    </nav>
  </div>
 <div>
    @yield('banner')
 </div>
 <div>
    @yield('container')
 </div> 
 <div>
    @yield('provider')
 </div>
 <div>
    @yield('provider_post')
 </div>
<div>
    @yield('tutors')
 </div>
  <div>
    @yield('tutors_biodata')
 </div> 
  <div>
    @yield('aboutTuition')
 </div>
<div>
    @yield('comments')
 </div>
 <div>
    @yield('helpCenter')
 </div>
<div>
    @yield('usersection')
 </div>
<div>
    @yield('tutorProfilesection')
 </div> 
 <!-- ****************start modal************* -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"  aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true">LOGIN</a>
                </li>
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
                <li class="nav-item">
                  <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                    aria-controls="pills-contact" aria-selected="false">REGISTRATION</a>
                </li>
              </ul>

            </div>
            <div class="modal-body">
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                 <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <form method="post" action="{{route('users.login')}}">
                        @csrf
                    <div class="row form-group">    
                        <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12 p-2">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" name="email">   
                        </div>
                        <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12 p-2">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="col-12 con-sm-12 col-md-12 col-lg-12 col-xl-12 p-2 text-right">
                          <b><a href="{{route('users.registration')}}">Are You Member Yet ? </a></b>&nbsp;
                           <input type="submit" class="btn" value="LOGIN" id="login_button" style="background-color:#7667ae;color:white;border-radius: 30px ">
                        <!--  <button class="btn" id="login_button" style="background-color:#7667ae;color:white;border-radius: 30px ">LOGIN</button> -->
                        </div>
                     
                    </div>  
                     </form>
                </div>
              </div>
             
              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
       <form method="POST" action="{{url('/tuitionoffer/registration')}}">
          @csrf
          <div class="row mt-2">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <lebel for="first_name">First Name</lebel>
              <input type="text" class="form-control" name="first_name" id="first_name" required>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <lebel for="last_name">Last Name</lebel>
              <input type="text" class="form-control" name="last_name" id="last_name" required>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <lebel for="email">Email Address</lebel>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <lebel for="password">Password</lebel>
              <input type="password" class="form-control" name="password" id="password" required>
            </div>
          </div> 
          <div class="row mt-2">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <lebel for="conf_password">Confirm Password</lebel>
              <input type="password" class="form-control" name="confirm_password" id="confirm_password" required><span class="text-danger error" ></span>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" id="message">

            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-right">

               <input class="btn"  type="submit" id="save_button" value="save" style="background-color:#7667ae;color:white;border-radius: 30px ">
             <!--  <button class="btn" id="registration_button" style="background-color:#7667ae;color:white;border-radius: 30px ">REGISTRATION</button> -->
            </div>
          </div>
        </form>
        </div>
              </div>
            </div>
               
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>



<!-- *************************End Modal********************** --> 

 <div>
  <footer class="page-footer font-small unique-color-dark">

  <div style="background-color:#586840;margin-top: 40px">
    <div class="container">
      <div class="row py-4 d-flex align-items-center">
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>

        </div>
      </div>
    </div>
  </div>

  <div class="container text-center text-md-left mt-5">
    <div class="row mt-3">
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold">Site Woner</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" >
        <p>There is a tuition crisis and it`s very hard to find tuitions for tuitions seeker. Also that is not easy forthe tuition provider to recruit perfect tuition seeker what they exactly want</p>

      </div>
   
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto">
        <p>
          <a href="{{route('users.tutorBiodataForm')}}">Add Biodata</a>
        </p>
         <p>
          <a href="{{route('users.getTutorPage')}}">Your Tutor</a>
        </p>
        <p>
          <a data-toggle="modal" data-target="#exampleModalCenter">Login</a>
        </p>
        <p>
          <a href="#!">Registration</a>
        </p>
        <p>
          <a href="{{route('users.tuitionofferHelp')}}">Help</a>
        </p>
      </div>

      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto">
        <p>
          <i class="fas fa-home mr-3"></i>Gazipur,Dhaka,Bangladesh</p>
        <p>
          <i class="fas fa-envelope mr-3"></i>alamincse039@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i>01521470348</p>
      </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="#"> alamincse039@gmail.com</a>
  </div>

</footer>
 </div>
  <script>
    // $("#login_button").click(function(){
    //  var email=$("#email").val();
    //  var password=$("#password").val();
    //   $.ajax({
    //      type:"GET",
    //      url:"{{route('users.login')}}",
    //      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    //      data:{
    //        email:email,
    //        password:password
    //      },
    //     datatype:"json",
    //      success:function(data){
    //        console.log(data);
    //      },
    //      error:function(data){
    //       console.log(data);
    //     },
    //   });
    // });

    // $("#registration_button").click(function(){
    //  var first_name=$("#first_name").val();
    //  var last_name=$("#last_name").val();
    //  var email=$("#email").val();
    //  alert(email);
    //  var password=$("#password").val();
    //  var conf_password=$("#confirm_password").val();
    //   $.ajax({
    //      type:"POST",
    //      url:"{{route('users.registration')}}",
    //      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    //      data:{
    //        first_name:first_name,
    //        last_name:last_name,
    //        email:email,
    //        password:password,
    //        conf_password:conf_password
    //      },
    //     datatype:"json",
    //      success:function(data){
    //        console.log(data);
    //         var message='';
    //                 message='<div class="alert alert-success" role="alert">'+data.message+'</div>';
    //                 $('#message').html(message);
    //                 $('#message').show(function () {
    //                     setTimeout(function(){$('#message').html('');},5000);});
    //                 $("#exampleModalCenter").modal('close');
    //      },
    //      error:function(data){
    //       console.log(data);
    //     },
    //   });
    // });
  
 </script>
</body>
</html> 

