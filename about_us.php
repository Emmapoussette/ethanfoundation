<?php
include('header.php');
 ?>
  <!--  ************************* Page Title Starts Here ************************** -->
        
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>About Ethan Foundation</h2>
                <ul>
                    <li> <a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> About Us</li>
                </ul>
            </div>
        </div>
    </div>
    
    
     <!--  ************************* About Us Starts Here ************************** -->    
       
<!--<div class="about-us container-fluid">
    <div class="container">

        <div class="row natur-row no-margin w-100">
            <div class="text-part col-md-6">
                <h2>About Our Ethan Foundation</h2>
                <p> </p>
                <p> </p>

                <p> </p>
            </div>
            <div class="image-part col-md-6">
                <div class="about-quick-box row">
                    <div class="col-md-6">
                        <div class="about-qcard">
                           <i class="fas fa-user"></i>
                            <p>Become a Volunteer</p>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="about-qcard ">
                           <i class="fas fa-search-dollar red"></i>
                            <p>Quick Fundraise</p>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="about-qcard ">
                           <i class="fas fa-donate yell"></i>
                            <p>Give Donation</p>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="about-qcard ">
                           <i class="fas fa-hands-helping blu"></i>
                            <p>Help Someone</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>     -->
   
   
    
 <!-- ################# Mission Vision Start Here #######################--->
  
  <section class="container-fluid mission-vision">
      <div class="container">
          <div class="row mission">
              <div class="col-md-6 mv-det">
                  <h1>Our Mission</h1>
                  <p><?php 
                include('admin/includes/config.php');
$pagetype='mission';
$query=mysqli_query($conn,"select PageTitle,Description from pages where PageName='$pagetype'");
while($row=mysqli_fetch_array($query))
{

?>
     
      <!-- Intro Content -->
      <div class="row">

        <div class="col-lg-12">

          <p><?php echo $row['Description'];?></p>
        </div>
      </div>
      <!-- /.row -->
<?php } ?> </p>
              </div>
              <div class="col-md-6 mv-img">
                  <img src="assets/images/misin.jpg" alt="">
              </div>
          </div>
          <div class="row vision">
              <div class="col-md-6 mv-img">
                   <img src="assets/images/vision.jpg" alt="">
              </div>
              <div class="col-md-6 mv-det">
                   <h1>Our Vision</h1>
                   <p><?php 
                //include('admin/includes/config.php');
$pagetype='vision';
$query=mysqli_query($conn,"select PageTitle,Description from pages where PageName='$pagetype'");
while($row=mysqli_fetch_array($query))
{

?>
     
      <!-- Intro Content -->
      <div class="row">

        <div class="col-lg-12">

          <p><?php echo $row['Description'];?></p>
        </div>
      </div>
      <!-- /.row -->
<?php } ?> </p>
              </div>
          </div>
      </div>
  </section>   
   
   <!--################### Our Team Starts Here #######################--->
  <!-- <section class="our-team team-11">
            <div class="container">
                <div class="session-title row">
                      <h2>Meet our Team</h2>
                      <p></p>
                </div>
                <div class="row team-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-usr">
                            <img src="assets/images/team/memb1.jpg" alt="">
                            <div class="det-o">
                                <h4>Ethan Member</h4>
                                <i>CEO </i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-usr">
                            <img src="assets/images/team/memb1.jpg" alt="">
                            <div class="det-o">
                                <h4>Ethan Team</h4>
                                <i>CFO</i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-usr">
                            <img src="assets/images/team/memb3.jpg" alt="">
                            <div class="det-o">
                                <h4>Ethan Team</h4>
                                <i>Team Leader</i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-usr">
                            <img src="assets/images/team/memb4.jpg" alt="">
                            <div class="det-o">
                                <h4>Ethan Team</h4>
                                <i>Project Manager</i>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>   -->  
        <head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<br /><br />
		<div class="container">
			<center><h1>Our Team </h1></center>
			<?php
				$query = "select team.id as tid,team.name as name,team.position as position,team.description as description,team.profile as profile from team WHERE Is_Active=1";
				$result = mysqli_query($conn, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			 <div class="col-md-12">
        <div class="event-ro row">
            <div class="col-md-4 ol-sm-6">
				<form method="post">
					<!--<div style="border:1px solid #333; background-color:#1e2436; border-radius:5px; padding:16px;" align="center">-->
                        
						<img src="admin/uploads/<?php echo $row["profile"]; ?>" style="width: 250px;
            height: 250px;
            object-fit: cover;
            border-radius: 50%;" class="img-responsive" />

                        <!--<div style="background-color:#1e2436;font-family: 'Source Code Pro';font-size: 20px; color: #FFF;">-->
                            <div style="border:1px ; background-color:#f1f1f; border-radius:5px; font-size: 18px;" align="center-left">
                    <p class="desic"><?php echo htmlentities($row['name']);?>
                    <br /><i><?php echo htmlentities($row['position']);?></i> </p>
                    <p><h5><?php echo htmlentities($row['description']);?></h5> </p>
                    </div>
                  

					</div>
				</form>
			</div>
                    </div>
                    </div>

			<?php
					}
				}
			?>
            <br />
			<br />
			<br />
		
			<br /><br />
			
					
		</div>
	</div>
	<br /></br>
      </div>
	</body> 
         
                 
  <!--  ************************* Footer Starts Here ************************** -->
     <?php
     include('footer.php');
     ?>
    
          
    
</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>