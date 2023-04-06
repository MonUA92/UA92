<?php
include_once 'DatabaseConnect.php';
$table = mysqli_query($conn,"SELECT * FROM classes");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Deletestyles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Merriweather+Sans:ital@1&display=swap" rel="stylesheet">
    <title>Delete a Parent</title>
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

        <h3 class="main-title">Delete a Class</h3><br>
	
		<table style="width: 40%; margin: auto; width: auto;" class="main-table">
		<thead>
			<tr>
                <th width="150px">ClassesID<br><hr></th>
				<th width="250px">TeacherID<br><hr></th>
                <th width="150px">Year<br><hr></th>
                <th width="150px">Capacity<br><hr></th>
                <th width="150px">ClassName<br><hr></th>
                <th width="150px">Remove<br><hr></th>

			</tr>
		</thead>	
        <?php
	$i=0;
	while($row = mysqli_fetch_array($table)) {
	?>
	
	<td><?php echo $row["ClassesID"]; ?></td>
	<td><?php echo $row["TeacherID"]; ?></td>
	<td><?php echo $row["Year"]; ?></td>
	<td><?php echo $row["Capacity"]; ?></td>
    <td><?php echo $row["ClassName"]; ?></td>
	<td><a href="RemoveClass.php?TeacherID=<?php echo $row["TeacherID"]; ?>"><button>Delete</button</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
		</tbody>
		</table>
		
	
	
		<hr>