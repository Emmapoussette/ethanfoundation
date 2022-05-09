<?php include 'db_connect.php' ?>
<?php
if(isset($_GET['id'])){
$qry = $conn->query("SELECT * FROM venue where id= ".$_GET['id']);
foreach($qry->fetch_array() as $k => $val){
	$$k=$val;
}
}
?>
<?php 

if(isset($_GET['delete_venue'])){
    
    $delete_id = $_GET['delete_venue'];
    
    $delete_events = "delete from venue where id='$delete_id'";
    
    $run_delete = mysqli_query($conn,$delete_events);
    
    if($run_delete){
        
        echo "<script>alert('One of Your venue Has Been Deleted')</script>";
        
        echo "<script>window.open('index.php?venue','_self')</script>";
        
    }
    
}

?>




<?php } ?>