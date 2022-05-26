<?php
     include('header.php');
     ?>
 
  <!--  ************************* Page Title Starts Here ************************** -->
        
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Our Activities</h2>
                <ul>
                    <li> <a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Activities</li>
                </ul>
            </div>
        </div>
    </div>
	<section class="container-fluid mission-vision">
      <div class="container">
          <div class="row mission">
              <div class="col-md-6 mv-det">
                  <h1>Activities</h1>
                  <p><?php 
                include('admin/includes/config.php');
$pagetype='activity';
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
                  <img src="assets/images/missin.jpg" alt="">
              </div>
          </div>
          <div class="row vision">
              <div class="col-md-6 mv-img">
                   <img src="assets/images/vission.jpg" alt="">
              </div>
              <div class="col-md-6 mv-det">
                   <h1>Adds On</h1>
                   <p><?php 
                //include('admin/includes/config.php');
$pagetype='addson';
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