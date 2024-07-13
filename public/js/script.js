const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});

function navigateToOtherPage() {
	window.location.href = 'other-page.html';
}


// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})



const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})


if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})



const switchMode = document.getElementById('switch-mode');

switchMode.addEventListener('change', function () {
	if(this.checked) {
		document.body.classList.add('dark');
	} else {
		document.body.classList.remove('dark');
	}
})


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


function confirmLogout() {
    event.preventDefault(); // Prevent the default anchor behavior
    if (confirm("Are you sure you want to logout?")) {
        document.getElementById('logout-form').submit();
    }
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

const studentsButton = document.getElementById('students');

studentsButton.addEventListener('click', function() {
    allListItems.forEach(item => item.classList.remove('active'));  // Remove active class from all
    studentsButton.classList.add('active'); // Add active class to Students button	
  // Your code to show the Students panel
});