


<!DOCTYPE html>
<html>
<head>
	<title>Application Form | Larby Sy College</title>
	<link rel="icon" href="../image/school-logo2.png">
	<link rel="stylesheet" type="text/css" href="../style/fonts.css">
	<link rel="stylesheet" type="text/css" href="../fontawesome-free-5.15.1-web/css/all.css">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="stylesheet" type="text/css" href="../style/media.css">

</head>
<script>
	window.onscroll=function(){myscroll()};
	function myscroll()
{
	
	if(document.documentElement.scrollTop > 150)
	{
		document.getElementById("drop-bar").style.top="0";
	}
	else
	{
		document.getElementById("drop-bar").style.top="-80px";
	}
}
function popup()
{
	document.getElementById("login").style.display="flex";
}

function popout()
{
	document.getElementById("login").style.display="none";
}

function myFunction() {
  alert("Hello! I am an alert box!");
}

</script>
<body>
<?php

	session_start();
    if ($_SERVER['REQUEST_METHOD'] == "POST") 
    {


    if(isset($_POST['submit']))
    {
        if(empty($_POST['firstname'])||empty($_POST['lastname'])||empty($_POST['date'])||empty($_POST['gender'])||empty($_POST['email'])||empty($_POST['password']))
        {
            $error_message="fill out all";
        }

        else if($_POST['password']!=$_POST['conpassword'])
        {
        	$error_message1="Confirm password does not match";
        }
        
        else if(strpos($_POST['email'],"@")!=true)
        {
        	$error_message3="invalid Email";
        }
    

        else
        {
     	 $conn = new mysqli('localhost', 'root', '', 'student_data');

        if (mysqli_connect_error()) 
        {
        die("Connection failed: " . mysqli_connect_error());
        }
        $email1=$_POST['email'];
        $sql="SELECT * FROM login where email='$email1'";
			$result=mysqli_query($conn,$sql);
			
			$count=mysqli_num_rows($result);

			

			if($count>0)
			{
				$error_message4="Email already taken";

			}
			else
			{



        
        $sql = $conn -> prepare("INSERT INTO login(firstname, lastname, birthday, gender, course, email, password) VALUES ( ?, ?, ?, ?, ?, ?, ?)");
    		$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$bday=$_POST['date'];
			$gender=$_POST['gender'];
			$course=$_POST['course'];
			$email=$_POST['email'];
			$password=md5($_POST['password']);



             
                $sql -> bind_param("sssssss", $firstname, $lastname, $bday, $gender, $course,$email, $password);
				echo "<script type='text/javascript'>alert('Account successfully created!');</script>";

        
                if($sql -> execute())
             {	 
             		
                 header("location:../login"	);
                 
             }
             
             
        
        


        $sql -> close();
        $conn -> close();
    }
    }
    }
}

?>






	<div id="drop-bar" class="drop-bar">
	<img class="dropdown-logo" src="../image/school-logo2.png"> 
	<div class="dropbar-list">
			<ul>
				<li><a href="../index.php">Home<hr></a></li>
				<li><a href="../admission">Admission<hr></a>
					<div class="drop-list2">
						<ul>
							<li><a href="../req">Requirements</a></li>
							<li><a href="../admission">Procedure</a></li>
						</ul>
	
						</div>
				</li>
				<li><a href="../courses">Academic<hr></a></li>
				<li><a href="../aboutus">About us<hr></a></li>
				<li><a href="../contact">Contacts<hr></a></li>
			</ul>
			
	</div>
	<i class="fas fa-bars"></i>
</div>
<div class="login" id="login">
		<i onclick="popout();" class="fas fa-times login-exit"></i>
			<div class="login-form">
				
				
				<h1><i class="fas fa-user"></i></h1>
				<h2>Student Portal</h2>
				<form method="POST" action="login/../login/index.php">
					<table>
						
						<tr>
							<input type="text" name="email" placeholder="Email">
						</tr>
						<tr>
							<input type="password" name="password" placeholder="Password">
						</tr>
						<tr>
							<input type="submit" name="submit" value="submit" class="log-submit">
						</tr>
							<tr>
							<div>
							</div>
					
							 
						</tr>


					
					
					
					<a href="../Application-form">Sign up</a>
					</table>
				</form>
				
			</div>
		
	</div>
<div class="upper-bar">
	<img class="nav-logo" src="../image/school-logo2.png"> 
	<h2 class="school-name">Larby Sy College</h2>

	</div>

<div class="lower-bar">
		<div class="lower-bar-left">
				<ul>
					<li><a href="../index.php">Home<hr></a></li>
					<li ><a class="admin-list" id="swtc2" href="#">Admission&ensp;<i class="fas fa-chevron-right"></i><hr></a>
					<div class="drop-list">
	<ul>
		<li><a href="../req">Requirements</a></li>
		<li><a href="../admission">Procedure</a></li>
	</ul>
	
</div>
				</li>
					<li><a href="../courses">Academic<hr></a></li>
					<li><a href="../aboutus">About us<hr></a></li>
					<li><a href="../contact">Contacts<hr></a></li>
				</ul>
		</div>
		<div class="lower-bar-right">
			<ul>
				<li><a href="../faq">FAQ's<hr></a></li>
				<li><a onclick="popup();" href="#">Sign in<hr></a></li>
			</ul>
		</div>
	</div>

<div class="main-app">
	<h2 class="app-title">Sign up</h2>
	<hr>
		<div class="sec1-app">
			


			<form method="POST" action="">
				<div  class="warnings" >
					<?php
						
						if(!empty($error_message))
						{
							echo "<h3>".$error_message."</h3>";
							
						} 
						if(!empty($error_message1))
						{
							echo "<h3>".$error_message1."</h3>";
							
						} 
						if(!empty($error_message2))
						{
							echo "<h3>".$error_message2."</h3>";
							
						}
						if(!empty($error_message3))
						{
							echo "<h3>".$error_message3."</h3>";
							
						} 
						if(!empty($error_message4))
						{
							echo "<h3>".$error_message4."</h3>";
							
						}   
					 ?>
				</div>
				<table>

					<tr>
						<td><label>First Name :</label></td>
						<td><input type="text" name="firstname" placeholder="*First Name" class="input-name"></td>
					</tr>
					<tr>
						<td><label>Last Name :</label> </td>
						<td><input type="text" name="lastname" placeholder="*Last Name" class="input-name"></td>
					</tr>
					<tr>
						<td><label>Birthday :</label> </td>
						<td><input type="date" name="date" placeholder="*Date" class="input-name"></td>
					</tr>
					<tr>
						<td><label>Gender :</label> </td>
						<td><select name="gender">
							<option >--select--</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option></select></td>
					</tr>
					<tr>
						<td><label>Course :</label> </td>
						<td><select name="course">
							<option >--select--</option>
							<option value="BS Psychology">BS Psychology</option>
							<option value="BS Information Technology">BS Information Technology</option>
							<option value="BS Computer Science">BS Computer Science</option>
							<option value="BS Accountancy">BS Accountancy</option>
							<option value="BS Entrepreneurship">BS Entrepreneurship</option>
							<option value="BS Hotel and Restaurant">BS Hotel and Restaurant</option>
							<option value="BS Civil Enginnering">BS Civil Enginnering</option>
							<option value="BS Industrial Enginnering">BS Industrial Enginnering</option>
							<option value="BS Electrical Enginnering">BS Electrical Enginnering</option>
							<option value="BS Mechanical Enginnering">BS Mechanical Enginnering</option>
							<option value="Master in Buisness Administration">Master in Buisness Administration</option>
							<option value="MS Criminology">MS Criminology</option>
							<option value="MS Psychology">MS Psychology</option>
						</select></td>
					</tr>
					<tr>
						<td><label>Email :</label></td>
						<td><input type="text" name="email" placeholder="*Email" class="input-name"></td>
					</tr>
					<tr>
						<td><label>Password :</label></td>
						<td><input type="password" name="password" placeholder="*Password" id="pass1" class="input-name"></td>
					</tr>
					<tr>
						<td><label>Confirm Password :</label></td>
						<td><input type="password" name="conpassword" placeholder="*Confirm Password" id="pass2" class="input-name"></td>
					</tr>
					
					<tr>
						<td><input type="submit" value="submit" name="submit" class="submit1"></td>
						<td><h4>Already Registered? <a href="../login">Log in</a></h4></td>

					</tr>
					
        
				</table>
						

			</form>



		</div>

	</div>


<!--Page footer-->
	<div class="footer">
				<div class="quick-link">
					<h2>Quick Links</h2>
					<ul>
						<li><a href="../admission">Admissions</a></li>
						<li><a href="../courses">Academic</a></li>
						
						<li><a href="../aboutus">About us</a></li>
						<li><a href="../contact">Contact us</a></li>
						<li><a href="../Application-form" >Sign in</a></li>
					</ul>
				</div>
				<div class="contact-us">
					<h2>Talk to us</h2>
					<ul>
						<li><span>Email:</span> larby_admissions@gmail.com</li>
						<li><span>Tel No:</span> +1202-555-0353 / +1202-555-0784</li>
						<li><span>Address:</span>(678) 625-81615388 Wapakonata Trl SW Oxford, Georgia(GA), 30054</li>

					</ul>
					
				</div>
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3318.587485057879!2d-83.8791490854544!3d33.719621642633726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f5cbc498efd885%3A0xdad87ba39fc5390e!2s625%20Wapakonata%20Trail%20%23678%2C%20Oxford%2C%20GA%2030054%2C%20USA!5e0!3m2!1sen!2sph!4v1607146837144!5m2!1sen!2sph" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					
				</div>
				
			</div>
			<div class="footer-2">
				<h5>&#169; Copyright 2020 Larby Sy College</h5>
			</div>


</body>
</html>