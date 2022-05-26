<?php 
session_start();
include('header.php');

    ?>
     <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Our Events</h2>
                <ul>
                    <li> <a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Activities</li>
                </ul>
            </div>
        </div>
    </div>
    

<!DOCTYPE html>
<html lang="en">

 
    <link rel="icon" href="icon_path" type="image/icon type">
    <title>Ethan-Foundation| Activities</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
        <link rel="icon" href="http://www.domain.com/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://www.domain.com/favicon.ico" type="image/x-icon" /> 
<?php 
  if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 8;
$offset = ($pageno-1) * $no_of_records_per_page;

include('includes/config.php');
$total_pages_sql = "SELECT COUNT(*) FROM activity";
$result = mysqli_query($conn,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);
//$conn = mysqli_connect("localhost", "root", "", "ethan");



?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
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
 where activity.Is_Active=1 order by activity.id desc"; 
				$result = mysqli_query($conn, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="index.php?action=add&id=<?php echo $row["eid"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="<?php echo $row["ActivityImage"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["title"]; ?></h4>
            <!--<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>-->
						<h4 class="text-danger"> <?php echo $row["category"]; ?></h4>

						<!--<input type="text" name="quantity" value="1" class="form-control" />-->

						<input type="hidden" name="hidden_name" value="<?php echo $row["title"]; ?>" />

						
            <class="text-info"><?php echo $row["details"]; ?>

						<!--<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />-->
            <a href="news-details.php?nid=<?php echo htmlentities($row['eid'])?>" class="btn btn-primary">Read More &rarr;</a>
            <div class="card-footer text-muted">
              Posted on <?php echo htmlentities($row['postingdate']);?>
           
            </div>
					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<!--<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>-->
		</div>
	</div>
	<br />
	</body>
</html><center>
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
<?php
//If you have use Older PHP Version, Please Uncomment this function for removing error 

/*function array_column($array, $column_name)
{
	$output = array();
	foreach($array as $keys => $values)
	{
		$output[] = $values[$column_name];
	}
	return $output;
}*/
include('footer.php');
?>