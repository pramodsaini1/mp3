
     <?php
      
			 if(!isset($_COOKIE["login"])){
			header("location:index.php");
		    }
            else{
					 if(empty($_POST["album_name"])||empty($_POST["description"])){
					 header("location:album.php?empty=1");
                     }
                     else{
                       $album_name=$_POST["album_name"] ;
					    $description=$_POST["description"] ;
                        $code=$_GET["code"];
     				    $conn=mysqli_connect("localhost","root","","mp3");
						  

								if(mysqli_query($conn,"update album set album_name='$album_name',description='$description' where code='$code'")>0){
									  header("location:album.php?code=$code&success=1");
 									  
								}
								else{
									 header("location:album.php?code=$code&again=1");
								}
						   
							
					 		   

               				 
				  
			     }
				 
			}
			
			
		?>
