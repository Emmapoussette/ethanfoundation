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
                    <li><i class="fas fa-angle-double-right"></i> Events</li>
                </ul>
            </div>
        </div>
    </div>
    
    
   
  <!-- ################# Events Start Here#######################--->
  <?php
  if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 8;
$offset = ($pageno-1) * $no_of_records_per_page;

include('includes/config.php');
$total_pages_sql = "SELECT COUNT(*) FROM events";
$result = mysqli_query($conn,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);
/*$result="select events.id as eid,events.EventTitle as eventtitle,events.EventImage,category.CategoryName as category,category.id as
cid,events.EventDetails as eventdetails,events.PostingDate as postingdate from events left join category on category.id=events.CategoryId
 where events.Is_Active=1 order by events.id desc ";*/
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
<!DOCTYPE html>
<html>
	<head>
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
		
			<br /><br />
			<?php
				$query = "select events.id as eid,events.EventTitle as eventtitle,events.RaisesAmount as raises,events.RestAmount as rest,events.EventImage,category.CategoryName as category,category.id as
        cid,events.EventDetails as eventdetails,events.PostingDate as postingdate from events left join category on category.id=events.CategoryId
         where events.Is_Active=1 order by events.id desc ";
				$result = mysqli_query($conn, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
        
			<div class="col-md-4">
				<form method="post" action="donate.php?action=add&id=<?php echo $row["eid"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
          <p <?php echo htmlentities($row["eventtitle"]);?>></p>
          <p class="desic"><?php echo htmlentities($row['eventtitle']);?> </p>
          <img src="../<?php echo htmlentities($row['EventImage']);?>" class="img-responsive" /><br> 
          <img src="<?php echo $row["eventimage"]; ?><?php echo $row["EventImage"]; ?>" class="img-responsive" /><br> 
            <!--<input type="text" name="quantity" value="1" class="form-control" />-->
            <input type="hidden" name="hidden_name" value="<?php echo $row["eventdetails"]; ?>" />
						<input type="hidden" name="hidden_name" value="<?php echo $row["eventdetails"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["rest"]; ?>" />

            <p class="raises"><b><span style="color:#4a0b96">Raised :<?php echo $row["rest"]; ?> Rwf</span> /<?php echo $row["raises"];?> Rwf</b> </p>
                    <p class="desic"><?php echo htmlentities($row['eventdetails']);?> </p>
                    <button a href="donate.php" class="btn btn-success btn-sm">Donate Now</button>

						<!--<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />-->

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			
					
		</div>
	</div>
	<br /></br>
      </div>
	</body>
</html>

<center>
    <ul class="pagination justify-content-center mb-4">
        <li class="page-item"><a href="?pageno=1"  class="page-link">1</a></li>
        <li class="page-item"><a href="?pageno=2"  class="page-link">2</a></li>
        <li class="page-item"><a href="?pageno=3"  class="page-link">3</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link">Next</a>
        </li>
        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
    </ul>
      </center>
       
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