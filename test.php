<?php 
session_start();
include('initialize.php');

    ?>

<!DOCTYPE html>
<html lang="en">

 
    <link rel="icon" href="icon_path" type="image/icon type">
    <title>Ethan-Foundation| Events</title>
    <link rel="shortcut icon" href="images/favicon.ico" />
        <link rel="icon" href="http://www.domain.com/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://www.domain.com/favicon.ico" type="image/x-icon" />    
        <!-- App css -->
      <!--  <link href="../admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../admin/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="../admin/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="../admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../admin/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="../admin/assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="../admin/assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="plugins/switchery/switchery.min.css">
        <script src="../admin/assets/js/modernizr.min.js"></script>-->


  </head>

  <body>

    <!-- Navigation -->
   <?php include('header.php');?>

    <!-- Page Content -->
    <div class="container">


     
      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <!-- Blog Post -->
<?php 
     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 8;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM events";
        $result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($conn,"select events.id as eid,events.EventTitle as eventtitle,events.EventImage,category.CategoryName as category,category.id as
 cid,events.EventDetails as eventdetails,events.PostingDate as postingdate, left join category on category.id=posts.CategoryId where posts.Is_Active=1 order by events.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?>

          <div class="card mb-4">
 <img class="card-img-top" src="admin/assets/<?php echo htmlentities($row['EventImage']);?>" alt="<?php echo htmlentities($row['eventtitle']);?>">
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlentities($row['eventtitle']);?></h2>
                 <p><!--category-->
 <a class="badge bg-secondary text-decoration-none link-light" href="category.php?catid=<?php echo htmlentities($row['cid'])?>" style="color:#fff"><?php echo htmlentities($row['category']);?></a>
<!--Subcategory--->
  </p>
       
              <a href="events-details.php?nid=<?php echo htmlentities($row['eid'])?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo htmlentities($row['postingdate']);?>
           
            </div>
          </div>
<?php } ?>
       

      

          <!-- Pagination -->


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

    
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
      <?php include('footer.php');?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 
</head>
  </body>

</html>
