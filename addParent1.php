<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rishton Primary School</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Rishton Primry School</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Page 1-1</a></li>
                <li><a href="#">Page 1-2</a></li>
                <li><a href="#">Page 1-3</a></li>
              </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Add <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Student</a></li>
                    <li><a href="#">Parent</a></li>
                    <li><a href="#">Teacher</a></li>
                    li><a href="#">Class</a></li>
                  </ul>

                  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Delete <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li>
                      </ul>

                      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Update <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Page 1-1</a></li>
                            <li><a href="#">Page 1-2</a></li>
                            <li><a href="#">Page 1-3</a></li>
                          </ul>

                          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact Us <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Page 1-1</a></li>
                                <li><a href="#">Page 1-2</a></li>
                                <li><a href="#">Page 1-3</a></li>
                              </ul>


<?php
		
		$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student106-353031336448", "ua92-studentAc", "student106-353031336448");

		// Check connection
		if ($link === false) {
			die("Connection failed: ");
		}
		?>
	
		<hr>
		
		<h3>Add a new parent</h3>
	
		<form method="post" action="addparent.php">

        <label>Select Student:</label>
			<select name="StudentID">
				<?php
				$sql = mysqli_query($link, "SELECT StudentID, name FROM parents");
				while ($row = $sql->fetch_assoc()){
				echo "<option value='{$row['StudentID']}'>{$row['name']}</option>";
				}
				?>
			</select>
			
            <br>
			<input type="submit" name="submit">


            <label>Parent Name:</label>
			<input type="text" name="ParentName">
			
			<br>
			
			<input type="submit" name="submit">

            <label>Parent Address:</label>
			<input type="text" name="ParentAddress">
			
			<br>
			
			<input type="submit" name="submit">

            <label>Email:</label>
			<input type="text" name="Email">
			
			<br>
			
			<input type="submit" name="submit">

            <label>PhoneNum:</label>
			<input type="text" name="PhoneNum">
			
			<br>
			
			<input type="submit" name="submit">
		
		</form>
		
		<?php

		if (isset($_POST['submit'])) {

            $StudentID = $_POST['StudentID']
			$ParentName = $_POST['ParentName'];
            $ParentAddress = $_POST['ParentAddress']
            $Email = $_POST['Email']
            $PhoneNum = $_POST['PhoneNum']
            
			
			$sql = "INSERT INTO parents (StudentID, ParentName,ParentAddress,Email,PhoneNum) VALUES ('$ParentName', '$StudentID', '$ParentName', '$ParentAddress', '$Email', '$PhoneNum')";
			if (mysqli_query($link, $sql)) {
			  echo "New record created successfully";
			} else {
			  echo "Error adding record ";
			}
		
		}
		
		$link->close();
		?>
	
		<hr>
		

	
	</body>

</html>