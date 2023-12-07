	<!-- Bootstrap JS -->
	<script src="{{ asset('backend/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('backend/js/jquery.min.js') }}"></script>
	<script src="{{ asset('backend/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('backend/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('backend/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	
	<!--app JS-->
	<script src="{{ asset('backend/js/app.js') }}"></script>
	<script>
		new PerfectScrollbar('.product-list');
		new PerfectScrollbar('.customers-list');
	</script>

	<!-- TOASTER JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

	<script>
		toastr.options = {
		  "closeButton": true,
		  "debug": false,
		  "newestOnTop": false,
		  "progressBar": true,
		  "positionClass": "toast-top-right",
		  "preventDuplicates": false,
		  "onclick": null,
		  "showDuration": "400",
		  "hideDuration": "1000",
		  "timeOut": "5000",
		  "extendedTimeOut": "2000",
		  "showEasing": "swing",
		  "hideEasing": "linear",
		  "showMethod": "fadeIn",
		  "hideMethod": "fadeOut"
		}
	</script>

	<script>
		@if( Session::has('message') )

		var type = "{{ Session::get('alert-type', 'info') }}";

		switch( type )
		{
			case( 'info' ):
				toastr.info( "{{ Session::get('message') }}" );
				break;

			case( 'success' ):
				toastr.success( "{{ Session::get('message') }}" );
				break;

			case( 'warning' ):
				toastr.warning( "{{ Session::get('message') }}" );
				break;

			case( 'error' ):
				toastr.error( "{{ Session::get('message') }}" );
				break;
		}

		@endif()

	</script>

	@yield('page-scripts')