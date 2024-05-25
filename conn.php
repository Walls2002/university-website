<?php


    if ($_SERVER['REQUEST_METHOD'] == "POST") 
    {


    if(isset($_POST['submit']))
    {
        if(empty($_POST['firstname']))
        {
            $error_message="fillout all";
        }
    

        else
        {
      $conn = new mysqli('localhost', 'root', '', 'student_data');

        if (mysqli_connect_error()) 
        {
        die("Connection failed: " . mysqli_connect_error());
        }
        $sql = $conn -> prepare("INSERT INTO login(firstname, lastname, birthday, gender, email, password) VALUES ( ?, ?, ?, ?, ?, ?)");
    $firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$bday=$_POST['date'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$password=md5($_POST['password']);



             
                $sql -> bind_param("ssisss", $firstname, $lastname, $bday, $gender,$email, $password);
        
                if($sql -> execute())
             {
                 header("location:login");
             }
             
             
        
        


        $sql -> close();
        $conn -> close();
    }
    }
}

?>

