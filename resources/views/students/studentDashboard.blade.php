<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<title>Student Dashboard</title>
</head>
<body>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand centered-content">
		<img src="{{asset('image/mnhslogo.png')}}" alt="mnhs">	
		<span class="text">Muntinlupa NHS</span>	
		
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>  
			<a href="{{ route('ViewSubject', ['subject' => $user->GradeLevel]) }}">
				<i class='bx bxs-chalkboard' ></i>
				<span class="text">View Subjects</span>
			</a>
			</li>
			<li>
				<a href="{{route('ViewProfile', ['user' => $user->LRN])}}">
					<i class='bx bxs-group'></i>
					<span class="text">View Profile</span>
				</a>
			</li>		
		</ul>

		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    	</form>

		<ul class="side-menu">
			<li>
				
				<a href="#" class="logout" onclick="confirmLogout()">
					<i class='bx bxs-log-out-circle'></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<!-- <form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form> -->
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Welcome {{$user -> FirstName }} {{$user -> LastName}}</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Announcements</h3>
					</div>

				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="js/script.js"></script>
</body>
</html>