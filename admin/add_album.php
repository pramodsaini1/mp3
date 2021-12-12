<?php
if(!isset($_COOKIE["login"])){
    header("location:index.php");
  }
   
else{
	$email= $_COOKIE["login"];
	$category_code=$_GET["id"] ;
			   $status=0;
 	$conn = mysqli_connect("localhost","root","","mp3");
	if(empty($_POST["album_name"]) || empty($_POST["description"])){
		 header("location:album.php?empty=1");
  	}
	else{
		 $album_name=$_POST["album_name"] ;
		 $description = $_POST["description"] ;
		 
		 $sn = 0 ;
 			$rs  = mysqli_query($conn,"select MAX(sn) from album") ;
			if($r = mysqli_fetch_array($rs)){
				$sn = $r[0] ;
			}
			$sn++ ;
			
			$code = " " ;
			$a = array() ;
			for($i = 'A';$i<='Z';$i++){
				  array_push($a,$i) ;
				    if($i=='Z') 
					   break ;
			}
			for($i = 'a';$i<='z';$i++){
				  array_push($a,$i) ;
				    if($i=='z') 
					   break ;
			}
			for($i = 0;$i<=9;$i++){
				  array_push($a,$i) ;
			}
			$b = array_rand($a,6) ;
			for($i=0;$i<sizeof($b);$i++){
				$code = $code.$a[$b[$i]] ;
			}
			$code = $code."_".$sn ;
 		   $target ="../album/" . $code.".jpg" ;
		   
		   if(move_uploaded_file($_FILES['photo']['tmp_name'],$target)){
			  if(mysqli_query($conn,"insert into album values($sn,'$code', '$album_name','$description','$status','$category_code')")>0){
 						               mkdir("../album/".$code);
				header("location:song.php?code=$code&success=1");
			}
		    else{
				 header("location:album.php?code=$code&again=1") ;
			}
		   }
		   else{
 			  header("location:album.php?code=$code&err=1") ;
			   
 		   }
		   
	}
	
	
}

?>
		 
