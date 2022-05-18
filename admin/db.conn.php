<?php 

# server name
$sName = "us-cdbr-east-05.cleardb.net";
# user name
$uName = "bcd8c189837280";
# password
$pass = "1897ad3f";

# database name
$db_name = "heroku_4bf53487c839d3e";

#creating database connection
try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}