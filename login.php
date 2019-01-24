<?php
$email=$_POST["email"];
$pass=md5($_POST["pass"]);


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

$sql = "SELECT fname,lname,email FROM account where email='$email' and pass='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["fname"]. " - Name: " . $row["lname"]. " " . $row["email"]. "<br>";
        session_start();
        $_SESSION['fname']=$row["fname"];
        $_SESSION['lname']=$row["lname"];
        $_SESSION['email']=$row["email"];
        $_SESSION['is_login']=1;
        //echo " <script>window.location.assign('admin.php');</script>";  
    } 
    } 
else {
    echo "<h1>wrong email or password</h1>";
    
}
header('Location: ../index.php');
?>