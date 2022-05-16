<?php
//database connection
try {
$dbc = new PDO('mysql:host=us-cdbr-east-05.cleardb.net; dbname=heroku_4bf53487c839d3e', 'bcd8c189837280', '1897ad3f');
$dbc->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
} catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
}
