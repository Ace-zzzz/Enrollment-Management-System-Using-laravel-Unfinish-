<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
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
            <li>
                <a href="{{route('Students')}}">
                    <i class='bx bxs-dashboard' ></i>
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
                    <i class='bx bxs-doughnut-chart' ></i>
                    <span class="text">New Enrollees</span>
                </a>
            </li>
            <li class="active">
                <a href="subjects.php">
                    <i class='bx bxs-book-open' ></i>
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
            <a href="#" class="notification">
                <i class='bx bxs-bell' ></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="img/people.png">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
           

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Subjects</h3>
                        <i class='bx bx-search' ></i>
                        <i class='bx bx-filter' ></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Subject</th>
                                <th>Grade Level</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Hardcoded example data for demonstration -->
							 @foreach ($subject as $subject)
								<tr>
									<td> {{$subject -> Subject_ID}} </td>
									<td>{{$subject -> Subject_Name}}</td>
									<td>{{$subject -> GradeLevel}}</td>
									<td>
										<div class='button-container'>
											<a href='updateSubject.php'>
												<button class='edit-button'>Edit</button>
											</a>
										</div>
									</td>
								</tr>
							@endforeach
                    
                            <!-- More hardcoded rows for demo purposes -->
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
