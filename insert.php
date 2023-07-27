<?php
require_once("config.php");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$u_name= $_POST['name'];
	$u_cont= $_POST['cont'];
	$u_email= $_POST['email'];
	$u_pass=md5($_POST['pass']);
	
	$qry= mysql_query("INSERT INTO user (u_name, u_cont, u_email, u_pass) VALUES ('$u_name', '$u_cont', '$u_email', '$u_pass')");
	
		
	if($qry == true)
	{
		echo "	inserted";
	}
	else
	{
		echo "not".mysql_error();
	}
}
else
	{
		echo "Request method is not POST";
	}
?>
