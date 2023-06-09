
<!doctype html>
<html lang="en">


<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png" />
	<!--plugins-->
	<link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/select2/css/select2-bootstrap4.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/dark-theme.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/semi-dark.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/header-colors.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/switches.css')}}">

	<title>Kart1</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">

		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
			<!--	<div>
					<img src="{{ asset('assets/images/logo_106.png') }}" class="logo-icon" alt="logo icon">
				</div>-->
				<div>
					<h4 class="logo-text">Kart1
					</h4>
				</div>
				<div class="toggle-icon ms-auto">
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="Dashboard.html">
						<div class="parent-icon"><i class='bx bx-home-circle' style="font-size: 17px;"></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>

				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="lni lni-list"  style="font-size: 17px;"></i>
						</div>
						<div class="menu-title">Master</div>
					</a>
					<ul>
						<li> <a href="{{ route('locations.index') }}"><i class="bx bx-right-arrow-alt"></i>Location</a>
						</li>
						<li> <a href="{{ route('banners.index') }}"><i class="bx bx-right-arrow-alt"></i>Banner</a>
						</li>
						<li> <a href="{{ route('categories.index') }}"><i class="bx bx-right-arrow-alt"></i>General Category</a>
						</li>
						<li> <a href="{{ route('college.index') }}"><i class="bx bx-right-arrow-alt"></i>College Category</a>
						</li>


					</ul>
				</li>
				<li>
					<a href="{{ route('manageimage.index') }}">
						<div class="parent-icon"><i class="fadeIn animated bx bx-video-recording" style="font-size: 17px;"></i>
						</div>
						<div class="menu-title">Video/ Image Gallery</div>
					</a>

					</li>
				<li>
					<a href="{{ route('events.index') }}">
						<div class="parent-icon"><i class="lni lni-checkmark-circle" style="font-size: 17px;"></i>
						</div>
						<div class="menu-title">Add Event</div>
					</a>
				</li>


				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="lni lni-list"  style="font-size: 17px;"></i>
						</div>
						<div class="menu-title">Registration</div>
					</a>
					<ul>
						<li><a href="{{ route('college1') }}"><i class="bx bx-right-arrow-alt"></i>College</a></li>
						<li><a href="{{ route('general') }}"><i class="bx bx-right-arrow-alt"></i>General</a></li>
					</ul>
					</li>


				<li>
					<a href="Winner-list.html">
						<div class="parent-icon"><i class="fadeIn animated bx bx-merge" style="font-size: 17px;"></i>
						</div>
						<div class="menu-title">Winner List</div>
					</a>
				</li>
				<li>
					<a href="Admin-profile.html">
						<div class="parent-icon"><i class="lni lni-lock" style="font-size: 17px;"></i>
						</div>
						<div class="menu-title">Manage Admin Profile </div>
					</a>
				</li>
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
					<!-- <div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<input type="text" class="form-control search-control" placeholder="Type to search...">
							<span class="position-absolute top-50 search-show translate-middle-y"><i
									class='bx bx-search'></i></span>
							<span class="position-absolute top-50 search-close translate-middle-y"><i
									class='bx bx-x'></i></span>
						</div>
					</div> -->
					<div class="collapse navbar-collapse" id="navbarSupportedContent2">
						<!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item"> <a style="font-size:15px;" class="nav-link active" aria-current="page" href="#" style="border-right:1px solid black;">Day Book</a>
							</li><hr>
							<li class="nav-item"> <a style="font-size:15px;" class="nav-link" href="#">Voucher Entries</a>
							</li>
							<li class="nav-item"> <a style="font-size:15px;" class="nav-link" href="#">Payment</a>
							</li>
							<li class="nav-item"> <a style="font-size:15px;" class="nav-link" href="#">Receipt</a>
							</li>
							<li class="nav-item"> <a style="font-size:15px;" class="nav-link" href="#">Contra</a>
					       </li>

						   <li class="nav-item"> <a style="font-size:15px;" class="nav-link" href="#">Journal</a>
					   </li>
						</ul> -->
						<form>
							<!-- <button  class="btn btn-light " type="submit" style="font-size:12px;" ><i style="font-size:12px;" class="lni lni-library"></i><a href="day-book.html">Day Book</a> </button>

							<button  class="btn btn-light " type="submit" style="margin-left: 20px !important; font-size:12px;"><i style="font-size:12px;" class="lni lni-highlight-alt"></i><a href="voucherentry.html"> Voucher Entries</a></button>

							<button  class="btn btn-light " type="submit"
								style="margin-left: 20px !important; font-size:12px;"><i style="font-size:12px;" class="lni lni-rupee"></i><a href="payment-voucher.html">Payment</a> </button>

							<button  class="btn btn-light " type="submit" style="margin-left: 20px !important; font-size:12px;"><i style="font-size:12px;" class="lni lni-write"></i>
								<a href="receipt-voucher.html">Receipt</a></button>


							<button  class="btn btn-light " type="submit" style="margin-left: 20px !important; font-size:12px;" ><i style="font-size:12px;" class="lni lni-spiner-solid"></i><a href="contra-voucher.html">Contra</a>
								</button>

							<button  class="btn btn-light " type="submit" style="margin-left: 20px !important; font-size:12px;"><i style="font-size:12px;" class="lni lni-bubble"></i><a href="journal.html">Journal</a>
								</button> -->
						</form>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">
							<!-- <li class="nav-item mobile-search-icon">
								<a class="nav-link" href="#"> <i class='bx bx-search'></i>
								</a>
							</li> -->
							<li class="nav-item dropdown dropdown-large">
								<!-- <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button"
									data-bs-toggle="dropdown" aria-expanded="false"> <i class='bx bx-category'></i>
								</a> -->
								<div class="dropdown-menu dropdown-menu-end">
									<div class="row row-cols-3 g-3 p-3">
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-cosmic text-white"><i
													class='bx bx-group'></i>
											</div>
											<div class="app-title">Teams</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-burning text-white"><i
													class='bx bx-atom'></i>
											</div>
											<div class="app-title">Projects</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-lush text-white"><i
													class='bx bx-shield'></i>
											</div>
											<div class="app-title">Tasks</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-kyoto text-dark"><i
													class='bx bx-notification'></i>
											</div>
											<div class="app-title">Feeds</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-blues text-dark"><i
													class='bx bx-file'></i>
											</div>
											<div class="app-title">Files</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-moonlit text-white"><i
													class='bx bx-filter-alt'></i>
											</div>
											<div class="app-title">Alerts</div>
										</div>
									</div>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<!-- <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#"
									role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span
										class="alert-count">7</span>
									<i class='bx bx-bell'></i>
								</a> -->
								<div class="dropdown-menu dropdown-menu-end">
									<!-- <a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Notifications</p>
											<p class="msg-header-clear ms-auto">Marks all as read</p>
										</div>
									</a> -->
									<div class="header-notifications-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-primary text-primary"><i
														class="bx bx-group"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Customers<span
															class="msg-time float-end">14 Sec
															ago</span></h6>
													<p class="msg-info">5 new user registered</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-danger text-danger"><i
														class="bx bx-cart-alt"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Orders <span class="msg-time float-end">2
															min
															ago</span></h6>
													<p class="msg-info">You have recived new orders</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success"><i
														class="bx bx-file"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">24 PDF File<span class="msg-time float-end">19
															min
															ago</span></h6>
													<p class="msg-info">The pdf files generated</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-warning text-warning"><i
														class="bx bx-send"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Time Response <span
															class="msg-time float-end">28 min
															ago</span></h6>
													<p class="msg-info">5.1 min avarage time response</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-info text-info"><i
														class="bx bx-home-circle"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Product Approved <span
															class="msg-time float-end">2 hrs ago</span></h6>
													<p class="msg-info">Your new product has approved</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-danger text-danger"><i
														class="bx bx-message-detail"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Comments <span class="msg-time float-end">4
															hrs
															ago</span></h6>
													<p class="msg-info">New customer comments recived</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success"><i
														class='bx bx-check-square'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Your item is shipped <span
															class="msg-time float-end">5 hrs
															ago</span></h6>
													<p class="msg-info">Successfully shipped your item</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-primary text-primary"><i
														class='bx bx-user-pin'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New 24 authors<span
															class="msg-time float-end">1 day
															ago</span></h6>
													<p class="msg-info">24 new authors joined last week</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-warning text-warning"><i
														class='bx bx-door-open'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Defense Alerts <span
															class="msg-time float-end">2 weeks
															ago</span></h6>
													<p class="msg-info">45% less alerts last 4 weeks</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">View All Notifications</div>
									</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<!-- <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#"
									role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span
										class="alert-count">8</span>
									<i class='bx bx-comment'></i>
								</a> -->
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Messages</p>
											<p class="msg-header-clear ms-auto">Marks all as read</p>
										</div>
									</a>
									<div class="header-message-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('assets/images/avatars/avatar-1.png') }}" class="msg-avatar"
														alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Daisy Anderson <span
															class="msg-time float-end">5 sec
															ago</span></h6>
													<p class="msg-info">The standard chunk of lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('assets/images/avatars/avatar-2.png') }}" class="msg-avatar"
														alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Althea Cabardo <span
															class="msg-time float-end">14
															sec ago</span></h6>
													<p class="msg-info">Many desktop publishing packages</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('assets/images/avatars/avatar-3.png') }}" class="msg-avatar"
														alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Oscar Garner <span class="msg-time float-end">8
															min
															ago</span></h6>
													<p class="msg-info">Various versions have evolved over</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('assets/images/avatars/avatar-4.png') }}" class="msg-avatar"
														alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Katherine Pechon <span
															class="msg-time float-end">15
															min ago</span></h6>
													<p class="msg-info">Making this the first true generator</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('assets/images/avatars/avatar-5.png') }}" class="msg-avatar"
														alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Amelia Doe <span class="msg-time float-end">22
															min
															ago</span></h6>
													<p class="msg-info">Duis aute irure dolor in reprehenderit</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('assets/images/avatars/avatar-6.png') }}" class="msg-avatar"
														alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Cristina Jhons <span
															class="msg-time float-end">2 hrs
															ago</span></h6>
													<p class="msg-info">The passage is attributed to an unknown</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('assets/images/avatars/avatar-7.png') }}" class="msg-avatar"
														alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">James Caviness <span
															class="msg-time float-end">4 hrs
															ago</span></h6>
													<p class="msg-info">The point of using Lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('assets/images/avatars/avatar-8.png') }}" class="msg-avatar"
														alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Peter Costanzo <span
															class="msg-time float-end">6 hrs
															ago</span></h6>
													<p class="msg-info">It was popularised in the 1960s</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('assets/images/avatars/avatar-9.png') }}" class="msg-avatar"
														alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">David Buckley <span
															class="msg-time float-end">2 hrs
															ago</span></h6>
													<p class="msg-info">Various versions have evolved over</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('assets/images/avatars/avatar-10.png') }}" class="msg-avatar"
														alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Thomas Wheeler <span
															class="msg-time float-end">2 days
															ago</span></h6>
													<p class="msg-info">If you are going to use a passage</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="{{ asset('assets/images/avatars/avatar-11.png') }}" class="msg-avatar"
														alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Johnny Seitz <span class="msg-time float-end">5
															days
															ago</span></h6>
													<p class="msg-info">All the Lorem Ipsum generators</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">View All Messages</div>
									</a>
								</div>
							</li>
						</ul>
					</div>
					<a target="_blank" href="{{route('home')}}" class="btn btn-primary btn-sm"><i
						class="bx bx-globe"></i>Visit Website</a>


					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
							role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="{{ asset('assets/images/avatars/user.png') }}" class="user-img" alt="user avatar">
							<div class="user-info ps-3">
								<p class="user-name mb-0">Kart1</p>
								<p class="designattion mb-0"></p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<!-- <li><a class="dropdown-item" href="javascript:;"><i
										class="bx bx-user"></i><span>Profile</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i
										class="bx bx-cog"></i><span>Settings</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i
										class='bx bx-home-circle'></i><span>Dashboard</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i
										class='bx bx-dollar-circle'></i><span>Earnings</span></a>
							</li>
							<li><a class="dropdown-item" href="javascript:;"><i
										class='bx bx-download'></i><span>Downloads</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li> -->
							<li><a href="{{route('logout')}}" class="dropdown-item" href="javascript:;"><i
										class='bx bx-log-out-circle'></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
        @yield('content')

		<!-- Bootstrap JS -->
		<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
		<!--plugins-->
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
		<script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
		<script src="{{ asset('assets/js/table-datatable.js') }}"></script>
		<script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
		<script src="{{ asset('assets/js/form-select2.js') }}"></script>
		<!--app JS-->
		<script src="{{ asset('assets/js/app.js') }}"></script>
				<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>

        @yield('js')
		<script>
			$(document).ready(function(){
				setTimeout(() => {
					$(".alert_close").trigger('click');//alert_Close is class of close button
				}, 2500);
			})
		</script>
</body>


</html>
