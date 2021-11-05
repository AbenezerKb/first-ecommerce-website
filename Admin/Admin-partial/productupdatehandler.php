
<?php

include("../../partial/connect.php");
//include("../index.php");

if(isset($_POST['update']))
	{



//	printf("it's not working", $mysqli->error);

$newid=$_POST['form_id'];

$newname = $_POST['name'];
$newprice = $_POST['price'];
$newdesc = $_POST['description'];
$newcat = $_POST['category'];


$target ="../../uploads/";

$file_path=$target.basename($_FILES['file']['name']);

$file_name=$_FILES['file']['name'];

$file_tmp=$_FILES['file']['tmp_name'];

$file_store="../../uploads/".$file_name;

move_uploaded_file($file_tmp,$file_store);

$set = "UPDATE products SET name='$newname', price='$newprice', description='$newdesc', picture='$file_path', category_id='$newcat' WHERE ID ='$newid'";

if( mysqli_query($connect, $set))
    {
        header("Location: ../productsshow.php");
    }

 else{

    header("Location: ../index.php");

 }   
    }
?>
