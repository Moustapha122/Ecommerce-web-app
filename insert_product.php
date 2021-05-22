<!DOCTYPE html>
<?php

include ("includes/db.php");
?>

<html lang="en">
<head>

    <title>Inserting Product</title>
    <!DOCTYPE html>
<html>
<head>
<script src="https://cdn.tiny.cloud/1/gt4afskmf18a1vo7rpfcj06dcg9shn8yl5xquv2if26zgba3/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>

  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
   });
  </script>


    
</head>
<body bgcolor="skyblue">
    
<form action="insert_product.php" method="POST" enctype="multipart/form-data">

<table align="center" width="600" border="2" bgcolor="orange">
    <tr align="center">
        <td colspan="7"><h2>Insert New Post:<h2></td>
</tr>
<tr>
    <td align="right"><b>Product Title:</b></td>
    <td><input type="text" name="product_title" size="60" required /></td>

</tr>
<tr>
    <td align="right"><b>Product Category:</b></td>
    <td>
        <select name="product_cat" required>
            <option>Select a Category</option>
            <?php 
            
            $get_cats="select * from category";
$run_cats=mysqli_query($con,$get_cats);
while($row_cats=mysqli_fetch_array($run_cats))
{

    $cad_id=$row_cats['cad_id'];
    $cad_title=$row_cats['cad_title'];

    echo "<option value='$cad_id'>$cad_title</option>";
}
            
            
            ?>

</select>

    </td>

</tr>
<tr>
    <td align="right"><b>Product Brand:</b></td>
    <td>
    <select name="product_band" required>
            <option>Select a Brand</option>
            <?php 
          $get_bands="select * from bands";
          $run_bands=mysqli_query($con,$get_bands);
          while($row_bands=mysqli_fetch_array($run_bands))
          {
          
              $bands_id=$row_bands['brand_id'];
              $brands_title=$row_bands['brand_title'];
          
              echo "<option value='$brand_id'>$brands_title</option>";
          }
            
            
            ?>

</select>
    </td>

</tr>
<tr>
    <td align="right"><b>Product Image:</b></td>
    <td><input type="file" name="product_image" required/></td>

</tr>
<tr>
    <td align="right"><b>Product Price:</b></td>
    <td><input type="text" name="product_price" required/></td>

</tr>
<tr>
    <td align="right"><b>Product Description:</b></td>
    <td><textarea name="product_desc" cols="20" rows="10"></textarea></td>

</tr>
<tr>
    <td align="right"><b>Product Keywords:</b></td>
    <td><input type="text" name="product_keywords" size="50" required/></td>

</tr>
<tr align="center">
   
    <td colspan="7"><input type="submit" name="Insert_post" value="Insert Product Now"/></td>

</tr>







</form>
</body>
</html>
<?php 

//gettint the text data from the fields

if(isset($_POST['insert_post'])){
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $product_band = $_POST['product_brand'];
    $product_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];
    $product_keywords = $_POST['product_keywords'];
    
    //getting the image from the field

    $product_image = $_FILES ['product_image'] ['name'];
    $product_image_tmp = $_FILES['product_image'] ['tmp_name'];

    move_uploaded_file($product_image_tmp,"product_images/$product_image");


   $insert_product ="insert into products 
    
    (product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords) values
    (' $product_cat',' $product_band',' $product_title','$product_price',' $product_desc','  $product_image','
     $product_keywords')";

     $insert_pro = mysqli_query($con,$insert_product);
     if($insert_pro){

        echo "<script>alert('product Has been inserted!')</script>";
        echo "<script>window.open ('insert_product.php','_self') </script>";
        


     }

    
}







?>