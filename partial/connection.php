<?php

include ("connect.php");

if ($connect)
{
	printf("it's working");
}

else{
	printf("it's not working", $mysqli->error);

}


?>