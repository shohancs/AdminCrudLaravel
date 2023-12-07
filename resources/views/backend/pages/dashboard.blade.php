@extends('backend.layout.template')

@section('page-title')
	<title>Ecommerce | Admin_Dashboard</title>
@endsection

@section('page-css')
<link href="{{ asset('backend/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('backend/css/custom.css') }}" />
@endsection


@section('body-content')	
	<div class="page-content">

		<h1 class="text-center">Welcome to Dashboard</h1>

	</div>
@endsection

@section('page-scripts')
<script src="{{ asset('backend/plugins/chartjs/chart.min.js') }}"></script>
<script src="{{ asset('backend/plugins/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('backend/js/dashboard-eCommerce.js') }}"></script>
@endsection