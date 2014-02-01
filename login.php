<?php
$username = $_POST['username'];
$password = $_POST['password'];

if(!mysql_connect("localhost", "root", "root"))
{
	echo "Error: Could not connect to MYSQL server";
}
else
{
	//echo "Connected";
	mysql_select_db("login");
	 
	$sql = "SELECT * FROM users WHERE username = '" . $username . "' AND password = '" . $password . "'";
	$results = mysql_query($sql);
	$count = mysql_num_rows($results);
	if($count == "1")
	{
		session_start();
		$_SESSION['logged_in'] = true;
		$_SESSION['username'] = $username;
		header("location: members.php");
	}
	else
	{
		echo "Wrong username / or password";
	}
}
?>