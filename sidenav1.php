 



<style>
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
<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                             <div><img src="images/pk.png " class="img-fluid rounded-circle" style="width:150px,height:150px;"></div><br><br>
                             <center><div style="margin-right:15px"> <i class="fa fa-history"></i>&nbsp;&nbsp;&nbsp;History </div><br>
							   <div><i class="fa fa-play-circle"></i>&nbsp;&nbsp;&nbsp;Your Videos </div><br>
							   <div><i class="fa fa-thumbs-up"></i>&nbsp;&nbsp;&nbsp;Liked Videos </div><br> 
							   <div style="margin-right:25px"><i class="fa fa-film"></i>&nbsp;&nbsp;&nbsp;Movies </div><br>
							   <div style="margin-right:25px"><i class="fa fa-youtube"></i>&nbsp;&nbsp;&nbsp;YouTube </div><br>
							   </center>
							   <br><br>
							   <div class="dropdown">
								  <center><i id="dropbtn" class="fa fa-bars">&nbsp;&nbsp;&nbsp;Album Category</i></center>
								  <div class="dropdown-content">
								  <?php
								     $ram = mysqli_query($conn,"select*from album_categoty where status=0");
									 while($pra=mysqli_fetch_array($ram)){
								  
								  
								  ?>
									<a href="all_album.php?code=<?php echo $pra["code"]?>"><i class="fa fa-music">&nbsp;&nbsp;<?php echo $pra["category_name"]?></i></a>
									 <?php
									 }
									 ?>
								  </div>
								</div>
							   
							   
							    
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
 	
                    </div>
                </nav>
            </div>
			
			
			
 
