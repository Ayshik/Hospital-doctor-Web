<?php
session_start();
  require_once '../Models/db_connect2.php';
 $var=$_SESSION["loggedinuser"];
$query ="UPDATE `appointmentlist` SET `status`='approved' WHERE `status`='none' and username='$var'";
  execute($query);
 // echo $query;
	header("Location:../View/todayappointment.php");




  ?>
