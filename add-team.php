
  <!--  ************************* Page Title Starts Here ************************** -->
        
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Our Team</h2>
                <ul>
                    <li> <a href="add-team.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Add Team</li>
                </ul>
            </div>
        </div>
    </div>
    
    
   
  <!-- ################# Events Start Here#######################--->
  <?php

include('includes/config.php');
?>
<body>
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
    <form name="addpost" method="post" enctype="multipart/form-data">
 <div class="form-group m-b-20">
<label for="exampleInputEmail1">Full Name</label>
<input type="text" class="form-control" id="posttitle" name="name" placeholder="Enter title" required>
</div> <div class="form-group m-b-20">
<label for="exampleInputEmail1">Position</label>
<input type="text" class="form-control" id="posttitle" name="position" placeholder="Enter title" required>
</div>
    </form>

     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">

           <input type="file" 
                  name="my_image">

           <input type="submit" 
                  name="submit"
                  value="Upload">
     	
     </form>
</body>
</html>
