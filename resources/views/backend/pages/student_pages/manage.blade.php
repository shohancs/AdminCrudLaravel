@extends('backend.layout.template')

@section('page-title')
<title>Manage All Student | Manage</title>
@endsection


@section('page-css')
<script src="https://kit.fontawesome.com/0c66e46c25.js" crossorigin="anonymous"></script>
<link href="{{ asset('backend/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('backend/css/custom.css') }}" />
@endsection


@section('body-content')
	<div class="page-content">
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">Manage</div>
				<div class="ps-3">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-0 p-0">
							<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">All Students List</li>
						</ol>
					</nav>
				</div>
		</div>
		<!--end breadcrumb-->
		<div class="d-flex align-items-center justify-content-between">
			<h6 class="mb-0 text-uppercase">All Students List</h6>
			<a href="{{ route('student.managetrash') }}" class="btn btn-dark">Trash Item</a>
		</div>
		
		<hr>
		<div class="card">
			<div class="card-body">

				@if ($readStudent->count() == 0)
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
					      <th scope="col">Action</th>
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
					      <td>
					      	<div class="action-btn">
					      		<ul>
					      			<li>
					      				<a href="{{ route('student.edit', $studentData->id) }}">
					      					<i class="fa-solid fa-pen-to-square"></i>
					      				</a>
					      			</li>
					      			<li>
					      				<a href="" data-bs-toggle="modal" data-bs-target="#trash{{ $studentData->id }}">
					      					<i class="fa-solid fa-trash-can"></i>
					      				</a>
					      			</li>
					      		</ul>
								<!-- START::MODAL -->
								<div class="modal fade" id="trash{{ $studentData->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
										  <div class="modal-header">
										    <h1 class="modal-title fs-5" id="exampleModalLabel">Are You Sure to Remove <span style="color: green; font-weight: 600; text-transform: uppercase;">{{ $studentData->name }}</span> !!</h1>
										    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										  </div>
										  <div class="modal-body">
										    <div class="modal-btn">
										    	<ul>
										    		<li>
										    			<form action="{{ route('student.trash', $studentData->id) }}" method="POST">
										    				@csrf
										    				<input type="submit" name="trash" class="btn btn-danger" value="Trash">
										    			</form>
										    		</li>
										    		<li>
										    			<button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
										    		</li>
										    	</ul>
										    </div>
										  </div>
										</div>
									</div>
								</div>
								<!-- END::MODAL -->
					      	</div>
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
@endsection


@section('page-scripts')

@endsection