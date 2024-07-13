<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<title>Admin Dashboard</title>
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
					<i class='bx bxs-dashboard'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>  
			<a href="{{route('AllStudent')}}">
				<i class='bx bxs-group'></i>
				<span class="text">Students</span>
			</a>
			</li>
			<li>
				<a href="{{route('NewEnrollee')}}">
					<i class='bx bxs-doughnut-chart'></i>
					<span class="text">New Enrollees</span>
				</a>
			</li>
			<li>
				<a href="{{route('Subjects')}}">
					<i class='bx bxs-book-open'></i>
					<span class="text">Subjects</span>
				</a>
			</li>			
		</ul>
		<form id="logout-form" action="{{ route('Adminlogout') }}" method="POST" style="display: none;">
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

	<div id="panels">
		<div id="dashboard-panel" class="panel-content"></div>
		<div id="students-panel" class="panel-content hidden"></div>
		<div id="new-enrollees-panel" class="panel-content"></div>
	</div>

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>
			<a href="#" class="nav-link">Categories</a>
			<!-- <form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form> -->
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell'></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Welcome to the Administrator's Panel</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check'></i>
					<span class="text">
						<h3>{{ $student -> whereNotNull('NewEnrollees')->count() }}</h3>
						<p>All Students Enrolled</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group'></i>
					<span class="text">
						<h3>{{$student ->count()}}</h3>
						<p>All Students</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-doughnut-chart'></i>
					<span class="text">
						<h3>{{$student -> whereNull('NewEnrollees') -> count()}}</h3>
						<p>New Enrollees</p>
					</span>
				</li>
			</ul>

			<div class="table-data">
				<div class="order">
					
					<table>
						<thead>
							<tr>
								<th>LRN</th>
								<th>Name</th>
								<th>Birthdate</th>
								<th>Sex</th>
								<th>Address</th>
								<th>Contact No.</th>
								<th>Email</th>
							</tr>
						</thead>
						<tbody>
						@php
							$limitedStudents = $student->take(3); // Take first 3 students
						@endphp
						@foreach ($limitedStudents as $student)
						<tr>
							<td>{{ $student->LRN }}</td>
							<td>{{ $student->FirstName }} {{ $student->LastName }}</td>
							<td>{{ $student->BirthDate }}</td>
							<td>{{ $student->Gender }}</td>
							<td>{{ $student->Address }}</td>
							<td>{{ $student->Contact_No }}</td>
							<td>{{ $student->Email }}</td>
						</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->

	<script src="js/script.js"></script>
</body>
</html>
