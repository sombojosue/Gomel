<?php include_once('db_inc.php');?>
<!-- End database configuration -->
<!-- Checking for data validation in search detail -->
<?php
    if (isset($_GET['show'])) {
    $id = $_GET['show'];
    $sql_s = "select * from man where item_id='$id'";
    $res_s = mysqli_query($con, $sql_s);
    while ($row_s = mysqli_fetch_array($res_s)){
      $img =  $row_s['item_img'];
      $name =  $row_s['item_fac'];
      $dsc =  $row_s['item_desc'];
      $price =  $row_s['item_price'];
      $color =  $row_s['item_color'];
      $size =  $row_s['item_size'];
    }
  }else{
    echo "
     <script>window.location = 'index.php'</script>;
    ";
  }
  ?>
<?php include_once('header.php');?>
<?php include_once('menu_item.php');?>

<div class="container mt-2 item-detail">
	<div class="row">
	 	<div class="col-md-6 col-sm-6 col-xs-6">
	 		<img src="<?php echo $img;?>" style="width: 85%;height: 460px;">
	 		<div class="row mt-2">
	 		<div class="col-md-6 col-sm-6 col-xs-6">
	 			<button class="btn btn-warning text-white" style="margin-left: 35px;">Add to card &nbsp;<i class="fas fa-shopping-cart text-white"></i></button>
	 		</div>
	 		<div class="col-md-4 col-sm-4 col-xs-4">
	 			<button class="btn btn-warning ml-5 text-white">Buy now&nbsp;<i class="fas fa-shopping-cart text-white"></i></button>
	 		</div>
	 	</div>
	 	</div>
	 	<!-- end of image detail -->

	 	<div class="col-md-6 col-sm-6 col-xs-6">
	 	<h2><?php echo $name;?></h2>
	 	<p><?php echo $dsc;?></p>
	 	<!-- start rating -->
	 	<div>
	 		<i class="fas fa-star"></i>
	 		<i class="fas fa-star"></i>
	 		<i class="fas fa-star"></i>
	 		<i class="fas fa-star"></i>
	 		<i class="fas fa-star"></i>
	 	</div>
	 	<p>Price <?php echo $price."$";?></p>
	 	<p>Delivery contact</p>
	 	<span>Av de la gombe N.20 kinshasa</span>
	 	<p>Size <?php echo $size;?></p>
	 	<p>Color <?php echo $color;?></p>
	 	</div>
	</div>
</div>