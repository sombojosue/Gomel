<!-- Template design and coding by Josue lotshango sombo
     Banner Id B00361289
     college ISBC INDIA
     contact : +918861657097
     Email : lotshangojosue@gmail.com
-->
<?php include_once('db-conf.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="../css/query.css">
    <link href="../css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/master.css">

    <!-- Favicon Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon.ico">
    <!-- Font family -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> 
    <!-- Loader chart inside the website -->
  <script  src="https://www.gstatic.com/charts/loader.js"></script>
   <script src="../js/chart.js"></script>


  </head>
  <body>         
  <nav class="navbar navbar-expand-md navbar-dark small">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <div class="container-fluid">
      <div class="row">
         <div class="col-lg-2 col-md-2 sidebar fixed-top">
         <a class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 botton-brand" href="header.php">Soul &nbsp;And &nbsp;Jazz</a>
         <div class="botton-brand pb-3 mb-5"> 
           <img src="<?php echo $avatar;?>" class="rounded-circle mr-3" width="50" alt="image">
           <a href="" class="text-white small-link"><?php echo $name;?></a>
         </div>
         <ul class="navbar-nav flex-column mt-4">
           <li class="navbar-item mb-5 mt-xs-2"><a href="header.php" class="navbar-link text-light p-3 sidebar-link"><i class="fa fa-home text-light fa-lg mr-3"></i>Dashboard</a></li>
           <li class="navbar-item mb-5"><a href="database.php" class="navbar-link text-light p-3 sidebar-link  current"><i class="fas fa-database text-light fa-lg mr-3"></i>Databases</a></li>
           <li class="navbar-item mb-5"><a href="profile.php" class="navbar-link text-light p-3 sidebar-link"><i class="fas fa-user-alt text-light fa-lg mr-3"></i>Profile</a></li>
           <li class="navbar-item mb-5"><a href="setting.php" class="navbar-link text-light p-3 sidebar-link"><i class="fas fa-cog text-light fa-lg mr-3"></i>Settings</a></li>
           <li class="navbar-item mb-5"><a href="logout.php" data-toggle="modal" data-target="#logout" class="navbar-link text-light p-3 sidebar-link"><i class="fas fa-sign-out-alt text-light fa-lg mr-3"></i>Log out</a></li>
         </ul>
         </div>
         <div class="col-lg-10 col-md-10 rightbar bg-dark ml-auto fixed-top py-2">
           <div class="row">
             <div class="col-md-3">
              <h4 class="text-uppercase text-light mb-0 pt-2">Dashboard</h4>  
             </div>
             <div class="col-md-5 small-hide">
              <form method="post" action="search.php" class="form-inline mb-0">
                <input type="search" name="search" id="search" placeholder="Search database" class="form-control search-bar">
                <button class="btn btn-danger search-button"><i class="fas fa-search fa-lg" style="margin-left: -5px;"></i></button>
              </form>
             </div>
             <div class="col-md-4 pt-2 small-hide">
               <img src="<?php echo $avatar;?>" class="rounded-circle mr-3" width="50" alt="image">
               <a href="" class="text-white"><?php echo $name;?></a>
             </div>
           </div>
                
         </div>
      </div>
    </div>
  </div>
</nav>
<!-- Body of Page -->
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-9 ml-auto" id="left-side">
      <div class="row pt-5 mt-3 mb-5">
        <div class="col-sm-12 mb-1">
          <h3 class="display-4 mt-auto" style="font-size: 1.6rem;"><i class="fas fa-database text-light fa-1x mr-3 text-dark mr-2"></i><strong class="pt-5">Our databases</strong></h3>
        <hr>
        </div>
        <!-- Booked show -->
        <div class="col-sm-6 mb-2">
          <div class="card">
            <div class="card-body"> 
              <div>
                <i class="fas fa-shopping-cart fa-3x text-warning"></i>
              </div>
              <div class="text-right">
                <h4>Booked</h4>
              </div>
              <div>
                <a href="book/index.php" class="btn btn-success text-white"><i class="fas fa-eye text-white pr-2  icon"></i>View</a>
                <a href="book/index.php" class="btn btn-primary"><i class="far fa-edit pr-2 icon"></i>Edit</a>
                <a href="book/index.php" class="btn btn-danger"><i class="fas fa-trash pr-2 icon"></i>Delete</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 mb-2">
          <!-- Record data -->
          <div class="card">
            <div class="card-body"> 
              <div>
                <i class="fas fa-microphone-alt fa-3x text-warning"></i>
              </div>
              <div class="text-right">
                <h4>Record</h4>
                </div>
                <div>
                <a href="record/index.php" class="btn btn-success text-white"><i class="fas fa-eye text-white pr-2 icon"></i>View</a>
                <a href="record/index.php" class="btn btn-primary"><i class="far fa-edit pr-2 icon"></i>Edit</a>
                <a href="record/index.php" class="btn btn-danger"><i class="fas fa-trash pr-2 icon"></i>Delete</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <!-- Events data -->
         <div class="card">
            <div class="card-body"> 
              <div>
                <i class="fas fa-calendar fa-3x text-warning"></i>
              </div>
              <div class="text-right">
                <h4>Events</h4>
                </div>
                <div>
                <a href="event/index.php" class="btn btn-success text-white"><i class="fas fa-eye text-white pr-2 icon"></i>View</a>
                <a href="event/index.php" class="btn btn-primary"><i class="far fa-edit pr-2 icon"></i>Edit</a>
                <a href="event/index.php" class="btn btn-danger"><i class="fas fa-trash pr-2 icon"></i>Delete</a>
              </div>
            </div>
          </div> 
        </div>

        <div class="col-sm-6">
          <!-- User login inside -->
          <div class="card">
            <div class="card-body"> 
              <div>
                <i class="fas fa-user-alt fa-3x text-warning"></i>
              </div>
              <div class="text-right">
                <h4>Users</h4>
              </div>
              <div>
                <a href="user/index.php" class="btn btn-success text-white"><i class="fas fa-eye text-white pr-2 icon"></i>View</a>
                <a href="user/index.php" class="btn btn-primary"><i class="far fa-edit pr-2 icon"></i>Edit</a>
                <a href="user/index.php" class="btn btn-danger"><i class="fas fa-trash pr-2 icon"></i>Delete</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Gallery photos -->
        <div class="col-sm-6 mt-2">
          <div class="card">
            <div class="card-body"> 
              <div>
                <i class="far fa-images fa-3x text-warning"></i>
              </div>
              <div class="text-right">
                <h4>Gallery</h4>
              </div>
              <div>
                <a href="gallery/index.php" class="btn btn-success text-white"><i class="fas fa-eye text-white pr-2 icon"></i>View</a>
                <a href="gallery/index.php" class="btn btn-primary"><i class="far fa-edit pr-2 icon"></i>Edit</a>
                <a href="gallery/index.php" class="btn btn-danger"><i class="fas fa-trash pr-2 icon"></i>Delete</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Concert  -->
        <div class="col-sm-6 mt-2">
          <div class="card">
            <div class="card-body"> 
              <div>
                <i class="fas fa-id-card-alt fa-3x text-warning"></i>
              </div>
              <div class="text-right">
                <h4>Concert</h4>
              </div>
              <div>
                <a href="concert/index.php" class="btn btn-success text-white"><i class="fas fa-eye text-white pr-2 icon"></i>View</a>
                <a href="concert/index.php" class="btn btn-primary"><i class="far fa-edit pr-2 icon"></i>Edit</a>
                <a href="concert/index.php" class="btn btn-danger"><i class="fas fa-trash pr-2 icon"></i> Delete</a>
              </div>
            </div>
          </div>
        </div>
        <!--News  -->
        <div class="col-sm-6 mt-2">
          <div class="card">
            <div class="card-body"> 
              <div>
                <i class="fas fa-id-card-alt fa-3x text-warning"></i>
              </div>
              <div class="text-right">
                <h4>News</h4>
              </div>
              <div>
                <a href="act/index.php" class="btn btn-success text-white"><i class="fas fa-eye text-white pr-2 icon"></i>View</a>
                <a href="act/index.php" class="btn btn-primary"><i class="far fa-edit pr-2 icon"></i>Edit</a>
                <a href="act/index.php" class="btn btn-danger"><i class="fas fa-trash pr-2 icon"></i> Delete</a>
              </div>
            </div>
          </div>
        </div>
         <!-- Newsletter -->
        <div class="col-sm-6 mt-2">
          <div class="card">
            <div class="card-body"> 
              <div>
                <i class="far fa-newspaper fa-3x text-warning"></i>
              </div>
              <div class="text-right">
                <h4>Newsletter</h4>
              </div>
              <div>
                <a href="news/index.php" class="btn btn-success text-white"><i class="fas fa-eye text-white pr-2 icon"></i>View</a>
                <a href="news/index.php" class="btn btn-primary"><i class="far fa-edit pr-2 icon"></i>Edit</a>
                <a href="news/index.php" class="btn btn-danger"><i class="fas fa-trash pr-2 icon"></i>Delete</a>
              </div>
            </div>
          </div>
        </div>
         <!-- Contact  -->
        <div class="col-sm-6 mt-2">
          <div class="card">
            <div class="card-body"> 
              <div>
                <i class="fas fa-id-card-alt fa-3x text-warning"></i>
              </div>
              <div class="text-right">
                <h4>Contact</h4>
              </div>
              <div>
                <a href="contact/index.php" class="btn btn-success text-white"><i class="fas fa-eye text-white pr-2 icon"></i>View</a>
                <a href="contact/index.php" class="btn btn-primary"><i class="far fa-edit pr-2 icon"></i>Edit</a>
                <a href="contact/index.php" class="btn btn-danger"><i class="fas fa-trash pr-2 icon"></i> Delete</a>
              </div>
            </div>
          </div>
        </div>
        <!-- About us  -->
        <div class="col-sm-6 mt-2">
          <div class="card">
            <div class="card-body"> 
              <div>
                <i class="far fa-address-card fa-3x text-warning"></i>
              </div>
              <div class="text-right">
                <h4>About us</h4>
              </div>
              <div>
                <a href="about/index.php" class="btn btn-success text-white"><i class="fas fa-eye text-white pr-2 icon"></i>View</a>
                <a href="about/index.php" class="btn btn-primary"><i class="far fa-edit pr-2 icon"></i>Edit</a>
                <a href="about/index.php" class="btn btn-danger"><i class="fas fa-trash pr-2 icon"></i>Delete</a>
              </div>
            </div>
          </div>
        </div>
        <!-- end of body -->
      </div>
    </div>
  </div>
</div>
<!-- Modal for user sign up -->
<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="logout" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <p class="ml-4">Are you really want to leave ?</p>
      <div class="row pb-3">
        <div class="col-lg-6 col-md-6">
          <a href="database.php" class="btn btn-primary w-75 ml-4">Cancel</a>
        </div>
        <div class="col-lg-6 col-md-6">
          <a href="logout.php" class="btn btn-danger w-75 ml-4">Ok</a>
        </div>
      </div>
    </div>
  </div>
</div>
    
    <!-- Optional JavaScript -->
    <script src="../js/all.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
