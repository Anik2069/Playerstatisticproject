<?php
$connection=mysqli_connect("localhost","root","","playerdatabase");
if($connection==false){
	die("Error.Database could not found".mysqli_connect_error());
}
?>