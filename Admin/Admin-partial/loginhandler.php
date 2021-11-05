<?php  

session_start();

if(isset($_POST['login']))
{


include("../../partial/connect.php");
$email=$_POST['email'];
$password=$_POST['password'];

$set="SELECT * FROM admins WHERE username='$email' AND password='$password'";

$results = $connect->query($set);
$final=$results->fetch_assoc();

$_SESSION['email']=$final['username'];
$_SESSION['password']=$final['password'];

if($email==$final['username'] AND $password==$final['password'])
{
   
    header("location:../index.php");

}
else{
    header("location:Adminlogin.php");
}
}
?>
