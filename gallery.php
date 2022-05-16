<?php
include('header.php');
include('admin/includes/config.php');
?>
 
  <!--  ************************* Page Title Starts Here ************************** -->
        
<!--    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Our Gallery</h2>
                <ul>
                    <li> <a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Gallery</li>
                </ul>
            </div>
        </div>
    </div>-->
    
    
   
 <!--  ************************* Gallery Starts Here ************************** -->
        <div id="portfolio" class="gallery">    
           <div class="container">
              
              <div class="row">
                

       <!-- <div class="gallery-filter d-none d-sm-block">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">Rwanda</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">Ethiopia</button>-->
           <!-- <button class="btn btn-default filter-button" data-filter="spray"> Money</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Business Alaysis</button>
        </div>-->
      
<body>
   
   <br/>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="admin/css/foundation.css" />
   <script src="js/vendor/jquery.js"></script>
   <script src="js/vendor/modernizr.js"></script>

   <!--Content goes here-->
   <div class="row">
      <div class="large-12 columns">
         <!--img src="img/instalikelogo.png">
         Instagram like photo gallery grid-->
         <?php
         if(isset($_GET['success'])) {
         if($_GET['success']=="yes"){?>
         <div class="row">
            <div class="small-6 large-6 columns">
               <div data-alert class="alert-box success radius ">
                  Image "<?= $_GET['title']; ?>" uploaded successfully.
                  <a href="#" class="close">&times;</a>
               </div>
            </div>
         </div>
         <?php } else {?>
          <div class="row">
            <div class="small-6 large-6 columns">
               <div data-alert class="alert-box alert radius ">
                  There was a problem uploading the image.
                  <a href="#" class="close">&times;</a>
               </div>
            </div>
         </div>
         <?php } }?>
         <ul class="clearing-thumbs small-block-grid-1 medium-block-grid-2 large-block-grid-4" data-clearing>
            <?php
            require 'admin/dbc.php';
            $stmt = $dbc->query("SELECT * FROM tbl_photos ORDER by img_id ASC");
            foreach ($stmt as $img) {
            ?>
            <li>
               <a href="admin/<?= $img['img_path']; ?>">
               <img data-caption="<?= $img['img_title']; ?>" src="admin/<?= $img['img_path']; ?>"></a>
            </li>
            <?php } ?>
         </ul>
      </div>
   </div>
   <!--End content-->
   <!--MODALS-->
   <div id="uploadModal" class="reveal-modal tiny" data-reveal></div>
   <!--END MODALS-->
   <div id="footer">
      <hr/>
      <div class="row">
         <div class="large-6 columns" style="margin-top: -15px;">
            
         </div>
      </div>
   </div>
   </div>
   <script src="js/foundation.min.js"></script>
   <script src="js/sticky-footer.js"></script>
   <script src="js/foundation/foundation.topbar.js"></script>
   <script src="js/foundation/foundation.reveal.js"></script>
   <script src="js/foundation/foundation.abide.js"></script>
   <script>
      $(document).foundation();
   </script>
</body>

            <!--<div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter sprinkle">
                <img src="assets/images/events/image_02.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter hdpe">
                <img src="assets/images/events/image_01.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
                <img src="assets/images/events/image_03.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/events/image_04.jpg" class="img-responsive">
            </div>

          

            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter spray">
                <img src="assets/images/events/image_05.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter irrigation">
                <img src="assets/images/events/image_06.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-3 col-md-4 col-sm-3 col-xs-6 filter irrigation">
                <img src="assets/images/events/image_07.jpg" class="img-responsive">
            </div>-->

            
        </div>
    </div>
       
       
       </div>
        <!-- ######## Gallery End ####### -->    
  
                 
  <!--  ************************* Footer Starts Here ************************** -->
  <div class="row">
            <div class="large-6 columns" style="margin-top: -15px;">
               
            </div>
         </div>
      </div>
      </div>
      <script src="admin/js/foundation.min.js"></script>
      <script src="admin/js/sticky-footer.js"></script>
      <script src="admin/js/foundation/foundation.topbar.js"></script>
      <script src="admin/js/foundation/foundation.reveal.js"></script>
      <script src="admin/js/foundation/foundation.abide.js"></script>
      <script>
         $(document).foundation();
      </script>
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