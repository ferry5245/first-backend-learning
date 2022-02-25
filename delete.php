<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that user
$ID = $_GET['ID'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM Toko WHERE ID='$ID'");
mysqli_query($mysqli, "ALTER TABLE Toko AUTO_INCREMENT = 1");
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>