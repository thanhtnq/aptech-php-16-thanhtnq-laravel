<?php
function connectDb($serverName = "localhost", $userName = "root", $password = "", $database = "homework")
{
  $conn = mysqli_connect($serverName, $userName, $password, $database);
  if (!$conn) {
    die("Connection failed : " . $mysqli_connect_error());
  }
  return $conn;
}
session_start();
echo "<a href=\"./\">BACK</a>";
?>