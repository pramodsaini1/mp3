<?php
     if(empty($_POST["category"])){
		  header("location:dashboard.php?empty=1");
	 }
	 else{
		  $category_name = $_POST["category"] ;
		  
		  $conn = mysqli_connect("localhost","root","","mp3");
		  $sn = 0 ;
 			$rs  = mysqli_query($conn,"select MAX(sn) from album_categoty") ;
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
			$status=0;
			if(mysqli_query($conn,"insert into album_categoty values($sn,'$code', '$category_name','$status')")>0){
				header("location:dashboard.php?success=1") ;
			}
		    else{
				 header("location:dashboard.php?again=1") ;
			}
			
	 }
	 
?>
			
