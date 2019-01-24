<?php
$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOk=1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset(_POST['submit'])){

}else {
    
    
}

$submit = $_POST['submit'];
?>
<form action="#" method="post">


<button type="submit" class="btn btn-primary">Submit
</button>

</form>