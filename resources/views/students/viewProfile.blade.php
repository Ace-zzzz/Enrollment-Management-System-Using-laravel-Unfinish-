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
            <li>
                <a href="{{route('StudentDashboard')}}">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('ViewSubject', ['subject' => $user->GradeLevel]) }}">
                    <i class='bx bxs-group'></i>
                    <span class="text">View Subject</span>
                </a>
            </li>
            <li class="active">
                <a href="">
                    <i class='bx bxs-chalkboard'></i>
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
            <div class="container">
                <header> Personal Details </header>
                <div class="form">
                    <div class="details personal">
                        <div class="fields">
                            <br>
                            <div class="input-field-R">
                                <label for="firstName">First Name: {{$user -> FirstName}} </label>
                            </div>
                            <br>                
                            <div class="input-field-R">
                                <label for="middleName">Middle Name {{$user -> MiddleName}}</label>
                            </div>
                            <br>                
                            <div class="input-field-R">
                                <label for="lastName">Last Name {{$user -> lastName}}</label>
                            </div>               
                            <br>                
                            <div class="input-field-R">
                                <label for="birthDate">Birth Date {{$user -> BirthDate}}</label>
                            </div>
                            <br>                
                            <div class="input-field-R">
                                <label for="sex">Sex {{$user -> Gender}}</label>
                                </select>
                            </div>
                            <br>                
                            <div class="input-field-R">
                                <label for="address">Address {{$user -> Address}} </label>
                            </div>
                            <br>    
                            
                            <br>
                            <div class="input-field-R">
                                <label for="Contact_No">Contact Number {{$user -> Contact_No}}</label>
                            </div>
                            <br>

                            <br>
                            <div class="input-field-R">
                                <label for="email">Email {{$user -> Email}}</label>
                            </div>
                            <br>

                            <br>
                            <div class="input-field-R">
                                <label for="Gradelevel">Grade Level {{$user -> GradeLevel}}</label>
                            </div>
                            <br>
                        </div>
                    </div>
                    <br>
                </div>
                <br>
                <div class="buttons">
                    <button class="submit">
                        <span class="btnText">Submit</span>
                    </button>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->


    <script src="js/script.js"></script>
</body>
</html>
