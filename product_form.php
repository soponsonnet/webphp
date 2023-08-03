<link href="./styles.css" rel="stylesheet"/>
<h2> ฟอร์มกรอกข้อมูลสินค้า </h2>
<form action="product_insert.php" method="post" enctype="multipart/form-data">
    ชื่อสินค้า<input type="text" name="name" class="input" />
    ราคา<input type="text" name="price" class="input"/>
    จำนวนในคลัง<input type="text" name="stock" class="input" />
    รายละเอียด<textarea name="description" class="input"> </textarea><br/>
    แนบรูป<input type="file" name="photo" class="input" />
    <input type="submit" value="บันทึกข้อมูล" class="button" >
</form> 