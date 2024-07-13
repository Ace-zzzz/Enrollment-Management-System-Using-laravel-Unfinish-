<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('css/registerStyle.css') }}">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Pre-Register</title> 
</head>
<body>
    <div class="container">
        <header>Pre-Registration for Enrollment</header>
        <form id="student-details-form" action="{{ route('PreRegister') }}" method="POST">
            @csrf
            @method('POST')
            <h2>Student Details</h2>
            <div class="fields">
            <div class="input-field-R">
                            <label for="student-id">LRN:</label>
                            <input type="text" id="student-id" name="LRN" required>
                        </div>
                        <div class="input-field-R">
                            <label for="first-name">First Name:</label>
                            <input type="text" id="first-name" name="FirstName" required>
                        </div>
                        <div class="input-field-R">
                            <label for="middle-name">Middle Name:</label>
                            <input type="text" id="middle-name" name="MiddleName" required>
                        </div>
                        <div class="input-field-R">
                            <label for="last-name">Last Name:</label>
                            <input type="text" id="last-name" name="LastName" required>
                        </div>
                        <div class="input-field-R">
                            <label for="date-of-birth">Date of Birth:</label>
                            <input type="date" id="date-of-birth" name="BirthDate" required>
                        </div>
                        <div class="input-field-R">
                            <label for="sex">Gender:</label>
                            <select id="sex" name="Gender" required>
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="input-field-R">
                            <label for="address">Address:</label>
                            <input type="text" id="address" name="Address" required>
                        </div>
                        <div class="input-field-R">
                            <label for="contact-no">Contact Number:</label>
                            <input type="text" id="contact-no" name="Contact_No" required>
                        </div>
                        <div class="input-field-R">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="Email" required>
                        </div>

                        <div class="input-field-R">
                            <label for="PlaceOfBirth">Place of Birth:</label>
                            <input  id="place_of_birth" name="place_of_birth" required>
                        </div>

                        <div class="input-field-R">
                            <label for="ParentFirstName">Parent First name</label>
                            <input type="text" id="place_of_birth" name="parent_fname" required>
                        </div>

                        <div class="input-field-R">
                            <label for="ParentMiddleName">Parent Middle Name</label>
                            <input type="text" id="place_of_birth" name="parent_mname" required>
                        </div>

                        <div class="input-field-R">
                            <label for="ParentLastName">Parent Last Name</label>
                            <input type="text" id="place_of_birth" name="parent_lname" required>
                        </div>

                        <div class="input-field-R">
                            <label for="Password">Password</label>
                            <input type="password" id="place_of_birth" name="password_hash" required>
                        </div>
                        <button type="submit" class="save-button">Save</button>
            </div>
         </form>

    </div>
</body>
</html>