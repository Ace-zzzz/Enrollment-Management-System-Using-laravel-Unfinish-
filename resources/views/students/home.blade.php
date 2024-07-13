<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Main Page</title>
</head>
<body>
</html>
<div class="wrapper">
    <nav class="nav">
        <div class="nav-button">
            <a href = "{{route('Login')}}"> 
                <button class="btn white-btn" style = "margin-left: 850px" id="loginBtn" onclick="login()">LOGIN</button>
            </a>
        
            <a href = "{{route('AdminLogin')}}">
                <button class="btn" id="registerBtn" onclick="register()">Admin Login</button>                
            </a>

           
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>

    <div class = "form-group">
        <h1>MUNTINLUPA NATIONAL HIGH SCHOOL - MAIN</h1>
        <a href = "{{route('register')}}">
            <button class = "enroll-button" style = "margin-left: 350px"> ENROLL NOW </button>  
        </a>       
    </div>
<!----------------------------- Form box ---------------------------------   
    <div class="form-box">
        
        <div class="login-container" id="login">
            <div class="top">
                <span>Don't have an account? <a href="#" onclick="register()">Pre-Register</a></span> 
                <header>Login</header>
            </div>
            <div class="input-box">
                <input type="username" class="input-field" placeholder="Student Number">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>            
            <div class="input-box">
                <input type="submit" class="submit" value="Sign In"onclick="navigateToOtherPage()">

            </div>
        </div>
 
        <div class="register-container" id="register">
            <div class="top">
                <span>Have an account? <a href="#" onclick="login()">Login</a></span>
                <span>BASIC EDUCATION ENROLLMENT FORM </span>
                <header>Pre-Registration</header>
            </div>
            <div class="two-forms"> 
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Firstname">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Middlename">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Lastname">
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Email">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="LRN">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <select class="input-field" placeholder="Gender">
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
                </select>
                <i class="bx bx-user-circle"></i> </div>
            <div class="input-box">
                <input type="date" class="input-field" placeholder="Birthdate">
                <i class="bx bx-calendar"></i>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Address">
                <i class="bx bx-home"></i>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Contact Number">
                <i class="bx bx-phone"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Register">
            </div>
            <div class="two-col">
                <div class="one">
                <input type="checkbox" id="register-check">
                <label for="register-check"> Remember Me</label>
                </div>
                <div class="two">
                <label><a href="#">Terms & conditions</a></label>
                </div>
            </div>
            </div>
        </div>   
--> 

<script>
   
   function myMenuFunction() {
    var i = document.getElementById("navMenu");

    if(i.className === "nav-menu") {
        i.className += " responsive";
    } else {
        i.className = "nav-menu";
    }
   }

    var a = document.getElementById("loginBtn");
    var b = document.getElementById("registerBtn");
    var x = document.getElementById("login");
    var y = document.getElementById("register");

    function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }

    function register() {
        x.style.left = "-510px";
        y.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        x.style.opacity = 0;
        y.style.opacity = 1;
    }

    function navigateToOtherPage() {
        window.location.href = 'index.php';
    }

</script>

</body>
</html>