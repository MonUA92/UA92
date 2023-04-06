<?php
include_once 'DatabaseConnect.php';
$sql = "DELETE FROM parents WHERE ParentID='" . $_GET["ParentID"] . "'";
if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Successfully deleted the record! ")</script>';
}

else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>