<?php  

session_start();

include ("Admin-partial/head.php");

if(isset($_POST['login']))
{


include("../partial/connect.php");
$email=$_POST['email'];
$password=$_POST['password'];

$set="SELECT * FROM admins WHERE username='$email' AND password='$password'";

$results = $connect->query($set);
$final=$results->fetch_assoc();

$_SESSION['email']=$final['username'];
$_SESSION['password']=$final['password'];

if($email==$final['username'] AND $password==$final['password'])
{
   

    header("Location:index.php");

}
else{
    header("Location:Adminlogin.php");
}
}
?>







<?php 
















?>
<div class="row"><div class="col-sm-4">


</div>


<div class="col-sm-4">




<!-- Horizontal Form -->
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="Adminlogin.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="" name="email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="" name="password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit"  class="btn btn-default">Cancel</button>
                <button type="submit" name="login" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>


          </div>

</div>