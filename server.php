<?php

session_start();
$f_name = "";
$s_name = "";
$ele_id = "";
$db = mysqli_connect('localhost' , 'root' , 'ethio_election') or die("could not connect to the database");
if(empty($f_name)) {array_push($errors , "First name is required")};
if(empty($s_name)) {array_push($errors , "Second name is required")};
if(empty($ele_id)) {array_push($errors , "Registration number is required")};
if(count($errors) == 0 )
{
	mysql_query($db,$query);
	$_SESSION['f_name'] = $f_name;
	$_SESSION['s_name'] = $s_name;
	$_SESSION['ele_id'] = $ele_id;
	$_SESSION['sucess'] = "you are now logged in";
	header('location: index.php');
}

if(isset($_post['Login_users']))
{
	$f_name=mysqli_real_escape_string($db, $_POST['f_name']);
	$s_name=mysqli_real_escape_string($db, $_POST['s_name']);
	$ele_id=mysqli_real_escape_string($db, $_POST['ele_id']);
	if(empty($f_name))
	{
		array_push($errors, "First name is Required)
	}
   if(empty($s_name))
	{
		array_push($errors, "Second Name is Required)
	}
	if(empty($ele_id))
	{
		array_push($errors, "Registration id Required)
	}
	if(count($errors) == 0)
	{
		$query = " SELECT * FROM elector WHERE ele_id = 'ele_id';
		$results = mysqli_query($db_, $query);
	}
	if(mysqli_num_rows($results))
	{
		$_SESSION ['f_name'] = $f_name;
		$_SESSION ['s_name'] = $s_name;
		$_SESSION ['ele_id'] = $ele_id;
		$_SESSION ['sucess'] = "Logged in successfully"
		header('location: index.php');
	}
	else
	{
		array_push($errors, "Wrong information")
	}
}

?>