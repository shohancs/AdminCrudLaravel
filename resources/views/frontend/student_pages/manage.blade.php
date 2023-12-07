@extends('frontend.home')

@section('page-title')
<title>Manage All Student | Manage</title>
@endsection


@section('page-css')
<script src="https://kit.fontawesome.com/0c66e46c25.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('frontend/includes/custom.css') }}">
@endsection


@section('body-content')
	<section class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2>All Student Manage Page</h2>
					<hr>

					@if (App\Models\Student::orderBy('name', 'asc')->count() == 0)
					<div class="alert alert-info" role="alert">
					  No Data Found In Our Database!!
					</div>

					@else
					<!-- START: TABLE -->
					<div class="table-responsive">
						<table class="table table-striped table-hover table-bordered">
						  <thead class="table-dark">
						    <tr>
						      <th scope="col">#SL.</th>
						      <th scope="col">Full Name</th>
						      <th scope="col">Slug(Student Name)</th>						      
						      <th scope="col">Father Name</th>
						      <th scope="col">Mother Name</th>
						      <th scope="col">Email Address</th>
						      <th scope="col">Phone No.</th>
						      <th scope="col">Present Address</th>
						      <th scope="col">Status</th>
						    </tr>
						  </thead>
						  <tbody>
						  	@php $i=1; @endphp
						  	@foreach ( $readStudent as $studentData )
						    <tr>
						      <th scope="row">{{ $i }}</th>
						      <td>{{ $studentData->name }}</td>
						      <td>{{ $studentData->slug }}</td>
						      <td>{{ $studentData->fname }}</td>
						      <td>{{ $studentData->mname }}</td>
						      <td>{{ $studentData->email }}</td>
						      <td>{{ $studentData->phone }}</td>
						      <td>{{ $studentData->address }}</td>
						      <td>
						      	@if ( $studentData->status == 1 ) 
						      	<span class="badge text-bg-primary">Active</span>

						      	@elseif ( $studentData->status == 0 ) 
						      	<span class="badge text-bg-danger">InActive</span>

						      	@endif
						      </td>
						    </tr>
						    @php $i++; @endphp
						    @endforeach
						  </tbody>
						</table>
					</div>					
					<!-- END: TABLE -->

					@endif
				</div>
			</div>
		</div>
	</section>
@endsection


@section('page-script')

@endsection