<?php
include_once('config.php');

$id=$_POST['id'];
$password=md5($_POST['pwd']);
$name=$_POST['name'];
if($_POST['is_admin'] == "ohjiwon"){
	$is_admin = 1;
}
else{
	$is_admin = 0;
}

$sql = "INSERT INTO user (id, password, name, is_admin) VALUES ('$id','$password','$name','$is_admin')";

if(mysql_query($sql)){
	//echo 'success inserting';
	header("location: login.php");
}
else{
 	echo 'fail to insert sql';
 	echo die($sql);
}
?>
