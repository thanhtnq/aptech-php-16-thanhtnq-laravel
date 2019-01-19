<?php
require('./dbConnect.php');
$conn = connectDb();
if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
}
header("LOCATION: homework.php");
?>