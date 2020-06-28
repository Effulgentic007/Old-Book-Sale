<?php  require('include/header.inc.php');

       require('include/connection.inc.php');

       require('include/function.inc.php'); 

 ?>

<!--- Carousel Area Star --->

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="image/logo.png" class="d-block w-100" alt="" height="300">
		</div>
	</div>
</div>
<br>

<!--- Carousel Area End --->

<hr>
<h4><center> Recommended For You</h4></center>

<!--- ListShow Area Star --->

<?php home_first_product(); ?>

<!--- ListShow Area End --->

<!-- Catagory Area Start  --->

<?php  book_category();  ?>

<!-- Catagory Area End  --->

<h4><center>New Arrivals</h4></center>

<!--- ListShow Area Star --->

<?php home_first_product(); ?>

<!--- ListShow Area End --->
<!--
<section>
<div class="container">
	<div class="row">
		<div class="col-lg-3 col-md-4 col-md-12">
			<form>
				<div class="card-body">
					<img src="image/logo.png" class="image-fluid mb-2" height="180" width="210">
					<h3>price<span>Discount</span></h3>
					<p>Details</p>
				</div>	
			</form>	
		</div>
	</div>
</div>
</section> 
--->



<?php require('include/footer.inc.php');  ?>