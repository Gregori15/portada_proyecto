<?php
	/* start the session */
	 
	session_start();
	
	
	 
	include 'Conection.php';
	 
	// data enviada desde el formulario
	$username = $_POST['login'];
	$password = $_POST['pwd'];
	 
	$sql= "SELECT * FROM usuarios WHERE login='$username' and pwd='$password'";
	 
	$result=$con->query($sql);
	 
	// counting table row
	$count = mysqli_num_rows($result);
	
	 
	if($count == 1)
	{
	 
	 $_SESSION['loggedin'] = true;
	 $_SESSION['username'] = $username;
	 $_SESSION['start'] = time();
	 $_SESSION['expire'] = $_SESSION['start'] + (5 * 60) ;
	 
	echo "Bienvenido! " . $_SESSION['username'];
	 
	}
	 else 
	{
		echo "Username o Password estan incorrectos.";
	  echo "<br>";
		echo "<a href='login.html'>Volver a Intentarlo</a>";
	}
	 
	?>
	 
