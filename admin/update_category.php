<?php
      
			 if(!isset($_COOKIE["login"])){
			header("location:index.php");
		  }
          else{
			
			 if(empty($_POST["category"])){
				 header("location:edit.php");  
				  
			 }
			 else{
				  $code=$_GET["id"];
				    $category=$_POST["category"];
   				    $conn=mysqli_connect("localhost","root","","mp3");
					if(mysqli_query($conn,"update album_categoty set category_name='$category'  where code='$code'")>0){
						header("location:edit.php?id=$code&success=1");
					}
					else{
						header("location:edit.php?id=$code&again=1");
					}
				 
			 
			      }
		  
		  }
		  
		  ?>
