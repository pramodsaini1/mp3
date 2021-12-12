 




<?php
      if(isset($_REQUEST["btn"])){
		  $conn = mysqli_connect("localhost","root","","mp3");
		   $btn= mysqli_real_escape_string($conn,$_REQUEST["btn"]);
		   $rs=mysqli_query($conn,"select * from song where song_title LIKE '$btn%'");
		 echo "<table class='table table-borderless'>";
		 $flag=0;
		 while($r=mysqli_fetch_array($rs)){
			  $flag=1;
			  $sn = $r["sn"] ;
			  $status=$r["status"];
					 if($status==0){
 			 ?>
				<tr>
								 <td><?php echo $sn?></td>
				 <td><?php echo $r["song_title"]?></td>
 				<td><button class='btn btn-warning'><a href="edit_song.php?id=<?php echo $r["album_code"]?>&sn=<?php echo $sn?>"style="color:white,text-decoration:none;">Edit</button></td>
				<td><button class='btn btn-info'><a href="del_song.php?id=<?php echo $r["album_code"]?>&sn=<?php echo $sn?>"style="color:white">Delete</button></td>
 
				</tr>
			 <?php
					 }
		 }
		 if($flag==0){
			 echo "<tr><td><h3>Record Not Found</h3></td></tr>";
		 }
		 echo "</table>";
	}
	
	?>
