
<?php
session_start();
	include('config.php');
$path=$_SESSION['username'];

	foreach ($_FILES['upload']['name'] as $key => $name){
   $title=$_POST["title"];
$amount=$_POST["amount"];
$courseselect=$_POST['courseselect'];
		$newFilename = time() . "_" . $name;
		move_uploaded_file($_FILES['upload']['tmp_name'][$key], 'upload/'. $newFilename);
		$location = 'upload/'. $newFilename;
 
		mysqli_query($conn,"insert into photo (location,title,amount,courseselect) values ('$location','$title','$amount','$courseselect')");
	}
	header('location:addcourse.php');
?>