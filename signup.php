

<?php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$m_no=$_POST["m_no"];
$pass=md5($_POST["pass"]);
$gen=$_POST["gen"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bright_see";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO account (fname, lname, email,pass,gender,m_no)
VALUES ('$fname','$lname','$email','$pass','$gen','$m_no')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    "<a class='nav-link' href='SPECTICALES.php'>SPECTICALES</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>