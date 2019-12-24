<?php include_once('db_inc.php');?>
<?php include_once('header.php');?>
<?php include_once('menu.php');?>
<?php include_once('banner.php');?>


    <section class="event_home" id="shop">
      <div class="pt-3 pb-3" id="show_event" style="width: 84.5%;height:auto;margin: auto;">
        <h2 class="display-4 text-left pt-2">Our best jeans</h2>
        <hr class="" style="max-width:100%;height: 10px;">
      <div class="row"> 
      <?php
                $sql_e = "select * from man where item_type ='jeans'";
                $res_e = mysqli_query($con, $sql_e);
                while ($row_e = mysqli_fetch_array($res_e)){?>       
                 <div class="col-md-3 col-sm-3 col-xs-3">
                 <div class="text-center pb-3">
                  <a href="item_detail.php?show=<?php echo $row_e['item_id'];?>" class="p-2 text-uppercase text-white" style="max-width: 60%;font-size: 14px;">
                  <img src="<?php echo $row_e['item_img'];?>" class="zoom" style="" alt="Image event">
                   <h5 class="pt-1 text-dark"><?php echo $row_e['item_fac'];?></h5>
                   <p class="text-dark"><?php echo $row_e['item_desc'];?></p>
                   <p class="text-dark">upto 40% discount</p>
                   </a>
                 </div>
                </div>
                <?php }?>
               </div>
            </div>
    </section>
    <!-- End of suits -->
    <!-- Jeans -->
    <section class="event_home">
      <div class="pt-3 pb-3" id="show_event" style="width: 84.5%;height:auto;margin: auto;">
        <h2 class="display-4 text-left pt-2">Our best suits</h2>
        <hr class="" style="max-width:100%;height: 10px;">
        <div class="row">        
                <?php
                $sql_e = "select * from man where item_type ='suit' limit 4";
                $res_e = mysqli_query($con, $sql_e);
                while ($row_e = mysqli_fetch_array($res_e)){?>       
                 <div class="col-md-3 col-sm-3 col-xs-3">
                 <div class="text-center pb-3">
                  <a href="item_detail.php?show=<?php echo $row_e['item_id'];?>" class="p-2 text-uppercase text-white" style="max-width: 60%;font-size: 14px;">
                  <img src="<?php echo $row_e['item_img'];?>" class="zoom" style="" alt="Image event">
                   <h5 class="pt-1 text-dark"><?php echo $row_e['item_fac'];?></h5>
                   <p class="text-dark"><?php echo $row_e['item_desc'];?></p>
                   <p class="text-dark">upto 40% discount</p>
                   </a>
                 </div>
                </div>
                <?php }?> 
      </div>
    </section>
    <!-- End of Jeans -->
    <!-- Show Shoes -->
    <section class="event_home">
      <div class="pt-3 pb-3" id="show_event" style="width: 84.5%;height:auto;margin: auto;">
        <h2 class="display-4 text-left pt-2">Our best shoes</h2>
        <hr class="" style="max-width:100%;height: 10px;">
      <div class="row">        
                 <?php
                $sql_e = "select * from man where item_type ='shoes'";
                $res_e = mysqli_query($con, $sql_e);
                while ($row_e = mysqli_fetch_array($res_e)){?>       
                 <div class="col-md-3 col-sm-3 col-xs-3">
                 <div class="text-center pb-3">
                  <a href="item_detail.php?show=<?php echo $row_e['item_id'];?>" class="p-2 text-uppercase text-white" style="max-width: 60%;font-size: 14px;">
                  <img src="<?php echo $row_e['item_img'];?>" class="zoom" style="" alt="Image event">
                   <h5 class="pt-1 text-dark"><?php echo $row_e['item_fac'];?></h5>
                   <p class="text-dark"><?php echo $row_e['item_desc'];?></p>
                   <p class="text-dark">upto 40% discount</p>
                   </a>
                 </div>
                </div>
                <?php }?>
      </div>
    </section>
    <!-- End of shoes -->
    <!-- Show Shoes -->
    <section class="event_home">
      <div class="pt-3 pb-3" id="show_event" style="width: 84.5%;height:auto;margin: auto;">
        <h2 class="display-4 text-left pt-2">Deal of the day</h2>
        <hr class="" style="max-width:100%;height: 10px;">
      <div class="row">        
                 <?php
                $sql_e = "select * from watch where item_type ='watch'";
                $res_e = mysqli_query($con, $sql_e);
                while ($row_e = mysqli_fetch_array($res_e)){?>       
                 <div class="col-md-3 col-sm-3 col-xs-3">
                 <div class="text-center pb-3">
                  <a href="item_detail.php?show=<?php echo $row_e['item_id'];?>" class="p-2 text-uppercase text-white" style="max-width: 60%;font-size: 14px;">
                  <img src="<?php echo $row_e['item_img'];?>" class="zoom" style="" alt="Image event">
                   <h5 class="pt-1 text-dark"><?php echo $row_e['item_fac'];?></h5>
                   <p class="text-dark"><?php echo $row_e['item_desc'];?></p>
                   <p class="text-dark">upto 40% discount</p>
                   </a>
                 </div>
                </div>
                <?php }?>
      </div>
    </section>
    <!-- End of shoes -->
    <?php include_once('footer.php');?>