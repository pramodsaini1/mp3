<?php
if(!isset($_COOKIE["login"])){
    header("location:index.php");
  }
else{
	$email= $_COOKIE["login"];
    $code = $_GET["id"] ;
	
 	$conn=mysqli_connect("localhost","root","","mp3");
	$rs=mysqli_query($conn,"select * from login where email='$email'");
	if($r=mysqli_fetch_array($rs)){
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
		  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Album </title>
		  <script src="https://use.fontawesome.com/09901d9403.js"></script>
         <link href="css/styles.css" rel="stylesheet" />
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script>
	$(document).ready(function(){
	     $("button").click(function(){
				var ch = $(this).text();
                      $.post(
                      "retreive.php",{btn:ch},function(data){
                       $("#record").html(data);
					   $("#pk").html("");
					  });	
	
	     });
});
  
	</script>
	</head>
	<style>
	.fa.fa-edit{
		     cursor: pointer;
	}
	a{
		text-decoration:none;
	}
	.fa {
  padding: 20px;
  font-size: 25px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}
.fa-linkedin {
  background: #007bb5;
  color: white;
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
}
.fa-instagram {
  background: #125688;
  color: white;
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
}
img{
		 width:300px;
		 height:300px;
	 }
	</style>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Pramod MP3</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user-circle"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <?php
			   include("sidenav.php");
			?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
						<label>ALbum:</label>
						<form method ="post" enctype="multipart/form-data" action="add_album.php?id=<?php echo $code ?>" style="margin-top:5%">
                   Album Name : <input type="text" name="album_name" class="form-control"><br><br>
                 Description: <textarea  name="description" rows="4" cols="50" class="form-control"></textarea><br><br>
               Album_Image:      <input type="file" name="photo" class="form-control"><br><br><br> 
 		<input type="submit" value="submit" class="btn btn-success">
               </form>
                    </div>
                </main>
				<br><br>
								<div class="row" >
   <div class="col-sm-12"><br><center><h2>Album Matches</h2></center><br></div>
 <div class="container-fluid">
  <div class="row">
    <center><div class="col-sm-12">
								 <?php
              for($i='A';$i<='Z';$i++){
				  echo"<button class='btn btn-danger'>$i</button>               ";
			       if($i=='Z'){
					   break;
				   }
			  }
   
   
   
   
      ?>
	  </div></center><br><br><br>
	  <div class="col-sm-12"><br></div><br><br>
	  <div id="pk">
	  <?php
	      $rs = mysqli_query($conn,"select*from album where album_name LIKE 'A%'");
		  		 echo "<table class='table table-borderless'>";
				 $flag=0;
		  while($r=mysqli_fetch_array($rs)){
			  $flag=1;
			  $status=$r["status"];
					 if($status==0){
			  ?>
	           <tr>
				 <td><img src="../album/<?php echo $r["code"]?>.jpg" class="img-fluid"><div class="card-footer"><?php echo $r["album_name"]?></div></td>
 				<td><button class='btn btn-warning'><a href="edit_album.php?code=<?php echo $r["code"]?>"style="color:white;">Edit</button></td>
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
	
	  
	  ?>
	  </div>
	  </div>
	 </div><br><br><br>
	 <center><div id="record" class="col-sm-12"></div></center><br><br><br>
  
  
 
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div>
	        <center> <h3 style="color:black">Follow Us :  <a href="https://www.facebook.com/profile.php?id=100060203576938" target="_blank"><i class="fa fa-facebook"></i></a> &nbsp;<a href="https://twitter.com/PramodK82377407" target="_blank"><i class="fa fa-twitter"></i></a> &nbsp; <a href="https://www.linkedin.com/in/pramod-kumar-saini-98813b1b4/" target="_blank"><i class="fa fa-linkedin"></i></a>&nbsp; <a href="https://www.instagram.com/pramodkumarsaini12/" target="_blank"><i class="fa fa-instagram"></i></a></h3></center>
                            
                        </div>
						<div class="row"><div class="col-sm-12" style="color:black;">
          <center><br><a href="#" target="_blank" style="color:black">Terms And Condition</a> &nbsp;<a href="#" target="_blank" style="color:black">Privacy Policy</a></center>
         <center><br><h3>MP3 © 2021</h3></center><br></div></div>
		        <center> <p>Made with ❤ By <a href="https://www.linkedin.com/in/pramod-kumar-saini-98813b1b4/ " target="_blank">Pramod Kumar Saini</a></p></center>

  
  
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
	<?php
}
	else{
		header("location:logout.php");
	}
}
?>
