<?php
define('DB_SERVER','us-cdbr-east-05.cleardb.net');
define('DB_USER','bcd8c189837280');
define('DB_PASS' ,'1897ad3f');
define('DB_NAME','heroku_4bf53487c839d3e');
$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}/*
?>

<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME','ethan');
$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}*/ 
?>
