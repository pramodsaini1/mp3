 <?php
    $conn = mysqli_connect("localhost","root","","mp3");
	$code = $_GET["code"] ;
 
 
 
 
 
 
 
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
        <title>All Albums </title>
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
         <link href="css/styles.css" rel="stylesheet" />
     <script src="https://use.fontawesome.com/09901d9403.js"></script>
  	 
	 
	 
    
	</head>
	<style>
 
a{
  text-decoration:none;
  cursor:pointer;
}
 
	 
#dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 200px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
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
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fa fa-search"></i></button>
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
             




<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
												 <div><img src="images/pk.png " class="img-fluid rounded-circle" style="width:150px,height:150px;"></div><br><br>
 							<a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-home"></i></div>
                                Home
                            </a>
                             <div style="font-size:25px;"> <i class="fa fa-history"></i>&nbsp;&nbsp;&nbsp;History </div><br>
							   <div style="font-size:25px;"><i class="fa fa-play-circle"></i>&nbsp;&nbsp;&nbsp;Your Videos </div><br>
							   <div style="font-size:25px;"><i class="fa fa-thumbs-up"></i>&nbsp;&nbsp;&nbsp;Liked Videos </div><br> 
							    
                              <div class="dropdown">
								  <i id="dropbtn" class="fa fa-bars">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Albums</i>
								  <div class="dropdown-content">
									  <?php 
   $conn = mysqli_connect("localhost","root","","mp3");

	$rm = mysqli_query($conn,"select * from album where category_code='$code' ORDER BY RAND() limit 0,4");
	  while($rr=mysqli_fetch_array($rm)){
		   

		?>
          
		     <table class="table table-borderless">
			  
 				<tr><td align="center"><strong><a href="album_song.php?code=<?php echo $rr["code"]?>"><?php echo $rr["album_name"]?></strong></a></td></tr>
			 
			 </table>
		  <?php
		  
	  }
		  ?>
								  </div>
								</div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                         pramod@gmail.com
	
                    </div>
                </nav>
            </div>
			
			
			
 
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
 						 
                    
                </main>
				<br><br>
								<div class="row" id="matches" style="background-color:#D5F289;margin-top:-45px;">
   <div class="col-sm-12"><br><center><h2 style="color:white;margin-top:15px;">Album Matches</h2></center><br></div>
   <?php 
   $conn = mysqli_connect("localhost","root","","mp3");
	$rs = mysqli_query($conn,"select*from album where category_code='$code'");
	  while($r=mysqli_fetch_array($rs)){
		   

		?>
          <div class="col-sm-3">
		     <table class="table table-borderless w3-card">
			  
			    <tr><td align="center"><a href="album_song.php?code=<?php echo $r["code"]?>"><img src="album/<?php echo $r["code"]?>.jpg"  class="img-fluid"></a></td></tr>
				<tr><td align="center"><strong><?php echo $r["album_name"]?></strong></td></tr>
			 
			 </table>
		  
		  
		  </div>

        <?php
	  		
	  }
	?>
     <div class="col-sm-12"><br><br></div>
 
 </div>
 				 
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div>
	        <center> <h3 style="color:black">Follow Us :  <a href="https://www.facebook.com/profile.php?id=100060203576938" target="_blank"><i class="fa fa-facebook"></i></a> &nbsp;<a href="https://twitter.com/PramodK82377407" target="_blank"><i class="fa fa-twitter"></i></a> &nbsp; <a href="https://www.linkedin.com/in/pramod-kumar-saini-98813b1b4/" target="_blank"><i class="fa fa-linkedin"></i></a>&nbsp; <a href="https://www.instagram.com/pramodkumarsaini12/" target="_blank"><i class="fa fa-instagram"></i></a></h3></center>
                            
                        </div>
						<div class="row"><div class="col-sm-12" style="color:black;">
          <center><br><a href="#" target="_blank" style="color:black">Terms And Condition</a> &nbsp;<a href="#" target="_blank" style="color:black">Privacy Policy</a></center>
         <center><br><h3>MP3 ?? 2021</h3></center><br></div></div>
		        <center> <p>Made with ??? By <a href="https://www.linkedin.com/in/pramod-kumar-saini-98813b1b4/ " target="_blank">Pramod Kumar Saini</a></p></center>

  
  
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
	 
