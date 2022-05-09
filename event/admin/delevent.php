<?php include 'db_connect.php' ?>
<?php
if(isset($_GET['id'])){
$qry = $conn->query("SELECT * FROM events where id= ".$_GET['id']);
foreach($qry->fetch_array() as $k => $val){
	$$k=$val;
}
}
?>
<?php 

if(isset($_GET['delete_events'])){
    
    $delete_id = $_GET['delete_events'];
    
    $delete_events = "delete from events where id='$delete_id'";
    
    $run_delete = mysqli_query($conn,$delete_events);
    
    if($run_delete){
        
        echo "<script>alert('One of Your events Has Been Deleted')</script>";
        
        echo "<script>window.open('index.php?view_events','_self')</script>";
        
    }
    
}

?>




<?php } ?>