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
            <section class="our-blog">
         	<div class="container">
        
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<br />
		<div class="container">
			<br />
			<br />
			<br />
			<!--<h3 align="center">Tutorial - <a href="http://www.webslesson.info/2016/08/simple-php-mysql-shopping-cart.html" title="Simple PHP Mysql Shopping Cart">Simple PHP Mysql Shopping Cart</a></h3><br />
--><br /><br />
			<?php
				//$query = "SELECT * FROM activity ORDER BY id ASC";
        $query = " select events.id as eid,events.EventTitle as eventtitle,events.RaisesAmount as raises,events.RestAmount as rest,events.EventImage,category.CategoryName as category,category.id as
        cid,events.EventDetails as eventdetails,events.PostingDate as postingdate from events left join category on category.id=events.CategoryId
         where events.Is_Active=1 order by events.id desc  limit 3"; 
				$result = mysqli_query($conn, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="index.php?action=add&id=<?php echo $row["eid"]; ?>">
					<div style="border:1px solid #000000; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="<?php echo $row["ActivityImage"]; ?>" class="img-responsive" /><br />
					

						<h4 class="text-info"><?php echo $row["title"]; ?></h4>

						<!--<input type="text" name="quantity" value="1" class="form-control" />-->

						<input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>" />

						
            

						<!--<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />-->
            <a href="news-details.php?nid=<?php echo htmlentities($row['eid'])?>" class="btn btn-primary">Read More &rarr;</a>
            <div class="card-footer text-muted">
           
            </div>
					</div>
				</form>
			</div>
			<?php
					}
				}
			?> 
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
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<br />
		<div class="container">
			<br />
			<br />
			<br />
			<!--<h3 align="center">Tutorial - <a href="http://www.webslesson.info/2016/08/simple-php-mysql-shopping-cart.html" title="Simple PHP Mysql Shopping Cart">Simple PHP Mysql Shopping Cart</a></h3><br />
--><br /><br />
			<?php
				//$query = "SELECT * FROM activity ORDER BY id ASC";
        $query = " select activity.id as eid,activity.ActivityTitle as title,activity.ActivityImage,category.CategoryName as category,category.id as
cid,activity.ActivityDetails as details,activity.PostingDate as postingdate from activity left join category on category.id=activity.CategoryId
 where activity.Is_Active=1 order by activity.id desc limit 3"; 
				$result = mysqli_query($conn, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="index.php?action=add&id=<?php echo $row["eid"]; ?>">
					<div style="border:1px solid #000000; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="<?php echo $row["ActivityImage"]; ?>" class="img-responsive" /><br />
					

						<h4 class="text-info"><?php echo $row["title"]; ?></h4>

						<!--<input type="text" name="quantity" value="1" class="form-control" />-->

						<input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>" />

						
            

						<!--<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />-->
            <a href="news-details.php?nid=<?php echo htmlentities($row['eid'])?>" class="btn btn-primary">Read More &rarr;</a>
            <div class="card-footer text-muted">
           
            </div>
					</div>
				</form>
			</div>
			<?php
					}
				}
			?> 
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