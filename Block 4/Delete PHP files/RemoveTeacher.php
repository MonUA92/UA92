<?php
include_once 'DatabaseConnect.php';
$sql = "DELETE FROM teacher WHERE TeacherID='" . $_GET["TeacherID"] . "'";
if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Successfully deleted the record! ")</script>';
}

else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>