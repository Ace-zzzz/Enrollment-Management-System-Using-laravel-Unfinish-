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
                <a href="{{route('StudentDashboard')}}">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="active">
                <a href="">
                    <i class='bx bxs-chalkboard' ></i>
                    <span class="text">View Subjects</span>
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
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="table-data">
                <div class="order">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Subject</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Hardcoded example data for demonstration -->
							 @foreach ($subject as $subject)
								<tr>
									<td> {{$subject -> Subject_ID}} </td>
									<td>{{$subject -> Subject_Name}}</td>
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
