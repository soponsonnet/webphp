<?php

include "connect.php";

$filename = $_FILES["photo"]["name"];
$tempname = $_FILES["photo"]["tmp_name"];
$folder = "./images/" . $filename;

$sql = "INSERT INTO tbl_product (name, price, stock, description )
VALUES ('$_POST[name]','$_POST[price]','$_POST[stock]','$_POST[description]')";

if (mysqli_query($conn, $sql)) {
  if (copy($tempname, $folder)) {
    echo "อับโหลดรู้ได้แล้ว";
  } else {
    echo "อับโหลดรูปไม่ได้";
  }
  
  echo "บันทึกเสร็จแล้ว";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>