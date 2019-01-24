<?php
$connection = mysqli_connect('localhost','root','','practise');
$sql = "SELECT * from ali";


$result = mysqli_query($connection,$sql);

if($result){
echo "Success";
}else {
    echo "failure";
}
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($sql))
{
echo "<table border=1>";
echo "<tr>";
echo "<td>".$row['ID']."</td>";
echo "<td>".$row['USERNAME']."</td>";
echo "<td>".$row['PASSWORD']."</td>";
echo "<td>".$row['AGE']."</td>";


echo "</tr>"; 
}
echo "</table>";
    

}

?>