			<!--sidebar wrapper -->
			<div class="sidebar-wrapper" data-simplebar="true">
				<div class="sidebar-header">
					<div>
						<img src="{{ asset('backend/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
					</div>
					<div>
						<h4 class="logo-text">Rukada</h4>
					</div>
					<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
					</div>
				</div>
				<!--navigation-->
				<ul class="metismenu" id="menu">
					<li>
						<a href="{{ route('admin.dashboard') }}">
							<div class="parent-icon"><i class='bx bx-home-circle'></i>
							</div>
							<div class="menu-title">Dashboard</div>
						</a>
					</li>

					<li class="menu-label">Students Management</li>

					<!-- ########## START: BRAND MENU ITEMS ########## -->
					<li>
						<a href="javascript:;" class="has-arrow">
							<div class="parent-icon"><i class="bx bx-category"></i>
							</div>
							<div class="menu-title">Student</div>
						</a>
						<ul>
							<li> <a href="{{ route('student.manage') }}"><i class="bx bx-right-arrow-alt"></i>Manage Student</a>
							</li>
							<li> <a href="{{ route('student.create') }}"><i class="bx bx-right-arrow-alt"></i>Add new Student</a>
							</li>
						</ul>
					</li>
					<!-- ########## END: BRAND MENU ITEMS ########## -->
				</ul>
				<!--end navigation-->
			</div>
			<!--end sidebar wrapper -->