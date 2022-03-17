
<!-- database connectivity  -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aromabakery";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// $db = mysql_select_db("aromabakery", $conn);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//  echo "Connected successfully";


?>
