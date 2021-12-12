<?php
if(!isset($_COOKIE["login"])){
    header("location:index.php");
  }
else{
	$email= $_COOKIE["login"];
	$code = $_GET["id"] ;
	$status=1 ;
	$conn = mysqli_connect("localhost","root","","mp3");
	if(mysqli_query($conn,"update album_categoty  set status = '$status' where code='$code'")>0){
		 header("location:dashboard.php?category_del=1");
	}
	else{
		  header("location:dashboard.php?again=1");
    }
	
}

?>
