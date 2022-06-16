               
  <!--  ************************* Footer Starts Here ************************** -->
          
  <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12" style="color:#ecb25a" >
                <h1>About Us </h1>
                <p>
                    
                </p>
                <p> <?php 
                //include('admin/includes/config.php');
$pagetype='aboutus';
$query=mysqli_query($conn,"select PageTitle,Description from pages where PageName='$pagetype'");
while($row=mysqli_fetch_array($query))
{

?>
     
      <!-- Intro Content -->
      <div class="row">

        <div class="col-lg-12">

       <p><h2>   <?php echo $row['Description'];?></h2></p>
        </div>
      </div> 
      <!-- /.row -->
<?php } ?>  </p>
            </div>
          <div class="col-md-4 col-sm-12" style="color:#ecb25a">
                <h1>Useful Links</h1>
                <ul class="list-unstyled link-list">
                    <li><a ui-sref="about" href="about_us.php"><h2>About us</h2></a><i class="fa fa-angle-right"></i></li>
                    <!--<li><a ui-sref="portfolio" href="#/portfolio">Portfolio</a><i class="fa fa-angle-right"></i></li>
                    <li><a ui-sref="products" href="#/products">Latest jobs</a><i class="fa fa-angle-right"></i></li>                    
                    <li><a ui-sref="contact" href="#/contact">Contact us</a><i class="fa fa-angle-right"></i></li>-->
                    <li><a ui-sref="gallery" href="activities.php"><h2>Activities</h2></a><i class="fa fa-angle-right"></i></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-12 map-img" >
                <h1 style="color:#ecb25a">Contact Us</h1>
                <address class="md-margin-bottom-40">
                    Rwanda-Kigali KG750 <br>
                    Ethiopia, Ethiopia<br>
                    Phone: +25078888888888 <br>
                    Email: <a href="mailto:ethanfoundation@gmail.com" style="font-size: 18px;" class="">ethanfoundation@gmail.com</a>
                </address>

            </div>
        </div>
        
        
        <div class="nav-box row clearfix">
            <div class="inner col-md-9 clearfix">
                <ul class="footer-nav clearfix">
                    <li><a href="#">Garelly</a></li>
                    <li><a href="#">Become a Volunteer</a></li>
                    <li>
                        <a href="https://web.whatsapp.com/send?text=<?php echo $currenturl;?>" target="_blank"> <i class="fab fa-whatsapp" ></i></a>
                        </li>
                </ul>

              
            </div>
              <div class="donate-link col-md-3"><a href="donate.php" class="btn btn-primary "><span class="btn-title">Donate Now</span></a></div>
            
        </div>
        
    </div>
    

</footer>
