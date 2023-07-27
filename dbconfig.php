<?php
$DBhost="localhost";
$DBuser="root";
$DBpass="";
$DBname="library";

$DBcon=new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
if($DBcon->connect_errno)
{
    die($DBcon->connect_error);
}
?>