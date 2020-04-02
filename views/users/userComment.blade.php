@extends('layouts.sourchfile')
@section('title')
	Users Comments
@endsection
@section('comments')
<div style="margin-top:90px">
	<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
 		
 		@foreach($retrieve_comment as $eachretrieve_commen)
 		<div class="row ">
 			<div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 ">
 			</div>
 		<div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 ">
 			<div class="accordion" id="accordionExample275">
			  <div class="card mt-4">
			    <div class="card-header" id="headingOne4">
			      <h5 class="mb-0">
			        <button class="btn btn-link float-left" type="button" data-toggle="collapse" data-target="#collapseOne{{$eachretrieve_commen->comment_id}}"
			          aria-expanded="true" aria-controls="collapseOne{{$eachretrieve_commen->comment_id}}">
			          <img src="{{asset('images/human/provider.png')}}" width="50" height="45" class="rounded-circle">{{$eachretrieve_commen->comment_name}}
			        </button><span style="font-size: 38px" class="text-warning float-right mt-3"><i class="fas fa-comment"></i></span>
			      </h5>
			    </div>
			    <div id="collapseOne{{$eachretrieve_commen->comment_id}}" class="collapse" aria-labelledby="headingOne4"
			      data-parent="#accordionExample275">
			      <div class="card-body">
			        {{$eachretrieve_commen->comment_comments}}
			      </div>
			    </div>
			  </div>
			</div>
 		</div> 
 	</div>
 	@endforeach
  </div>
</div>

@endsection