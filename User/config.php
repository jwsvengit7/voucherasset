<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'db_voucher');

$conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
if ($conn->connect_error) {
	// code...
	echo "Error Loading From server: Check connections";
}



?>