
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

$email = $_POST['email'];
$msg = $_POST['msg'];


$set = "INSERT INTO contact(email,msg) VALUES('$email','$msg')";


$set=mysqli_query($connect, $set);

?>