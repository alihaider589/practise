<?php
echo"<center><h1>Registeration form</h1></center>";

$servername="localhost";
$username="root";
$password="";
$dbname="phptest";

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



<center>
<table>
<form action="showtable.php" method="POST">
<tr><td>Name</td><td><input type="text" name="user" placeholder="Name"> <br></td></tr>
<tr><td>Password</td><td><input type="text" name="password" placeholder="password"><br></td></tr>
<tr><td>Department</td><td><input type="text" name="department" placeholder="Department"></td></tr>
<tr><td>University</td><td><input type="text" name="university" placeholder="University name"></td></tr>
<tr><td>Course</td><td><input type="text" name="course" placeholder="Course"></td></tr>
<tr><td>Zip Code</td><td><input type="text" name="zip" placeholder="Zip code"><br></td></tr>
<tr><td>Country</td><td><input type="text" name="country" placeholder="Country"><br></td></tr>
<tr><td>City</td><td><input type="text" name="city" placeholder="City"><br></td></tr>
<tr><td>Area</td><td><input type="text" name="area" placeholder="Area"><br></td></tr>
<tr><td>Semester</td><td><input type="text" name="semester" placeholder="Semester"><br></td></tr>
<tr><td>Marital Status</td><td><input type="text" name="status" placeholder="Marital status"><br></td></tr>
<tr><td><input type="Submit" Value="Click Here"></td></tr>
</form>
</table>
</center>

<!-- 15fbscsm063
15fbscsm047
15fbscsm057 -->