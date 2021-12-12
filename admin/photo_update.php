<?php
      
			 if(!isset($_COOKIE["login"])){
			header("location:index.php");
		    }
            else{
                        $code=$_GET["code"];
     				    $conn=mysqli_connect("localhost","root","","mp3");
						 $target ="../album/" . $code.".jpg" ;
						  if(move_uploaded_file($_FILES['photo']['tmp_name'],$target)){
							    header("location:album.php?code=$code&success=1") ;
								 
						  }
						  else{
							    header("location:album.php?code=$code&err=1") ;
							  
						  }
							
					 		   

               				 
				  
			     }
			
			
		?>
