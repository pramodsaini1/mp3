 <?php
 	$conn=mysqli_connect("localhost","root","","mp3");
	$rs=mysqli_query($conn,"select * from album_categoty ");
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
        <title>Home </title>
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
         <link href="css/styles.css" rel="stylesheet" />
     <script src="https://use.fontawesome.com/09901d9403.js"></script>
  	 
	 
	 
    
	</head>
	<style>
 
a{
  text-decoration:none;
}
span{
     cursor:pointer;
	 color:blue;
	   text-decoration:none;
 
 }
#see{
   float:right;

}
#sita{
   text-decoration:none;
} 
.row{
     text-decoration:none;
    color:white;
}	
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
							Login
						  </button>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <?php
			   include("sidenav1.php");
			?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
 
                    </div>
                </main>
				<br><br>
					
                 <!-- The Modal -->
					  <div class="modal fade" id="myModal">
						<div class="modal-dialog modal-dialog-centered">
						  <div class="modal-content">
						  
							<!-- Modal Header -->
							<div class="modal-header">
							  <h4 class="modal-title">Login-MP3</h4>
							  <button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							
							<!-- Modal body -->
							<div class="modal-body">
							         
                                        <form method="post" action="admin/check.php">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="email" type="email" placeholder="Enter Email-Id" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control"  name="pass" type="password" placeholder=" Enter-Password" />
                                                <label for="inputPassword">Password</label>
                                            </div><br><br>
                                              <div class="card-footer"><center><input type="submit" value="Login" class="btn btn-danger"></center></div>											
                                        </form>
                                     
							</div>
							
							<!-- Modal footer -->
							<div class="modal-footer">
							  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							</div>
							
						  </div>
						</div>
					  </div>
                       <?php
	                   $rs=mysqli_query($conn,"select * from album_categoty where status=0 ");
                           while($usr=mysqli_fetch_array($rs)){
 							   $code = $usr["code"] ;
 					?>
				<!-- music  -->
 
				<div class="col-sm-12" style="background-color:#0BF1DE; margin-top:-5px">
													<table class="table table-borderless w3-card">
				  <tr ><td><?php echo $usr["category_name"]?></td><td> <a style="float:right" id="sita" title="Trending Songs See all"  href="all_album.php?code=<?php echo $usr["code"]?>"><b>See All</a></b>				  
  </td></tr>
				  
				  </table>
				  </div>
  				  <div class="col-sm-12">
 				                   <div class="row">
								   <?php
					                   $pk=mysqli_query($conn,"select*from album where category_code='$code' AND status=0 limit 0,4");
									   while($nn=mysqli_fetch_array($pk)){
					                      							    


					               ?>
								    								   
  								   <div class="col-sm-3">
									<table class="table table-borderless w3-card">
									<tr><td align=center style="height:160px"><a href="album_song.php?code=<?php echo $nn["code"]?>"><img src="album/<?php echo $nn["code"]?>.jpg" class="img-fluid"></a></td></tr>
									<tr><td>Title here:&nbsp; &nbsp;&nbsp; <b><?php echo $nn["album_name"]?> </b> <br>03/08/2021<br> </td></tr>
									</table>
								
 									</div>
 									<?php
									   
									   }
									   ?>
									   </div>
					</div> 
                    					
				 <?php
									   
							   
							}
						   ?>
                <footer class="py-4 bg-info mt-auto">
                    <div class="container-fluid px-4">
					<div class="col-sm-12" ><br><br><br><center><h2 style="color:#93F217">Bas Bajna Chahiye Gaana</h2></br></br></br></center>   
<div class="row">
			  <div class="col-sm-3" style="color:white">
		     <h3>Albums</h3>
		     <table class="table table-hover table-borderless">
			     <tr style="color:white"><td  style="border:none" style="color:white">English </td></tr>
				  <tr style="color:white"><td style="border:none">Hindi</td></tr>
				   <tr style="color:white"><td style="border:none">Telugu</td></tr>
				    <tr style="color:white"><td style="border:none">Punjabi</td></tr>
					 <tr style="color:white"><td style="border:none">Tamil</td></tr>
					 <tr style="color:white"><td style="border:none">Kannada</td></tr>
				   <tr style="color:white"><td style="border:none">Bhojpuri</td></tr>
				    <tr style="color:white"><td style="border:none">Malayalam</td></tr>
					 <tr style="color:white"><td style="border:none">Marathi</td></tr>
					  <tr style="color:white"><td style="border:none">Bhojpuri</td></tr>
				    <tr style="color:white"><td style="border:none">Bengali</td></tr>
					 <tr style="color:white"><td style="border:none">Haryanvi</td></tr>
			 </table>
		      <button class="btn btn-danger"><a style="text-decoration:none;" href="#">View All</a></button>
		  </div>
		  <div class="col-sm-3" style="color:white">
		     <h3>Song</h3>
		     <table class="table table-hover table-borderless">
	        <tr style="color:white"><td  style="border:none" style="color:white">Dhummu Dholi </td></tr>
				  <tr style="color:white"><td style="border:none">Hanuman Chalisa</td></tr>
				   <tr style="color:white"><td style="border:none">Govinda Aala Re</td></tr>
				    <tr style="color:white"><td style="border:none">Bachpan Ka Pyaar</td></tr>
					 <tr style="color:white"><td style="border:none">Yashoda Ka Nandlala</td></tr>
					 <tr style="color:white"><td style="border:none">Burj Khalifa</td></tr>
				   <tr style="color:white"><td style="border:none">Krishna Aarti</td></tr>
				    <tr style="color:white"><td style="border:none">Filhaal 2 Mohabbat</td></tr>
					 <tr style="color:white"><td style="border:none">Radha Kaise Na Jale</td></tr>
					  <tr style="color:white"><td style="border:none">Lut Gaye</td></tr>
				    <tr style="color:white"><td style="border:none">Chori Chori</td></tr>
					 <tr style="color:white"><td style="border:none">Dil mange </td></tr>
			 </table>
				      <button class="btn btn-danger"><a style="text-decoration:none;" href="#">View All</a></button>

		</div>
		<div class="col-sm-3" style="color:white">
		   <h3>Artists</h3>
		     <table class="table table-hover table-borderless">
                 <tr style="color:white"><td  style="border:none" style="color:white">Arijit Singh </td></tr>
				  <tr style="color:white"><td style="border:none">Neha Kakkar</td></tr>
				   <tr style="color:white"><td style="border:none">Honey Singh</td></tr>
				    <tr style="color:white"><td style="border:none">Atif Aslam</td></tr>
					 <tr style="color:white"><td style="border:none">A R Rahman</td></tr>
					 <tr style="color:white"><td style="border:none">Lata Mangeshkar</td></tr>
				   <tr style="color:white"><td style="border:none">Kishore Kumar</td></tr>
				    <tr style="color:white"><td style="border:none">Armaan Malik</td></tr>
					 <tr style="color:white"><td style="border:none">Sunidhi Chauhan</td></tr>
					  <tr style="color:white"><td style="border:none">Nusrat Fateh Ali Khan</td></tr>
				    <tr style="color:white"><td style="border:none">Mohammed Rafi</td></tr>
					 <tr style="color:white"><td style="border:none">Guru Randhawa</td></tr>
			 </table>
		
				      <button class="btn btn-warning"><a style="text-decoration:none,color:white;" href="#">View All</a></button>

		</div>
				<div class="col-sm-3" style="color:white">
		   <h3>New Release Song</h3>
		     <table class="table table-hover table-borderless">
                 <tr style="color:white"><td  style="border:none" style="color:white">English    songs </td></tr>
				  <tr style="color:white"><td style="border:none">Hindi     songs </td></tr>
				   <tr style="color:white"><td style="border:none">Telugu    songs </td></tr>
				    <tr style="color:white"><td style="border:none">Punjabi   songs </td></tr>
					 <tr style="color:white"><td style="border:none">Tamil   songs </td></tr>
					 <tr style="color:white"><td style="border:none">Kannada   songs </td></tr>
				   <tr style="color:white"><td style="border:none">Bhojpuri   songs </td></tr>
				    <tr style="color:white"><td style="border:none">Malayalam  songs </td></tr>
					 <tr style="color:white"><td style="border:none">Marathi   songs </td></tr>
					  <tr style="color:white"><td style="border:none">Bhojpuri   songs </td></tr>
				    <tr style="color:white"><td style="border:none">Bengali    songs </td></tr>
					 <tr style="color:white"><td style="border:none">Haryanvi   songs </td></tr>
			 </table>
		
				      <button class="btn btn-warning"><a style="text-decoration:none;" href="#">View All</a></button>

		</div>
		</div>
					
                        <div><br><br><br>
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
	?>
