<?php
include('index.php');
$Name = $_POST['Name'];
$Phone = $_POST['Phone'];
$Email = $_POST['Email'];
$Address = $_POST['Address'];
$Group = $_POST['Group'];
$Rifat="INSERT INTO `doner_info`( `Name`, `Phone`, `Email`, `Address`, `Group`) VALUES ('[$Name]','[$Phone]','[$Email]','[$Address]','[$Group]')";
$data=mysqli_query($conn,$Rifat);
?>