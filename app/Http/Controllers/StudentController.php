<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;
use App\Models\Subject;

class StudentController extends Controller
{
    
    public function home()
    {
        return view('students.home');
    }
    
    
    public function adminlogout(Request $request)
    {
        // Invalidate the session
        $request->session()->invalidate();

        // Redirect to the login page
        return redirect()->route('Home')->with('success', 'You have been logged out.');
    }
    
    public function register()
    {
        return view('students.register');
    }
    
    public function login()
    {
        return view('students.login');
    }
    
    public function loginConfirm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'LRN' => 'required',
            'password_hash' => 'required',
        ]);

        // Retrieve the user by LRN
        $user = DB::table('student')->where('LRN', $request->input('LRN'))->first();

        // Check if user exists and if the password matches
        if ($user && Hash::check($request->input('password_hash'), $user->password_hash)) {
            // Authentication passed, set the session or return a success response
            session(['user' => $user]);
            return redirect()->route('StudentDashboard'); // redirect to dashboard
        } else {
            // Authentication failed, redirect back with error message
            return back()->withErrors(['Invalid LRN or password.']);
        }
    }
    
    public function adminLoginConfirm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'UserName' => 'required',
            'Password' => 'required',
        ]);

        // Retrieve the admin by UserName
        $admin = DB::table('admin')->where('UserName', $request->input('UserName'))->first();

        // Check if admin exists and if the password matches (in plain text)
        if ($admin && $request->input('Password') === $admin->Password) {
            // Authentication passed, set the session or return a success response
            session(['admin' => $admin]);
            return redirect()->route('Students'); // Redirect to dashboard route
        } else {
            // Authentication failed, redirect back with error message
            return back()->withErrors(['Invalid UserName or password.']);
        }
    }


    public function logout(Request $request)
    {
        // Invalidate the session
        $request->session()->invalidate();

        // Redirect to the login page
        return redirect()->route('Home')->with('success', 'You have been logged out.');
    }

    public function studDashboard()
    {
        $user = session('user');
        return view('students.studentDashboard', compact('user'));
    }

    public function adminLogin()
    {
        return view('students.adminLogin');
    }


    public function index()
    {
        $student = Student::orderBy('created_at', 'asc')->get();
        return view('students.admin', ['student' => $student]);
    }

    public function allStudent()
    {
        $student = Student::whereNotNull('NewEnrollees')->orderBy('FirstName', 'asc')->get();
        return view('students.addStudent', ['student' => $student]);
    }

    public function addStudent()
    {
        return view('students.createStudent');
    }

    public function storeStudent(Request $request)
    {
        $data = $request->validate([
            'LRN'        => 'required|numeric',
            'FirstName'  => 'required|string',
            'MiddleName' => 'required|string',
            'LastName'   => 'required|string',
            'BirthDate'  => 'required|date',
            'Gender'     => 'required|string',
            'Address'    => 'required|string',
            'Contact_No' => 'required|string', 
            'Email'      => 'required|email',
            'place_of_birth' => 'required|string',
            'parent_fname'   => 'required|string',
            'parent_mname'   => 'required|string',
            'parent_lname'   => 'required|string',
            'password_hash'  => 'required|string',
        ]);

        $data['password_hash'] = Hash::make($data['password_hash']);
        $newStudent = Student::create($data);

        return redirect(route('AllStudent')) -> with('success', 'Successfully Added');
    }

    public function preRegister(Request $request)
    {
        $data = $request->validate([
            'LRN'        => 'required|numeric',
            'FirstName'  => 'required|string',
            'MiddleName' => 'required|string',
            'LastName'   => 'required|string',
            'BirthDate'  => 'required|date',
            'Gender'     => 'required|string',
            'Address'    => 'required|string',
            'Contact_No' => 'required|string', 
            'Email'      => 'required|email',
            'place_of_birth' => 'required|string    ',
            'parent_fname'   => 'required|string',
            'parent_mname'   => 'required|string',
            'parent_lname'   => 'required|string',
            'password_hash'  => 'required|string',
        ]);

        $data['password_hash'] = Hash::make($data['password_hash']);
        $newStudent = Student::create($data);

        return redirect(route('Login')) -> with('success', 'Successfully Register');
    }
    
    public function editStudent(Student $student)
    {
        return view('students.updateStudent', ['student' => $student]);
    }

    public function updateStudent(Student $student, Request $request)
    {
        $data = $request->validate([
            'LRN'        => 'required|string',
            'FirstName'  => 'required|string',
            'MiddleName' => 'required|string',
            'LastName'   => 'required|string',
            'BirthDate'  => 'required|date',
            'Gender'     => 'required|string',
            'Address'    => 'required|string',
            'Contact_No' => 'required|string', 
            'Email'      => 'required|email',
            'GradeLevel' => 'required',
        ]);

        $student->update($data);

        return redirect(route('AllStudent')) -> with('success', 'Successfully Updated');
    }

    public function deleteStudent(Student $student)
    {
        $student->delete();
        return redirect(route('AllStudent')) -> with('success', 'Successfully Deleted');
    }


    public function newEnrollee()
    {
        $student = Student::whereNull('NewEnrollees')->orderBy('FirstName', 'asc')->get();
        return view('students.newEnrollees', ['student' => $student]);
    }

    public function confirmEnrollees(Student $student)
    {
        $student->update(['NewEnrollees' => 1]);
        return redirect(route('AllStudent')) -> with('success', 'Successfully Enrolled');
    }

    public function subjects()
    {
        $subject = Subject::all();
        return view('students.subjects', ['subject' => $subject]);
    }

    public function viewProfile(Student $user)
    {
        return view('students.viewProfile', ['user' => $user]);
    }

    public function viewSubject($subject)
    {
        $subject = Subject::where('Subject_ID', $subject)->get(); // Query all subjects with the given ID
        return view('students.viewSubject', ['subject' => $subject]);
    }
}

