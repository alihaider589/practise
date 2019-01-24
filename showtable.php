<?php

$servername="localhost";
$username="root";
$password="";
$dbname="tasks";

error_reporting(0);
//create connection
$conn =new mysqli($servername,$username,$password,$dbname);
//check connection
if($conn->connect_eror){

    die("connection failed :".$conn->connect_error);

}
//sql to create table 
error_reporting(0);
$sql ="select * from student";
$result=$conn->query($sql);


?>

<?php
error_reporting(0);

$name = $_POST['Name'];
$pass = $_POST['password'];
$uni = $_POST['university'];
$dep = $_POST['department'];
$course = $_POST['course'];
$zip = $_POST['zip'];
$country = $_POST['country'];
$city = $_POST['city'];
$area = $_POST['area'];
$sem = $_POST['semester'];
$status = $_POST['status'];

?>


<center><h1>Bio-data</h1></center><br><br>
<center>
<table>
<tr><td>Name</td><td><?php echo $name ?></td></tr>
<tr><td>Password</td><td><?php echo $pass ?></td></tr>
<tr><td>University</td><td><?php echo $uni ?></td></tr>
<tr><td>Department</td><td><?php echo $dep ?></td></tr>
<tr><td>Course</td><td><?php echo $course ?></td></tr>
<tr><td>Zip code</td><td><?php echo $zip ?></td></tr>
<tr><td>Country</td><td><?php echo $country ?></td></tr>
<tr><td>City</td><td><?php echo $city ?></td></tr>
<tr><td>Area</td><td><?php echo $area ?></td></tr>
<tr><td>Semester</td><td><?php echo $sem ?></td></tr>
<tr><td>Marital status :</td><td><?php echo $status ?></td></tr>
</table>
</center>