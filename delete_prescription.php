<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){
$id=$_SESSION['pharmacist_id'];
$user=$_SESSION['username'];
}else{
header("location:index.php");
exit();
}
$id=$_GET[prescription_id];
$sql="delete from prescription where prescription_id='$id'";
mysqli_query($con, $sql);
//$rows=mysql_fetch_assoc($result);
header("location:prescription.php");
?>


