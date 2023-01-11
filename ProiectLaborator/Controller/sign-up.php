<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$email = $_POST['email'];
        $password = $_POST['password'];
		$lastname = $_POST['last_name'];
        $firstname = $_POST['first_name'];
		$city = $_POST['city'];
        $phone = $_POST['phone'];

		if(empty($email) &&  !empty($password) && !empty($lastname) && !empty($firstname) && !empty($city) && !empty($phone))
		{

			
			$query = $conn->prepare("INSERT INTO clients VALUES (null,'$password' ,'$lastname' ,'$firstname','$email','$city','$phone' )");

			
            $query->execute();
            $query->close();

			header("Location:login.php");
			die;
		}else
		{
			echo "Eroare la introducerea datelor";
		}
	}
    else
    {
			echo "Eroare generala";
	}
	?>