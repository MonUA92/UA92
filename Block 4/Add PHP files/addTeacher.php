<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "student106-353031336448";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HomePage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Merriweather+Sans:ital@1&display=swap" rel="stylesheet">
    <title>Add Teacher</title>
</head>
<body style="background-color:#D7D4DD ;">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #324ab2;">
        <a class="navbar-brand" style="color: whitesmoke;" href="#">Rishton Primary School</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbarToggler4"
            aria-controls="myNavbarToggler4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myNavbarToggler4">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/Block4/Login System/login.php">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Student
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/Block4/Add PHP files/addStudent.php">Add Student</a>
                        <a class="dropdown-item" href="/Block4/View PHP files/ViewStudent.php">View Student</a>
                        <a class="dropdown-item" href="/Block4/Edit PHP files/StudentUpdate.php">Update Student</a>
                        <a class="dropdown-item" href="/Block4/Delete PHP files/DeleteStudent.php">Delete Student</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Teacher
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/Block4/Add PHP files/addTeacher.php">Add Teacher</a>
                        <a class="dropdown-item" href="/Block4/View PHP files/ViewTeacher.php">View Teacher</a>
                        <a class="dropdown-item" href="/Block4/Edit PHP files/TeacherUpdate.php">Update Teacher</a>
                        <a class="dropdown-item" href="/Block4/Delete PHP files/DeleteTeacher.php">Delete Teacher</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Parents
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/Block4/Add PHP files/addParent.php">Add Parent</a>
                        <a class="dropdown-item" href="/Block4/View PHP files/ViewParents.php">View Parent</a>
                        <a class="dropdown-item" href="/Block4/Edit PHP files/ParentUpdate.php">Update Parent</a>
                        <a class="dropdown-item" href="/Block4/Delete PHP files/DeleteParent.php">Delete Parent</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Classes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/Block4/Add PHP files/Classes.php">Add Classes</a>
                        <a class="dropdown-item" href="/Block4/View PHP files/ViewClasses.php">View Classes</a>
                        <a class="dropdown-item" href="/Block4/Edit PHP files/ClassesUpdate.php">Update Classes</a>
                        <a class="dropdown-item" href="/Block4/Delete PHP files/DeleteClass.php">Delete Classes</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Block4/Login System/logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
		<h3 class="title" style="color:#324ab2;">Add a new Teacher</h3>
	
		<form class="main-form" method="post" action="addTeacher.php">
			
            <br>


            <label id="stitle">TeacherName:</label>
            <input class="input" type="text" name="TeacherName"required>
			
			<br>

            <label id="stitle">TeacherAddress:</label>
            <input class="input" type="text" name="TeacherAddress"required>

            <br>

            <label id="stitle">TeacherPNumber:</label>
            <input class="input" type="number" name="TeacherPNumber"required>
			
			<br>

            <label id="stitle">TeacherMedical:</label>
            <input class="input" type="text" name="TeacherMedical"required>

            <br>

            <label id="stitle">Background:</label>
            <input class="input" type="text" name="Background"required>

            <br>

            <label id="stitle">Salary:</label>
            <input class="input" type="number" name="Salary"required>
		
			
			<input id="button" type="submit" name="submit">
		
		</form>
		
		<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
		if (isset($_POST['submit'])) {

			$TeacherName = $_POST['TeacherName'];
            $TeacherAddress = $_POST['TeacherAddress'];
            $TeacherPNumber = $_POST['TeacherPNumber'];
            $TeacherMedical = $_POST['TeacherMedical'];
            $Background = $_POST['Background'];
            $Salary = $_POST['Salary'];
            
			
			$sql = "INSERT INTO Teacher 
            (TeacherName,TeacherAddress,TeacherPNumber,TeacherMedical,Background,Salary) VALUES 
            ('$TeacherName', '$TeacherAddress', '$TeacherPNumber', '$TeacherMedical', '$Background', '$Salary')";
			if (mysqli_query($conn, $sql)) {
			  echo "New record created successfully";
			} else {
			  echo "Error adding record ";
			}
		
		}
		
		$conn->close();
		?>
	
		<hr>
    
</body>
</html>