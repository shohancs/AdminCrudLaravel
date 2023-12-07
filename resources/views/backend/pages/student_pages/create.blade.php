@extends('backend.layout.template')

@section('page-title')
<title>Create New Student | Create</title>
@endsection


@section('page-css')

@endsection


@section('body-content')
	<div class="page-content">
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">Create</div>
				<div class="ps-3">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-0 p-0">
							<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Add New Brand</li>
						</ol>
					</nav>
				</div>
		</div>
		<!--end breadcrumb-->
		<h6 class="mb-0 text-uppercase">Add New Brand</h6>
		<hr>

		<div class="card">
			<div class="card-body">
				<div class="border p-3 radius-10">
				 	<div class="row">
						<div class="col-lg-12">
							<div class="border border-1 rounded p-3 shadow-sm bg-body-tertiary">
								<form action="{{ route('student.store') }}" method="POST">
									@csrf

									<div class="row">
										<div class="col-lg-6">
											<div class="mb-3">
												<label for="" class="form-label">Full Name</label>
												<input type="text" name="name" class="form-control" required autocomplete="off">
											</div>								

											<div class="mb-3">
												<label for="" class="form-label">Father Name</label>
												<input type="text" name="fname" class="form-control" required autocomplete="off">
											</div>

											<div class="mb-3">
												<label for="" class="form-label">Mother Name</label>
												<input type="text" name="mname" class="form-control" required autocomplete="off">
											</div>

											<div class="mb-3">
												<label for="" class="form-label">Email Address</label>
												<input type="email" name="email" class="form-control" required autocomplete="off">
											</div>								
										</div>

										<div class="col-lg-6">
											<div class="mb-3">
												<label for="" class="form-label">Phone No.</label>
												<input type="tel" name="phone" class="form-control" required autocomplete="off">
											</div>

											<div class="mb-3">
												<label for="" class="form-label">Present Address</label>
												<textarea name="address" class="form-control" rows="3" required autocomplete="off"></textarea>
											</div>

											<div class="mb-3">
												<label for="" class="form-label">Active Status</label>
												<select class="form-select" name="status">
												  <option value="1">Please Select the Status</option>
												  <option value="1">Active</option>
												  <option value="0">InActive</option>
												</select>
											</div>

											<div class="mb-3">
												<div class="d-grid gap-2">
													<input type="submit" name="addStudent" class="btn btn-dark" value="Create New Student">
												</div> 
											</div>
										</div>
									</div>
								</form>
							</div>	
						</div>			
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection


@section('page-scripts')

@endsection