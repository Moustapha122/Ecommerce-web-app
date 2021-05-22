<?php

$con=mysqli_connect("localhost","root","","ecommerce");


// getting the categorie
function getCats(){
    global $con;

$get_cats="select * from category";
$run_cats=mysqli_query($con,$get_cats);
while($row_cats=mysqli_fetch_array($run_cats))
{

    $cad_id=$row_cats['cad_id'];
    $cad_title=$row_cats['cad_title'];

    echo "<li><a href='#'>$cad_title</a><li>";
}

        }
        // getting the bands
function getBands(){
    global $con;

$get_bands="select * from bands";
$run_bands=mysqli_query($con,$get_bands);
while($row_bands=mysqli_fetch_array($run_bands))
{

    $bands_id=$row_bands['brand_id'];
    $brands_title=$row_bands['brand_title'];

    echo "<li><a href='#'>$brands_title</a><li>";
}

        }
?>
