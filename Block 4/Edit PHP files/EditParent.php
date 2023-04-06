<?php
include_once 'DatabaseConnect.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE parents set ParentID='" . $_POST['ParentID'] . "', ParentName='" . $_POST['ParentName'] . "', ParentAddress='" . $_POST['ParentAddress'] . "', Email='" . $_POST['Email'] . "', PhoneNum='" . $_POST['PhoneNum'] . "', StudentID='" . $_POST['StudentID'] . "' WHERE ParentID='" . $_POST['ParentID'] . "'");
$note = '<script>alert("This has now been modified, please return to Parent page!")</script>';
}
$table = mysqli_query($conn,"SELECT * FROM parents WHERE ParentID='" . $_GET['ParentID'] . "'");
$row= mysqli_fetch_array($table);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Edit.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Merriweather+Sans:ital@1&display=swap" rel="stylesheet">
    <title>Edit Parent</title>
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

<form class="main-form" method="post" action="">
<div><?php if(isset($note)) { echo $note; } ?>
</div>
<br>
<label id="stitle">ParentID</label>
<input type="hidden" name="ParentID" class="input" value="<?php echo $row['ParentID']; ?>">
<input type="number" name="ParentID"  class="input" value="<?php echo $row['ParentID']; ?>">
			
<br>

<label id="stitle">Name</label>
<input type="text" name="ParentName" class="input" value="<?php echo $row['ParentName']; ?>" required>
			
<br>

<label id="stitle">Parent Address</label>
<input type="text" name="ParentAddress" class="input" value="<?php echo $row['ParentAddress']; ?>" required>
			
<br>

<label id="stitle">Email</label>
<input type="text" name="Email" class="input" value="<?php echo $row['Email']; ?>" required>

<br>

<label id="stitle">PhonrNum</label>
<input type="number" name="PhoneNum" class="input" value="<?php echo $row['Email']; ?>" required>

<br>

<label id="stitle">StudentID</label>
<input type="hidden" name="StudentID" class="input" value="<?php echo $row['StudentID']; ?>">
<input type="number" name="StudentID"   class="input" value="<?php echo $row['StudentID']; ?>">
		
			
<input type="submit" name="submit" value="Submit" class="buttom">
		
</form>
</body>
</html>