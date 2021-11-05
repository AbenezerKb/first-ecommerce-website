
<?php

include("../../partial/connect.php");
//include("../index.php");

$newid=$_GET['del_id'];

$set="DELETE FROM products WHERE ID='$newid'";




if( mysqli_query($connect, $set))
    {
        header("Location: ../productsshow.php");
    }

 else{

    header("Location: ../index.php");

 }   
?>
