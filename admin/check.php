<?php
      if(empty($_POST["email"]) || empty($_POST["pass"])){
		   header("location:login.php?empty=1");
	  }
	  else{
		   $email = $_POST["email"] ;
		   $pass  = $_POST["pass"] ;
		   
		   $conn = mysqli_connect("localhost","root","","mp3");
		   $rs  = mysqli_query($conn,"select * from login where email='$email'");
		   if($r=mysqli_fetch_array($rs)){
			   if($r["password"]==$pass){
				     setcookie("login",$email,time()+3600*12);
					 header("location:dashboard.php");
			   }
			   else{
				       header("location:login.php?invalid_password");
			   }
		   }
		   else{
			    header("location:login.php?invalid_email");
		   }
	  }
	  
?>

			     
		   
 				  
