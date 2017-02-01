<?php
	include('../config/sqlconfig.php');
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$gender=$_POST['gender'];
		// $tmp_hobbies=$_POST['hobbies'];
		// 	if(empty($hobbies))
		// 	{
		// 		$hobbies='No hobbies';
		// 	}
		// 	else
		// 	{
		// 		$count=count($tmp_hobbies);
		// 		for($i=0;$i<$count;$i++)
		// 		{
		// 			$hobbies=$tmp_hobbies[$i];
		// 			mysqli_query($con,"insert into employee_details(hobbies) values('$hobbies')");
		// 		}
		// 	}
		// $image=$_POST['image'];
		// if(is_uploaded_file($_FILES['image']['tmp_name'])) 
		// 	{
		// 		$img =addslashes(file_get_contents($_FILES['image']['tmp_name']));
		// 		$sql = "INSERT INTO employee_details(image) VALUES('{$img}')";
		// 		mysqli_query($con,$sql);
		// 	}
		$country=$_POST['country'];
		mysqli_query($con, "insert into employee_details (id,name,phone,email,gender,country) values('','$name','$phone','$email','$gender','$country')");
		echo '<script type="text/javascript">'; 
		echo 'alert("Data Inserted Successfully");'; 
		echo 'window.location.href = "../forms/add_employee.php"';
		echo '</script>';
	}
	else
	{
		echo "No Datas Found";
	}
?>