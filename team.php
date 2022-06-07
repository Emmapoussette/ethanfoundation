<?php
include('header.php');
?>
  <!--  ************************* Page Title Starts Here ************************** -->
        
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Our Team</h2>
                <ul>
                    <li> <a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i>Team</li>
                </ul>
            </div>
        </div>
    </div>
    
    
   
  <!-- ################# Events Start Here#######################--->
  <?php

include('includes/config.php');
include('initialize.php');
include('classes/Master.php');
/*$query = mysqli_query($conn,$result);
while ($row = mysqli_fetch_array($query)) {
    ?>
   <section class="events">
    <div class="container">
        
    <div class="col-md-12">
        <div class="event-ro row">
            <div class="col-md-4 ol-sm-6">
                <div class="event-box">
                <img class="card-img-top" src="<?php echo htmlentities($row['EventImage']);?>" 
                alt="<?php echo htmlentities($row['eventtitle']);?>"> 
                    <h4><?php echo htmlentities($row['eventdetails']);?></h4>
                    
                    <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                    <p class="desic"><?php echo htmlentities($row['eventdetails']);?> </p>
                    <button class="btn btn-success btn-sm">Donate Now</button>
                </div>
          
        </section> 
<?php
}
?>  */
                
                
//session_start();
//$conn = mysqli_connect("localhost", "root", "", "ethan");



?>
<?php include "db_conn.php"; ?>
	<!--<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		.alb {
			width: 200px;
			height: 200px;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
		a {
			text-decoration: none;
			color: black;
		}
	</style>
</head>-->
<body>
     <a href="add-team.php">&#8592;</a>
     <?php 
          $sql = "SELECT * FROM team ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
             	<img src="uploads/<?=$images['profile']?>">
             </div>
          		
    <?php } }?>
</body>
</html>
                 
  <!--  ************************* Footer Starts Here ************************** -->
          
  <?php
  include('footer.php');
  ?>
    


<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>