<?php
include('header.php');
include('admin/includes/config.php');
?>  
                 
  <!-- ******************** Slider Starts Here ******************* -->
    <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img"><img src="assets/images/slider/slider-3.jpg" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <div class="animated bounceInDown slider-captions">
                                    <h1 class="slider-title">Most Most Most Most Most</h1>
                                    <p class="slider-text hidden-xs">Simply simply simply simply</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-1.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title">It's time for better help.</h1>
                                <p class="slider-text hidden-xs">simplysimply simplt simply simply</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="assets/images/slider/slider-2.jpg" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title"> Donate donate donate </h1>
                                <p class="slider-text hidden-xs"> simply simply simply simply simply</p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>                 
                  
 <!--  ************************* About Us Starts Here ************************** -->    
       
<div class="about-us container-fluid">
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
                           <a href="volunteer.php" i class="fas fa-user"></i>
                            <p>Become a Volunteer</p></a>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="about-qcard ">
                           <a href="events.php" i class="fas fa-search-dollar red"></i>
                            <p>Quick Fundraise</p></a>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="about-qcard ">
                           <a href="donate.php"i class="fas fa-donate yell"></i>
                            <p>Give Donation</p></a>
                        </div>
                    </div>
                     <!--<div class="col-md-6">
                        <div class="about-qcard ">
                           <a href="#"i class="fas fa-hands-helping blu"></i>
                            <p>Help Someone</p></a>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>     
   
   
    
 <!-- ################# Mission Vision Start Here #######################--->
  
 <!-- <section class="container-fluid mission-vision">
      <div class="container">
          <div class="row mission">
              <div class="col-md-6 mv-det">
                  <h1>Our Mission</h1>
                  <p></p>
              </div>
              <div class="col-md-6 mv-img">
                  <img src="assets/images/mmisin.jpg" alt="">
              </div>
          </div>
          <div class="row vision">
              <div class="col-md-6 mv-img">
                   <img src="assets/images/vvision.jpg" alt="">
              </div>
              <div class="col-md-6 mv-det">
                   <h1>Our Vision</h1>
                   <p></p>
              </div>
          </div>
      </div>
  </section>   -->
   

    
     <!-- ################# Events Start Here#######################--->
    <section class="events">
        <div class="container">
            <div class="session-title row">
                <h2>Popular Events</h2>
                <p>We are a Foundation raising money for child education</p> 
            </div>
            <div class="event-ro row">
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="assets/images/events/.jpg" alt="">
                        <h4>Child Education in Rwanda</h4>
                        
                        <p class="raises"><span>Raised : 340,425RWF</span> / 500,000RWF </p>
                        <p class="desic">Donate now to educate Rwandan Future </p>
                        <button class="btn btn-success btn-sm">Donate Now</button>
                    </div>
                </div>
                  
          <div class="card my-4">
            <h5 class="card-header">Recent Activities</h5>
            <div class="card-body">
                      <ul class="mb-0">
<?php
$query=mysqli_query($conn,"select activity.id as eid,activity.ActivityTitle as title,activity.ActivityDetails as details from activity left join category on category.id=activity.CategoryId 
 limit 3");
while ($row=mysqli_fetch_array($query)) {

?>

  <li>
                      <a href="news-details.php?nid=<?php echo htmlentities($row['eid'])?>"><?php echo htmlentities($row['title']);?></a>
                    </li>
            <?php } ?>
          </ul>
            </div>
          </div>
            </div>
        </div>
    </section>   
    

   
   
    <!-- ################# Charity Number Starts Here#######################--->


  <!--  <div class="doctor-message">
        <div class="inner-lay">
            <div class="container">
               <div class="row session-title">
                   <h2>Our Digital Achievemtns </h2>
                   <p>We can talk for a long time about achievemts including contracts, partnership:</p>-->
                  <!-- <p>We can talk for a long time about advantages of our Dental clinic before other medical treatment facilities.
But you can read the following facts in order to make sure of all pluses of our clinic:</p>-->
          <!--     </div>
                <div class="row">
                    <div class="col-sm-3 numb">
                        <h3>No</h3>
                        <span>YEARS OF EXPEREANCE</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>No+</h3>
                        <span>HAPPY CHILDRENS</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>No+</h3>
                        <span>EVENTS</span>
                    </div>
                    <div class="col-sm-3 numb">
                        <h3>No+</h3>
                        <span>FUNT RAISED</span>
                    </div>
                </div>
            </div>

        </div>

    </div> -->
         
   
          
    
    <!-- ################# Our Blog Starts Here#######################--->

    <section class="our-blog">
         	<div class="container">
         		<div class="row session-title">
        			<h2> Our Adds On</h2>
        			<p>Add moremoremorempremore</p>
        		</div>
        		<div class="blog-row row">
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="assets/images/events/image_01.jpg" alt="">
        					</figure>
        					<div class="blog-detail">
        						<small>Bbbbbbbbbbb</small>
								<h4>Ethan Foundation</h4>
								<p> </p>
								<div class="link">
									<a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>
        					
        					
        				</div>
        			</div>
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="assets/images/events/image_02.jpg" alt="">
        					</figure>
        					<div class="blog-detail">
        						<small>oooooooooooo</small>
								<h4>Ethan Foundation</h4>
								<p> </p>
								<div class="link">
									<a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>
        					
        					
        				</div>
        			</div>
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="assets/images/events/image_03.jpg" alt="">
        					</figure>
        					<div class="blog-detail">
        						<small>iiiiiiiiiiiii</small>
								<h4>Ethan Foundation</h4>
								<p> </p>
								<div class="link">
									<a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>
        					
        					
        				</div>
        			</div>
        		</div>
         	</div>
         </section>
          
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