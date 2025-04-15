<?php
//database connection
$conn=mysqli_connect('localhost','root','','forasss');
if(!$conn) {
	echo "connection failed:" .mysqli_connection_error($conn);
	die();
}
?>