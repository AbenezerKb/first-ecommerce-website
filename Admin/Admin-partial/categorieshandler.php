
<?php

include("../../partial/connect.php");
//include("../index.php");

if ($connect)
{
	printf("it's working");
}

else{
	printf("it's not working", $mysqli->error);

}

$categories = $_POST['categories'];



$set = "INSERT INTO categories(name) VALUES('$categories')";


$set=mysqli_query($connect, $set);


header("location: ../productsshow.php")
?>



