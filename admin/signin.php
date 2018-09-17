<?php

$con = mysqli_connect("localhost","root","","index_php");



if(isset($_GET['del'])){
		
		$del_id = $_GET['del'];
		echo "$del_id";

		$delete_user = "DELETE FROM signin where user_id='$del_id'";
		
		$run_delete = mysqli_query($con, $delete_user); 
		
		if($run_delete){
			echo "Deleted";
			//echo "<script>alert('A user has been deleted!')</script>";
			//echo "<script>window.open('users.php?view','_self')</script>";
		}

		else
		{
			echo "Can't Delete.";
		}
	
	
	}
?>
