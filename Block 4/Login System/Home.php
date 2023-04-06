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
    <link rel="stylesheet" href="Home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Merriweather+Sans:ital@1&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body style="background-color:#D7D4DD ;">
 <h1 class="title"> Welcome to Rishton Primary School</h1>
 <h3 class="stitle"> Please Enter Your Numeric Login Deatils</h3>
 
 <div>
    <form class="mform" action="Home.php" method = "post">

    <label class="label">UserNumber:</label>
    <input class="field" type="text" name = "UserNumber" placeholder ="UserNumber" required = ""><br>
    <label class="label">PassNumber:</label>
    <input class="field" type="Password" name = "PassNumber" placeholder ="PassNumber" required = ""><br/>
    <input class="button" type="submit" name="login" value="login">
    </form>
 </div>

 <?php

 if (isset($_POST['login'])){
    $UserNumber = $_POST['UserNumber'];
    $PassNumber = $_POST['PassNumber'];
 

    $select = mysqli_query($conn, "SELECT * FROM logsystem WHERE UserNumber ='$UserNumber' AND PassNumber = '$PassNumber'  ");
    $row = mysqli_fetch_array($select);

    if(is_array($row)){
        $_SESSION["UserNumber"] = $row['UserNumber'];
        $_SESSION["PassNumber"] = $row['PassNumber'];

    }
    else{
        echo '<script>alert("Oops! Something went wrong. Please try again")</script>';
    }

   if (isset($_SESSION["UserNumber"])){
    header("Location:login.php");
   }
}

 ?>
</body>