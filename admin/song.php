<?php
if(!isset($_COOKIE["login"])){
    header("location:index.php");
  }
else{
	$email= $_COOKIE["login"];
	$code= $_GET["code"] ;
	$conn=mysqli_connect("localhost","root","","mp3");
	$rs=mysqli_query($conn,"select * from song ");
 ?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Song</title>
		     <script src="https://use.fontawesome.com/09901d9403.js"></script>
         <link href="css/styles.css" rel="stylesheet" />
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        
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
	</style>
	</head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Pramod MP3</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fa fa-bars"></i></button>
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
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
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
						<label>Song:</label>
						<form method ="post" enctype="multipart/form-data" action="add_song.php?id=<?php echo $code ?>" style="margin-top:5%">
                        Song Title : <input type="text" name="song_title" class="form-control"><br><br>
                        Description: <textarea  name="description" rows="4" cols="50" class="form-control"></textarea><br><br>
                       Mp3 File:      <input type="file" name="photo" class="form-control"><br><br><br> 
 		             <input type="submit" value="submit" class="btn btn-info">
                    </form>
                    </div>
                </main>
				<br><br>
								<div class="col-sm-12"><br><center><h2>Song Matches</h2></center><br></div>
                                  <?php
								  echo "<table class='table table-borderless'>";
  		                        while($r=mysqli_fetch_array($rs)){
							  $sn = $r["sn"] ;
							  $status=$r["status"];
									 if($status==0){
							 ?>
							<tr>
 							 <td><?php echo $r["song_title"]?></td>
							 <td><?php echo $r["description"]?></td>
							 <td><audio controls autoplay><source src="horse.mp3" type="audio/mpeg"> </audio></td>
							<td><button class='btn btn-warning'><a href="edit_song.php?code=<?php echo $r["album_code"]."&sn=".$sn?>"style="color:white,text-decoration:none;">Edit</button></td>
							<td><button class='btn btn-info'><a href="del_song.php?id=<?php echo $r["album_code"]."&sn=".$sn?>"style="color:white">Delete</button></td>
			 
							</tr>
						 <?php
								 }
					 }
}
					 ?>
				 
     </body>
</html>
	 
