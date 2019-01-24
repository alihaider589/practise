<?php
$servername="localhost";
$username="root";
$password="";
$dbname="phptest";


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
if(mysqli_num_rows($result)>0){
    //output data of each row 
    while($row =mysqli_fetch_assoc($result))
  
    {
        
        echo "<table border='1'>";
        echo "<tr>";

        echo "<td>".$row['S_fname']."</td>";
        echo "<td>".$row['S_name']."</td>";
        echo "<td>".$row['S_semister']."</td>";
        echo "<td>".$row['S_id']."</td>";
echo"</tr>";
    }

echo "</table>";
}
else
{
    echo "0 Result";
}

?>


