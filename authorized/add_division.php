<?php
	if(isset($_POST['addDivision']))
	{
		include("connection.php");	
		
		$dname=$_POST['dName'];
		$population=$_POST['population'];
		$standard=$_POST['standard'];
		$budRatio=$_POST['budratio'];
		$islRation=$_POST['islratio'];
		$hinRatio=$_POST['hidratio'];
		$chrRatio=$_POST['chrratio'];
		
		
		
		$query=mysqli_query($conn,"INSERT INTO division(d_name,population,standard)VALUES('$dname','$population','$standard')");
		$id=mysqli_insert_id($conn);
		$query=mysqli_query($conn,"INSERT INTO diversity_ratio(d_id,r_id,ratio)VALUES('$id','1','$budRatio')");
		$query=mysqli_query($conn,"INSERT INTO diversity_ratio(d_id,r_id,ratio)VALUES('$id','2','$hinRatio')");
		$query=mysqli_query($conn,"INSERT INTO diversity_ratio(d_id,r_id,ratio)VALUES('$id','3','$islRation')");
		$query=mysqli_query($conn,"INSERT INTO diversity_ratio(d_id,r_id,ratio)VALUES('$id','4','$chrRatio')");
		header("location:staff_home.php");
	}

?>