<?php
include('header.php');
?>
  <!--  ************************* Page Title Starts Here ************************** -->
        
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Our Events</h2>
                <ul>
                    <li> <a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> About Us</li>
                </ul>
            </div>
        </div>
    </div>
    
    
   
  <!-- ################# Events Start Here#######################--->
  <?php
include('initialize.php');
include('classes/Master.php');
$result='select * from events';
$query = mysqli_query($conn,$result);
while ($row = mysqli_fetch_array($query)) {
    ?>
    <section class="events">
    <div class="container">
        
        <div class="event-ro row">
            <div class="col-md-4 col-sm-6">
                <div class="event-box">
                <img class="card-img-top" src="admin/postimages/<?php echo htmlentities($row['img_path']);?>" alt="<?php echo htmlentities($row['title']);?>"> 
                    <h4><?php echo htmlentities($row['title']);?></h4>
                    
                    <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                    <p class="desic"><?php echo htmlentities($row['description']);?> </p>
                    <button class="btn btn-success btn-sm">Donate Now</button>
                </div>
          
        </section> 
<?php
}
?>  
                
              <!--  <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/image_06.jpg" alt="">
                        <h4>Child Education in Africa</h4>
                        <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                        <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>
                        <button class="btn btn-success btn-sm">Donate Now</button>
                    </div>
                </div>
               <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/image_04.jpg" alt="">
                        <h4>Child Education in Africa</h4>
                        <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                        <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>
                        <button class="btn btn-success btn-sm">Donate Now</button>
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/image_05.jpg" alt="">
                        <h4>Child Education in Africa</h4>
                        <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                        <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>
                        <button class="btn btn-success btn-sm">Donate Now</button>
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/image_06.jpg" alt="">
                        <h4>Child Education in Africa</h4>
                        <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                        <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>
                        <button class="btn btn-success btn-sm">Donate Now</button>
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/image_07.jpg" alt="">
                        <h4>Child Education in Africa</h4>
                        <p class="raises"><span>Raised : $34,425</span> / $500,000 </p>
                        <p class="desic">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum has been the industry's </p>
                        <button class="btn btn-success btn-sm">Donate Now</button>
                    </div>
                </div>
            </div>
        </div>-->
    </section>  

      
       
    </body>
                 
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