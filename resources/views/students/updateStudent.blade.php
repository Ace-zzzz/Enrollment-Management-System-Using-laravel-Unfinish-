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
            <img src="{{asset('image/mnhslogo.png')}}" alt="mnhs">
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
                <a href="students.php">  
                    <i class='bx bxs-group'></i>
                    <span class="text">Students</span>  
                </a>
            </li>
            <li>
                <a href="newenrollees.php">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">New Enrollees</span>
                </a>
            </li>
            <li>
                <a href="subjects.php">
                    <i class='bx bxs-book-open'></i>
                    <span class="text">Subjects</span>
                </a>
            </li>           
        </ul>
        <ul class="side-menu">
            <li>
                <a href="settings.php">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Settings</span>
                </a>
            </li>
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
            <div class="head-title">
                <span class="text">Update Information</span>
            </div>
            <br>
            <div class="form-container">
                <div class="form-item">
                    <div class="order">
                    <form id="student-details-form" action="{{ route('UpdateStudent', ['student' => $student]) }}" method="POST">
                    @csrf
                    @method("PUT")
                        <h2>Student Details</h2>
                        <div class="form-group">
                            <label for="student-id">LRN:</label>
                            <input type="text" id="student-id" name="LRN" value = "{{$student -> LRN}}" required>
                        </div>
                        <div class="form-group">
                            <label for="first-name">First Name:</label>
                            <input type="text" id="first-name" name="FirstName" value = "{{$student -> FirstName}}" required>
                        </div>
                        <div class="form-group">
                            <label for="middle-name">Middle Name:</label>
                            <input type="text" id="middle-name" name="MiddleName" value = "{{$student -> MiddleName}}" required>
                        </div>
                        <div class="form-group">
                            <label for="last-name">Last Name:</label>
                            <input type="text" id="last-name" name="LastName" value = "{{$student -> LastName}}" required>
                        </div>
                        <div class="form-group">
                            <label for="date-of-birth">Date of Birth:</label>
                            <input type="date" id="date-of-birth" name="BirthDate" value = "{{$student -> BirthDate}}" required>
                        </div>
                        <div class="form-group">
                            <label for="sex">Gender:</label>
                            <select id="sex" name="Gender" required>
                                <option value="">Select Gender</option>
                                <option value="Male" {{ $student->Gender == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ $student->Gender == 'Female' ? 'selected' : '' }}>Female</option>
                                <option value="Other" {{ $student->Gender == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" id="address" name="Address" value = "{{$student -> Address}}" required>
                        </div>
                        <div class="form-group">
                            <label for="contact-no">Contact Number:</label>
                            <input type="text" id="contact-no" name="Contact_No" value = "{{$student -> Contact_No}}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="Email" value = "{{$student -> Email}}" required>
                        </div>

                        <div class="form-group">
                            <label for="GradeLevel">Grade Level:</label>
                            <input  id="GradeLevel" name="GradeLevel" value = "{{$student -> GradeLevel}}" required>
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
