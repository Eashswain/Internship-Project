<?php
$url='localhost';
$username='wildcats_treks';
$password='wildcats_treks';
$conn=mysqli_connect($url,$username,$password,"wildcats_treks");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>