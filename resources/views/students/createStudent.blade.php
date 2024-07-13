<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Edit</title>
</head>
<body>

    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand centered-content">
            <img src="{{asset('image/mnhslogo.png')}}" alt="">
            <span class="text">Muntinlupa NHS</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="{{route('Students')}}">
                    <i class='bx bxs-dashboard'></i>
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
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
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
                    <span class="text">Update Information</span>
            </div>
            <br>
            <div class="form-container">
                <div class="form-item">
                    <div class="order">
                    <form id="student-details-form" action="{{ route('StoreStudent') }}" method="POST">
                        @csrf
                        @method('POST')
                        <h2>Student Details</h2>
                        <div class="form-group">
                            <label for="student-id">LRN:</label>
                            <input type="text" id="student-id" name="LRN" required>
                        </div>
                        <div class="form-group">
                            <label for="first-name">First Name:</label>
                            <input type="text" id="first-name" name="FirstName" required>
                        </div>
                        <div class="form-group">
                            <label for="middle-name">Middle Name:</label>
                            <input type="text" id="middle-name" name="MiddleName" required>
                        </div>
                        <div class="form-group">
                            <label for="last-name">Last Name:</label>
                            <input type="text" id="last-name" name="LastName" required>
                        </div>
                        <div class="form-group">
                            <label for="date-of-birth">Date of Birth:</label>
                            <input type="date" id="date-of-birth" name="BirthDate" required>
                        </div>
                        <div class="form-group">
                            <label for="sex">Gender:</label>
                            <select id="sex" name="Gender" required>
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" id="address" name="Address" required>
                        </div>
                        <div class="form-group">
                            <label for="contact-no">Contact Number:</label>
                            <input type="text" id="contact-no" name="Contact_No" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="Email" required>
                        </div>

                        <div class="form-group">
                            <label for="PlaceOfBirth">Place of Birth:</label>
                            <input  id="place_of_birth" name="place_of_birth" required>
                        </div>

                        <div class="form-group">
                            <label for="ParentFirstName">Parent First name</label>
                            <input type="text" id="place_of_birth" name="parent_fname" required>
                        </div>

                        <div class="form-group">
                            <label for="ParentMiddleName">Parent Middle Name</label>
                            <input type="text" id="place_of_birth" name="parent_mname" required>
                        </div>

                        <div class="form-group">
                            <label for="ParentLastName">Parent Last Name</label>
                            <input type="text" id="place_of_birth" name="parent_lname" required>
                        </div>

                        <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="password" id="place_of_birth" name="password_hash" required>
                        </div>
                        <button type="submit" class="save-button">Save</button>
                    </form>
                    </div>   
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="script.js"></script>
</body>
</html>
