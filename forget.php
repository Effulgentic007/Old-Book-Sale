<?php  require('include/header.inc.php');

       require('include/connection.inc.php');

       require('include/function.inc.php'); 

 ?>
<?php  
   $msg='';

if(isset($_POST['submit'])){

$email=$_POST['email'];
$password=$_POST['password'];

$q="select * from login where email = '$email'";
$result=mysqli_query($con , $q);

$a=mysqli_num_rows($result);

if($a!=0)
{
  $q="UPDATE login set password = '$password' where email = '$email' ";
  $result=mysqli_query($con , $q);
  //echo "<script>alert('Password Reset Sussesfully')</script>";
  header('location:login.php');

}
else
{
   $msg="Plese enter correct Email Id";
}



}


?>


<section>
<form method="post">
	<div class="container">
   
    <div class="row">
       <div class="col-sm-12 col-lg-12 col-md-12">
        <h2><center> Reset Your Password</center></h2>
        
         
          <div class="form-group">
            <label>E-mail ID</label>
            <input type="email" name="email" class="form-control" placeholder="E_mail Id" required="required">
          </div>
          <div class="form-group">
            <label>New Password</label>
            <input type="password" name="password" class="form-control" placeholder="New Password" required="required">
          </div>
          
          <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="submit"> Submit</button>
              <?php echo "$msg";  ?>
      
        </form>   
    </div>
  </div>
  </section>
  <br>

 <?php require('include/footer.inc.php');  ?>