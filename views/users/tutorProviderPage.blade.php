@extends('layouts.sourchfile')
@section('title')
	Tutor And Tuition Provider
@endsection

<div class="container-fluid" style="margin-top: 100px">
	<div class="card">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
				<div class="card-header">
					<h4>Are You Tutor or Tution Provider Select Button And Create Account.</h4>
				</div>
			</div>
			<div class="card-body">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 text-center">
							<a class="btn" style="background-color:#afd578;color: white;border-radius:30px;width: 200px" href="{{route('users.tutorBiodataForm')}}">Tutors</a>
						</div>
						<div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
							<a class="btn" style="background-color:#afd578;color: white;border-radius:30px;width: 200px" href="{{route('users.tuitionProviderPost')}}">Tuition Provider</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>