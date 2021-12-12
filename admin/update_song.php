
     <?php
      
			 if(!isset($_COOKIE["login"])){
			header("location:index.php");
		    }
            else{
					 if(empty($_POST["song_title"])||empty($_POST["description"])){
					header("location:song.php?empty=1");
                     }
                     else{
                       $song_title=$_POST["song_title"] ;
					    $description=$_POST["description"] ;
						echo $song_title;
						echo $description;
                        $code=$_GET["code"];
						$sn = $_GET["sn"] ;
    				    $conn=mysqli_connect("localhost","root","","mp3");
								if(mysqli_query($conn,"update song set song_title='$song_title',description='$description' where album_code='$code'AND sn=$sn ")>0){
									  header("location:song.php?code=$code&success=1");
									  
								}
								else{
									 header("location:song.php?code=$code&again=1");
									  
								}
							
 
			     }
				 
			}
			
			
		?>
