<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  
</head>

<body>

<div class="container">
<div class="form-group">
  <label for="Password">Password</label>
  <input type="Password" name="password" id="password" class="form-control" placeholder="Enter your password" aria-describedby="helpId">
  
  <div class="form-group">
    <label for="password2">Confirm your Password </label>
    <input type="Password" name="password2" id="password2" class="form-control" placeholder="Confirm your password" aria-describedby="helpId">
    
  </div>
  <button type="button" class="btn btn-Success" onclick="check()">Enter</button>
  <p id="error"></p>
</div>
</div>

<script>
    function check(){
        var password = document.getELementById("password").value;
        var password2 = document.getElementById("password2").value;
        var errormessage = document.getElmentById("errors").value;
        var errorToThrow= "";
try {
    if(password.length<0){
        errorToThrow +="<br  /> Password too short "
        throw errorToThrow;

    }
    if(/[A-Z]/g.test(password==false)){

        errorToThrow +="Password should include atleast 1 upper case letter "
        throw errorToThrow;

    }
    if(/\d/g.test(password==false)){
        errorToThrow +="Password should include atleast 1 digit";
        throw errorToThrow;

    }
    if(password!=password2){
        errorToThrow +="Password doesnot matched";
        throw errorToThrow;
    }
} catch (err) {
 errorMessage.innerHtml = err;
    
}


    }
    </script>
   
</body>
</html>