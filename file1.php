<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form action="file1.php" method="post">
    <input type="text" name="id" id="id">
    <input type="password" name="password" id="password">
    <button type="submit" class="btn btn-primary" name="submit" id="submit">Login</button>

    </form>
<?php





$connection = mysqli_connect('localhost','root','','practise');
// $sql="SELECT * from ali where ID='$id' and PASSWORD='$password' ";




if(isset($_POST['submit'])){
    $id = $_POST['id'];
$password = $_POST['password'];

echo "<script>alert('connection successfull')</script>";

$sql="SELECT * from ali where ID='$id' AND PASSWORD='$password' ";

if(mysqli_query($connection,$sql)){
if(mysqli_num_rows($sql)>0){
    
    header('location:file.php');

}
}

}
else {
   
}

?>

</form>
</body>
</html>