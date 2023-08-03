<?php
include "connect.php";
$filename = $_FILES["photo"]["name"];
$tempname = $_FILES["photo"]["tmp_name"];
$folder = "./images/" . $filename;
$sql = "UPDATE tbl_member SET 
  firstname='$_POST[firstname]',
  lastname='$_POST[lastname]', 
  email='$_POST[email]', 
  phone='$_POST[phone]',
  address='$_POST[address]',
  photo= '$_POST[$filename]' 
  WHERE id = '$_GET[id]' ";

if (mysqli_query($conn, $sql)) {
  if (copy($tempname, $folder)) {
    echo "อับโหลดรู้ได้แล้ว";
  } else {
    echo "อับโหลดรูปไม่ได้";
  }
  
    echo "แก้ไขข้อมูลเรียบร้อย";
    header("location: member_show.php");
  } else {
    echo "Error deleting record:" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>