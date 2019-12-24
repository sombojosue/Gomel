  <?php
  include_once('db_inc.php');
  $sql_a = 'select * from about where id=4';
  $res_a = mysqli_query($con, $sql_a);
  while ($row_a = mysqli_fetch_array($res_a)){
  $about_1 = $row_a['about_name'];
  $about_2 = $row_a['about_title'];
  $about_3 = $row_a['about_msg'];
  }
  ?>
  <!-- Include Header and menu file -->

  <?php include_once('header.php');?>
  <?php include_once('menu.php');?>

    <div class="container-fluid" id="banner">
      <?php
                $sql_b = 'select * from banner';
                $res_b = mysqli_query($con, $sql_b);
                while ($row_b = mysqli_fetch_array($res_b)){if($row_b['banner_type']=='big'){?>
      <h2 class="text-white text-center display-3"><img src="img/logo.png" width="500" alt="Image banner"><br><?php echo $row_b['banner_name'];?></h2>
      <?php }?>
      <?php if($row_b['banner_type']=='small'){?>
      <h3 class="text-danger text-center">_______  <strong class="text-white"><?php echo $row_b['banner_name'];?></strong> ________</h3>
      <?php }?>
      <?php }?>
      <a href="#aboutus" class="btn btn-danger text-uppercase text-center p-3 mt-2" style="margin-left: 44%;">About us&nbsp;<i class="fas fa-angle-double-down text-white"></i></a>
    </div>
    <div id="service" class="container-fluid">
      <div class="pt-3" style="width: 70%;margin: auto;">
      <div class="row">
     <?php
                $sql_s = 'select * from service';
                $res_s = mysqli_query($con, $sql_s);
                while ($row_s = mysqli_fetch_array($res_s)){?>
        
                 <div class="col-4">
                   <img src="<?php echo $row_s['service_img'];?>" alt="Image service" style="max-width: 40px;">&nbsp;
                   <span class="text-default"><?php echo $row_s['service_text'];?></span>
                 </div> 
                
                <?php }?>
      </div>
      </div>
    </div>

    <section id="aboutus" class="container-fluid">
      <div class="pt-3" style="width: 80%;margin: auto;">
        <h2 class="display-4 text-center pt-2">ABOUT US</h2>
        <hr class="" style="max-width:10%;height: 4px;background: #f4f4f4;">
      <div class="row">
                <div class="col-md-7 col-xs-7 col-sm-7">
                  <h2 id="about"><?php echo $about_2;?></h2>
                  <p class="text-justify"><?php echo $about_3;?></p>
                </div> 
                <div class="col-md-5 col-sm-5 col-xs-5" style="border-radius: 50px;">
                  <img src="img/jos.jpg" class="ml-5" style="width: 63%;margin: auto;height: 251px;border-radius: 125px;border:10px solid white;margin-top: -25px;" alt="Image banner">
                </div>

          </div>
      </div>
    </section>
    <!-- Team section -->
    <section id="team">
      <div class="pt-3" style="width: 50%;margin: auto;">
      <h2 class="display-4 text-center text-white pt-2 text-uppercase">our team</h2>
        <hr class="bg-primary mb-4" style="max-width:10%;height: 2px;">
      <div class="row">
        <?php
                $sql_s = 'select * from team';
                $res_s = mysqli_query($con, $sql_s);
                while ($row_s = mysqli_fetch_array($res_s)){?>
        <div class="col-md-4 col-sm-4 col-xs-4">
        <div style="line-height: 16px;font-size: 19px;" class="text-white text-center">
         <img src="<?php echo $row_s['team_img'];?>" alt="Image service" width="205"  class="mb-2 rounded-circle gallery_img">
         <p class="text-default"><?php echo $row_s['team_name'];?></p>
         <p class="text-default"><?php echo $row_s['team_job'];?></p>
        </div>
      </div>
      <?php }?>
     </div>
   </div>
    </section>
    <?php include_once('footer.php');?>
