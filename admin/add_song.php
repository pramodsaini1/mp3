<?php
if(!isset($_COOKIE["login"])){
    header("location:index.php");
  }
else{
	$email= $_COOKIE["login"];
	$album_code=$_GET["id"] ;
			   $status=0;
 	$conn = mysqli_connect("localhost","root","","mp3");
	if(empty($_POST["song_title"])||empty($_POST["description"])){
		 header("location:song.php?empty=1");
	}
	else{
		 $song_title=$_POST["song_title"] ;
		 $description=$_POST["description"] ;
		 $sn=0;
		 $rs = mysqli_query($conn,"select MAX(sn) from song where album_code='$album_code'");
          if($r=mysqli_fetch_array($rs)){
             $sn = $r[0] ;
		  }
          $sn++ ;
		  
		  
 		  $target = "../album/" . $album_code."/".$sn.".mp3";
 		if(move_uploaded_file($_FILES['photo']['tmp_name'],$target)){
			 if(mysqli_query($conn,"insert into song values($sn, '$song_title','$description','$album_code','$status')")>0){
					header("location:song.php?code=$album_code&success=1") ;
				}
				else{
					 header("location:song.php?code=$album_code&again=1") ;
				}
        }
        else{
          	 header("location:song.php?code=$album_code&err=1") ;
		}		  
	}
}

?>	
