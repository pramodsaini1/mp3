<?php
if(!isset($_COOKIE["login"])){
    header("location:index.php");
  }
else{
	$email= $_COOKIE["login"];
	$code = $_GET["id"] ;
	$sn  = $_GET["sn"] ;
	$status =1 ;
	$conn = mysqli_connect("localhost","root","","mp3");
	if(mysqli_query($conn,"update song set status='$status' where album_code='$code'AND sn=$sn")>0){
		 header("location:song.php?id=$code&song_deleted=1");
	}
	else{
		  header("location:song.php?id=$code&again=1");
    }
	
}

?>
