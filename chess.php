<html>
<head>
<title>Chess Layout:PHP</title>
<style>
.black{
background-color: black;
width: 50px;
height: 50px;
float:left;
display:inline;
}
.white{
background-color: white;
width: 50px;
height: 50px;
float:left;
display:inline;
}
</style>
</head>
<body>
<center>
<table style>
<?php
for($i=0;$i<5;$i++){
 echo "<tr><td class='black'></td><td class='white'></td><td class='black'></td><td class='white'></td><td class='black'></td><td class='white'></td><td class='black'></td><td class='white'></td><td class='black'></td><td class='white'></td></tr>";
       
 
 for($a=0;$a<1;$a++){
	 echo "<tr><td class='white'></td><td class='black'></td><td class='white'></td><td class='black'></td><td class='white'></td><td class='black'></td><td class='white'></td><td class='black'></td><td class='white'></td><td class='black'></td></tr>";
 }
 
}
?>
</table>
</center>
</body>
</html>