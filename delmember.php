<?php 
	$id=$_GET["id"];
	require 'connect.php';
	$sql="delete from members where id=$id";
	$conn->query($sql);
	$conn->close();
	header("location:showlist.php");
	exit();
?>