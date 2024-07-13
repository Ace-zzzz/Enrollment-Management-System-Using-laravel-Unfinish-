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
            <li>
                <a href="{{route('Students')}}">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="active">  
                <a href="">  
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
            <li>
                <a href="{{route('Subjects')}}">
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
            <i class='bx bx-menu' ></i>
            <a href="#" class="nav-link">Categories</a>
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
            <div class="head-title">
                <a href="{{route('addStudent')}}" class="btn-download">
                    <span class="text">ADD STUDENT</span>
                </a>
            </div>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Students</h3>
                        <i class='bx bx-search' ></i>
                        <i class='bx bx-filter' ></i>
                    </div>
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
                                <th>Grade Level</th>
                                <th>Action</th>                               
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Placeholder data for demonstration -->
							@foreach ($student as $student)
                            <tr>
                                <td> {{$student -> LRN }} </td>
                                <td> {{$student -> FirstName,  $student -> LastName   }} </td>
                                <td> {{$student -> BirthDate }} </td>
                                <td> {{$student -> Gender }} </td>
                                <td> {{$student -> Address }} </td>
                                <td> {{$student -> Contact_No }} </td>
                                <td> {{$student -> Email }} </td>
                                <td> {{$student -> GradeLevel }} </td>
                                <td>
                                    <div class='button-container'>
                                        <a href="{{route('EditStudent', ['student' => $student])}}">
                                            <button class='grades-button'> Update </button>
                                        </a>
										<form action="{{route('DeleteStudent', ['student' => $student])}}" method = "POST">
											@csrf
											@method('delete')
											<button class='delete-button'>Delete</button>
										</form>
                                    </div>
                                </td>
                            </tr>
							@endforeach
                            <!-- End of placeholder data -->
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
