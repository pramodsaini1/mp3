<html lang="en">
    <head>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://use.fontawesome.com/09901d9403.js"></script>
    <script src="https://use.fontawesome.com/09901d9403.js"></script>
	</head>
	<style>
	.fa.fa-edit{
		     cursor: pointer;
	}
	a{
		text-decoration:none;
	}
	 img{
		 width:300px;
		 height:300px;
	 }
	</style>





<?php
      if(isset($_REQUEST["btn"])){
		  $conn = mysqli_connect("localhost","root","","mp3");
		   $btn= mysqli_real_escape_string($conn,$_REQUEST["btn"]);
		   $rs=mysqli_query($conn,"select * from album where album_name LIKE '$btn%'");
		 echo "<table class='table table-borderless'>";
		 $flag=0;
		 while($r=mysqli_fetch_array($rs)){
			  $flag=1;
			   $status=$r["status"];
					 if($status==0){
			 ?>
				<tr id="r<?php echo $r["code"]?>">
				 <td><img src="../album/<?php echo $r["code"]?>.jpg" class="img-fluid"><div class="card-footer"><?php echo $r["album_name"]?></div></td>
 				<td><button class='btn btn-warning'><a href="edit_album.php?code=<?php echo $r["code"]?>"style="color:white,text-decoration:none;">Edit</button></td>
				<td><button class='btn btn-info'><a href="del_album.php?id=<?php echo $r["code"]?>"style="color:white">Delete</button></td>
				<td><button class='btn btn-success'><a href="song.php?code=<?php echo $r["code"]?>"style="color:white">Add Song</button></td>

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
