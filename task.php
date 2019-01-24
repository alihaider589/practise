<!-- //registration -->


<DOCTYPE html>
<html lang="en">
<head>
  <title>Registeration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" >
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" ></script>


   <script>



      function validateRegistration(letters){
    var regex = /^[a-zA-Z]+$/;
   
    if(letters.first_name.value === ""){
      alert( "Name Field cannot be left empty");
      letters.first_name.focus();
	  return false;
    }
/*  if(regex.test(letters.first_name.value) == false){
     alert("First Name must be in alphabets only");
     document.getElementById("error_first_name").innerHTML="Please Enter the First Name";
              
     letters.first_name.focus();
     return false;
    }*/

    var emailregex = /^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+([;.](([a-zA-Z0-9_\-\.]+)@{[a-zA-Z0-9_\-\.]+0\.([a-zA-Z]{2,5}){1,25})+)*$/;

    if(emailregex.test(letters.email.value) == false){
      alert("This is not a valid email address");
      return false;
    }
    return true;
  }
         
          
      



  </script>
</head>
<body>

<div class="container">
<div class="jumbotron jumbotron-fluid ">
<div class="row">
<div class="col-sm-12">

  <h1 class="display-4">REGISTRATION FORM </h2>

  <form action="signin.php"  method="post"  onsubmit="return validateRegistration(this)">
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter your full name" required>

	</div>
	
	
  <div class="form-group">
      <label for="stdid">User Id:</label>
      <input type="text" class="form-control"  class="form-control is-valid" name="std_id" id="std_id" placeholder="Enter your student id" required>
	   
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="password1"id="pwd" placeholder="Enter your password" required>
	 
    </div>
	<div class="form-group">
      <label for="Email">Email:</label>
      <input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email" required>
	  </div>
    
	</div>
	<div class="form-group">
     <input class="btn btn-primary" type="submit" value="Submit" name="submit1">
	<input class="btn btn-primary" type="reset" value="Reset">
	<a href="signin.php" class="btn btn-primary btn-small active" role="button" aria-pressed="true">Already have an account Sign In</a>
    </div>
	
  </form>
</div>
</div>
</div>
</div>
</div>
<?php



$first_name=$_POST["first_name"];
$std_id=$_POST["std_id"];
$password1=$_POST["password1"];
$email=$_POST["email"];


$servername = "localhost";
$username = "root";
$password = "";
$db="phptest";

$first_name=$_POST["first_name"];
$std_id=$_POST["std_id"];
$password1=$_POST["password1"];
$email=$_POST["email"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO student (S_name, S_id, S_semister,email)
VALUES ('$Name', '$Id', '$Password', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>

</body>
</html>