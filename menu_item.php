   
  <nav class="navbar navbar-expand-lg navbar-dark menu">
  <a class="navbar-brand text-white brand  pl-4" href="index.php"><img src="img/logo.jpg" alt="logo image" width="200" style="position: relative;left: 10px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <?php
                $sql_m = 'select * from menu';
                $res_m = mysqli_query($con, $sql_m);
                while ($row_m = mysqli_fetch_array($res_m)){?>
                <li class="nav-item mx-4"><a href="<?php echo $row_m['link'];?>" class="navbar-link text-white text-uppercase mb-sm-3"><?php echo $row_m['name'];?></a></li>
                <?php }?>
                <li class="nav-item mx-5"><a href="login.php" class="navbar-link text-white text-uppercase mb-sm-3"><i class="fas fa-shopping-cart text-warning" style="font-size: 20px;"></i></a></li>
    </ul>
  </div>
</nav>
