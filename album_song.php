<?php
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
        <title>Album-Song </title>
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
         <link href="css/styles.css" rel="stylesheet" />
     <script src="https://use.fontawesome.com/09901d9403.js"></script>
  	 <script>
	   $(document).ready(function(){
		   
		   
		   
		   
		   
	   });
	 
    </script>
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
td{
	font-family: "Lucida Console", "Courier New", monospace;
	font-size:25px;
	color:#18F3D7;
	
	
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
                                <div style="font-size:25px;"><i class="fa fa-home"  ></i></div>&nbsp;&nbsp;&nbsp;
                                Home
                            </a>
                               <div style="font-size:25px;"> <i class="fa fa-history"></i>&nbsp;&nbsp;&nbsp;History </div><br>
							   <div style="font-size:25px;"><i class="fa fa-play-circle"></i>&nbsp;&nbsp;&nbsp;Your Videos </div><br>
							   <div style="font-size:25px;"><i class="fa fa-thumbs-up"></i>&nbsp;&nbsp;&nbsp;Liked Videos </div><br> 
							   <div style="font-size:25px;"><i class="fa fa-film"></i>&nbsp;&nbsp;&nbsp;Movies </div><br>
							   <div style="font-size:25px;" ><i class="fa fa-youtube"></i>&nbsp;&nbsp;&nbsp;YouTube </div><br>
							   
                              
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
 						 
						 
                    </div>
                </main>
				<br><br>
 																<table class="table table-borderless" style="margin-top:70px">
								<center>
								
                <tr><td><div class="container-fluid" >
					<div class="row" style="margin-top:-100px">
					   <div class="col-sm-6">
				             <div class="w3-card" style="width:450px;">
							   <div class="card-body">
							      <img src="album/<?php echo $code?>.jpg" class="img-fluid">
							    </div>
							 </div>
				        </div>
						</td>
						<td>
					   <div class="col-sm-6" style="margin-top:-100px">
					      <div class="w3-card" style="width:700px;height:300px;">
						     <p><b> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</b> </p>
 						     <div class="card-body">
							 
							 </div>
						  
						  </div>
					   </div>
					   </div>
                        </div>
</td>
</tr>						
								</center>
								
								</table>
								
								<table class="table table-borderless">
								<tr><td><strong  style="color:red">SN</strong>
				</td> <td><strong style="color:red;">Song</strong></td>
				<td><strong style="color:red">Description</strong></td>  
				</tr>
 				   <tr>
				   </table>
				<?php
	              		 echo "<table class='table table-borderless'>";
						 $conn = mysqli_connect("localhost","root","","mp3");
						 $flag=0;
				 $rs=mysqli_query($conn,"select * from song where album_code='$code' AND status=0");
	             while($r=mysqli_fetch_array($rs)){
					 $flag=1;
 												   
				
				?>
				 
				
				   <td><strong><?php echo $r["sn"]?></strong></td>
                    <td><strong><?php echo $r["song_title"]?></strong></td>
		           <td><strong><?php echo $r["description"]?></strong></td>
					<td>
                    <td><audio controls> 
                     <source src="album/<?php echo $r["album_code"].'/'.$r["sn"]?>.mp3"  type="audio/mp3">
                      </audio>
                     </td>					  
                    </tr>
 				<?php
				 
				 }
				 if($flag==0){
					 			 echo "<tr><td><h3><center>Song Not Found</center></h3></td></tr>";
				 }
				 		 echo "</table>";

				 ?>
				<br><br><br>
 				 
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
	 
