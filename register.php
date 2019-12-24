<?php include_once('db_inc.php');
?> 
<?php
     if (isset($_POST['login'])) {
       $email = mysqli_escape_string($con,$_POST['email']);
       $password = mysqli_escape_string($con,$_POST['password']);
       $special = '--;';
       $pass_s = trim($password, $special);
       $email_s = trim($email, "+-_;&$%!^*");
       if (empty($email)) {
         echo "
             <script>
               alert('Please enter email');
             </script>
         ";
       }
       elseif (empty($password)) {
         echo "
             <script>
               alert('Please enter password');
             </script>
         ";
       }else{
             $query = "select * from user where email='$email' and password='$password'";
             $result = mysqli_query($con, $query);
            if(mysqli_num_rows($result) > 0) {
             while ($row = mysqli_fetch_array($result)){
              session_start();
              $_SESSION['user'] = $row['id']; 
              header("location: admin/header.php");
              
             }
            }else{
            echo "
             <script>
               alert('Username or Password incorrect');
             </script>
         ";
        }
       }
    }
  ?> 
<?php include_once('header.php');?> 
  <main id="login">
    <div id="image_background" class="">
     
    </div>
    <section id="login_section">
      <div class="w-75" id="form_detail">
      <div class="form-group " id="paddingtop">
        <div style="font-family: 'Open Sans', sans-serif;position: absolute;bottom: 250px;left: 0;">
          <h2 class="text-warning text-center ml-5" style="font-size: 2.8rem;margin-left: 20%;margin-top: 5%;font-family: Rough;">&nbsp;THE SOUL OF FASHION</h2>
          <h3 class="text-warning text-center" style="margin-left: 0%;margin-top: 0%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______  <strong class="text-dark" style="font-family: Rough;font-size: 30px;">OFFICIAL &nbsp;&nbsp; FASHION &nbsp;&nbsp;WEBSITE</strong> ________</h3>
        </div>
        <h2>Sign Up</h2>
        <hr>
        <p class="text-danger mt-4 mb-3" id="error" style="width:100%;margin-left:-4px;"></p>
        <form method="post">
          <input type="text" name="name" autofocus class="form-control mb-2" placeholder="Name">
          <input type="email" name="email" class="form-control mb-2" placeholder="Email">
          <input type="password" name="password" class="form-control mb-2" placeholder="Password">
          <input type="text" name="address" class="form-control mb-2 h-25" placeholder="Address">
          <input type="checkbox" name="keep" class="" checked><span style="position: relative;top: -2px;" class="text-justify">&nbsp;&nbsp;Term & condition</span>
          <input type="submit" name="signup" value="Sign up" class="btn btn-warning text-white w-100">
        </form>
      </div>
      </div>
    </section>
  </main>
  
