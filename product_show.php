<link rel="stylesheet" href="style.css"/>
<?php
include "connect.php";
$sql = "SELECT * FROM tbl_product";
$result = mysqli_query($conn, $sql);
?>
<table style= "border:1px solid #990055" >
    <th> ชื่อสินค้า</th>
    <th> ราคา</th>
    <th> จำนวนในคลัง</th>
    <th> รายละเอียดสินค้า</th>
    <th> Edit</th>
    <th> Delete</th>
    <?php
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
   ?>
    <tr>
    <td><?php echo "$row[name]"; ?></td>
    <td><?php echo"$row[price] "; ?></td>
    <td><?php echo"$row[stock]  "; ?></td>
    <td><?php echo"$row[description] "; ?></td>
    <td><?php echo"<a href='product_edit.php?id=$row[id]'> Edit</a>";?></td>
    <td><?php echo"<a href='product_del.php?id=$row[id]'> Delete</a>";?></td>  </tr>
  </tr>
  <?php
  }
  ?>
</table>
<?php
} else {
  echo "0 results";
}

mysqli_close($conn);

?>