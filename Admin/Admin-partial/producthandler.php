
<?php

include("../../partial/connect.php");
//include("../index.php");


	printf("it's working");



//	printf("it's not working", $mysqli->error);



$name = $_POST['name'];
$price = $_POST['price'];
$desc = $_POST['description'];
$cat = $_POST['category'];


$target ="../../uploads/";

$file_path=$target.basename($_FILES['file']['name']);

$file_name=$_FILES['file']['name'];

$file_tmp=$_FILES['file']['tmp_name'];

echo $file_tmp;

$file_store="uploads/".$file_name;

move_uploaded_file($file_tmp,$file_store);

$set = "INSERT INTO products(name,price,description,picture,category_id) VALUES('$name', '$price','$desc','$file_path','$cat')";


$set=mysqli_query($connect, $set);

?>
