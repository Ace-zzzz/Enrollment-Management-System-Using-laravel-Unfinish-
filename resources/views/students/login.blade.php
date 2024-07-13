<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Login</title>
</head>
<body>
@if(session()->has('success'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        alert("{{ session('success') }}");
    });
</script>
@endif
<div class="wrapper">
<!----------------------------- Form box ----------------------------------->    
    <div class="form-box">
        <!------------------- login form -------------------------->
            <div class="login-container" id="login">
                <form action="{{route('LoginConfirm')}}" method = "POST">
                    @csrf
                    @method('POST')
                    <div class="top">
                        <span>Don't have an account? <a href="{{route('register')}}">Pre-Register</a></span> 
                        <header>Login</header>
                    </div>
                    <div class="input-box">
                        <input type="username" class="input-field" placeholder="LRN" name = "LRN" required>
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" placeholder="Password" name = "password_hash" required>
                        <i class="bx bx-lock-alt"></i>
                    </div>            
                    <div class="input-box">
                        <input type="submit" class="submit" value="Sign In"onclick="navigateToOtherPage()">
                    </div>
                </form>
            </div>
<script>
   
   function myMenuFunction() {
    var i = document.getElementById("navMenu");

    if(i.className === "nav-menu") {
        i.className += " responsive";
    } else {
        i.className = "nav-menu";
    }
   }
 
</script>

<script>

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
        window.location.href = "index.php";
    }

</script>

</body>
</html>