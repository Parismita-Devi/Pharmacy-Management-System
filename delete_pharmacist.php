<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){
$id=$_SESSION['admin_id'];
$user=$_SESSION['username'];
}else{
header("location:index.php");
exit();
}
$id=$_GET[pharmacist_id];
$sql="delete from pharmacist where pharmacist_id='$id'";
mysqli_query($con, $sql);
//$rows=mysql_fetch_assoc($result);
header("location:admin_pharmacist.php");
?>


