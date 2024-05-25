<?php 


$conn=mysqli_connect("localhost","root","","student_data");

if(isset($_POST['submit']))
 {
	
	$email=$_POST['email'];
	$password=md5($_POST['password']);
		
		if($email!="" && $password!="")
		{
			$sql="SELECT * FROM login WHERE email='$email'AND password='$password'";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($result);
			$count=mysqli_num_rows($result);


			if($count>=1)
			{

				header("location:../student-profile");
			}
			else
			{
				$error="Wrong password or email!";
				header("location:index.php");
					
			}
		}
		else
		{
			$error="Password and Email required!";
		
		}
}

?>