<?php  require('include/header.inc.php');  ?>

<?php require('include/connection.inc.php');
 $msg='';

 if(isset($_POST['submit'])) {

    $username=$_POST['username'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $password=$_POST['password'];


  /* $q="select * from login where email='email'" ;
   $result=mysqli_query($con,$q);
   
   $b=mysqli_num_rows($result);
   if($b!=0)
 {  
   header('location:login.php');
   $msg='This email is Already Registred';
 }
else
{ */

    $sql="insert into login (name,mobile,email,password) values ('$username','$mobile','$email','$password')" ;

    $res=mysqli_query($con,$sql);

    
  
    header('location:login.php');
  
 }

  ?>



<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-lg-12 col-md-12" style="background-color: blue;">
        
      </div>
    </div>
</div>

<div class="container">
    <div class="row">
       <div class="col-sm-12 col-lg-12 col-md-12">
        <h2 style="margin-top: 10px; margin-bottom: 15px; color: blue;">Create An Account</h2>
        <form  method="post" >
         <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="name" required="required">
          </div>
          <div class="form-group">
            <label>Mobile Number</label>
            <input type="phone" name="mobile" class="form-control" placeholder="Mobile_number" required="required">
          </div>
          <div class="form-group">
            <label>E-mail ID</label>
            <input type="email" name="email" class="form-control" placeholder="E_mail Id" required="required">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="password" required="required">
          </div>
         <center> <button style="margin-bottom: 11px;" type="submit" name="submit" class="btn btn-primary"> Submit</button></center>      
        </form>

       </div> 
       
    </div>
  </div>


  <?php  require('include/footer.inc.php');  ?>
