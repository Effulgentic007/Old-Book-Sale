<?php   
   
   require('include/header.inc.php');
   require('include/connection.inc.php');
   require('include/function.inc.php');

 ?>

 <?php 
     $msg='';
   if(isset($_GET['id'])){

        
         $book_id= $_GET['id'];      


         $q="SELECT * FROM bdata WHERE B_id ='$book_id' ";

         $result=mysqli_query($con,$q);

         $fetch=  mysqli_fetch_array($result);
         
             $date=$fetch['date'];
             $cat_id=$fetch['cat_id'];
             $cat_name=$fetch['cat_name'];
             $pro_id=$fetch['B_id'];
             $name=$fetch['B_name'];
             $image1=$fetch['B_img1'];
             $price=$fetch['B_price'];
             $writer=$fetch['B_writer'];
             $image2=$fetch['B_img2'];
             $des=$fetch['B_des'];
             $publication=$fetch['B_pub'];
             $seller_number=$fetch['seller_number'];
             $state=$fetch['state'];
             $dist=$fetch['dist'];
             $pin_code=$fetch['pincode'];            
}
 
       ?>


       
<div class="container">
  <div class="row">
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
      <div class="card-body">
        <img src='<?php echo "$image1"; ?>' height="500" width="450" alt='<?php echo "$name"; ?>'>
      </div>
    </div>
    <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
      <div class="card-body">
        <img src='<?php echo "$image2"; ?>' height="500" width="450" alt='<?php echo "$name"; ?>'>
      </div>
    </div>
  </div>
  <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12 smt-40 xmt-40">
    <div class="ht__product__dtl">
      <h2> <?php echo "$name"; ?> </h2>
        <ul  class="pro__prize"><br>
                                    
          <li><span>Price :-  &#8360- </span> <?php echo "$price";  ?>&nbsp; </li><br>
          <li><span>Writer :- </span> <?php echo "$writer";  ?> </li><br>
          <li><span>Publication :- </span> <?php echo "$publication";  ?> </li><br>
          <li><span>Description :- </span></li><br>
             <p><?php echo "$des"; ?> </p><br>
        </ul>

        <?php 
                  
                  if(isset($_REQUEST['repot'])){
                   

                    $msg="Thanks for repoting this book.";
                  }

                  ?>
          
          <div>
            <ul>
                <li><span>Seller Number :- </span> <?php echo "$seller_number";  ?> </li><br>                      <li><span>Catagery :- </span> 
                <a style="color: black; text-decoration: none;" href='<?php echo"cat.php?cat_id=$cat_id"; ?>'><?php echo"$cat_name"; ?></a></li>
                <br>
                <li><span>Publish Date :- </span> <?php echo "$date";  ?> </li><br>
                <li><span>Book Id :- </span> <?php echo "$pro_id";  ?>
                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                <button class="btn btn-danger" type="submit" name="repot"> Repot _ Id</button> </li><?php echo "$msg"; ?>


            </ul>
          </div>
                                    
        </div>
      </div>
    </div>              
                               
    <br>
    <center><strong><h5>Related Book </h5></strong></center><br>
    

    <section>
      <div class="container">
        <div class="row">

          <?php 
           
          $qu="SELECT * FROM bdata WHERE  cat_id ='$cat_id' LIMIT 0,4 ";
          $run=mysqli_query($con,$qu);

          while($fetch=mysqli_fetch_array($run)){
           ?>
          
          <div class="col-lg-3 col-md-4 col-sm-12">
            <form>

                    <div class="card-body">
                        <h5> <?php echo "$name"; ?> </h5>
                        <a href='<?php echo" details.php?id=$pro_id"; ?>'><img style="margin-right: 5px;" src='<?php echo"$image1"; ?>' class="image-fluid mb-2" height="180" width="210"></a>
                         <h6 style="font-size: 20px;">&#8360-<?php echo "$price"; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='<?php echo "details.php?id=$pro_id"; ?>'>Details</a> </h6>
                       
                    </div>  
                </form> 
          </div>
        <?php } ?>
        </div>
      </div>
    </section>

 
 <?php  
   
   require('include/footer.inc.php');

 ?>