<?php
$servername="localhost";
$username="root";
$password="mysql";
$database="jp_data";

$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
	die("connection failed: " mysqli_connect_error());
}
?>