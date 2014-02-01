<?php
session_start();

if($_SESSION['logged_in'] == true)
{
	echo $_SESSION['username'];
	echo "<br>";
	echo "<a href='logout.php'>Logout</a>";
}
else
{
	header("location: index.php");
}
?>