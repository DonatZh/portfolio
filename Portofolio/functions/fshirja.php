<?php

if(isset($_GET['id'])) {
	$id = $_GET['id'];
	
	require "konektimi.php";
	
	mysqli_query($connect, "DELETE FROM projects WHERE id='$id';");
	
	header("Location: ../projects.php");
}

?>