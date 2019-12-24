
    <section id="news" class="container-fluid">
     <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="row text-white px-5">
             <div class="col-12 ">
               <h2 class="pt-5"> </h2>
               <p class="text-justify pt-2"></p>
             </div>
             <br>
             <div class="w-100" style="height:30px;">
               
             </div>
             <br>
             <div class="col-md-12 col-sm-12 col-xs-12">
               <h5></h5>
               <p class="text-justify"></p> 
             </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12" id="news_letter">
          <div class="news_form">
            <div class="w-75 pt-5 pl-2">
            <h4 class="text-white mb-2">Register to our Newsletter</h4>
            <br>
            <p id="error_news" class="text-white"></p>
            <form class="form-group mt-2" method="post"> 
             <input type="text" name="name" placeholder="Name" class="form-control mb-2">
              <input type="email" name="email" placeholder="Email" class="form-control mb-2">
              <input type="submit" name="newsletter" value="Send" class="btn w-100 btn-danger">
            </form>
          </div>
          </div>
        </div>
      </div> 
    </section>

    <!-- send data for contact and newsletter in the server -->
    <!-- Design by Josue Lotshango Sombo -->
      <?php
     if (isset($_POST['contact'])) {
       $name = mysqli_escape_string($con,$_POST['name']);
       $email = mysqli_escape_string($con,$_POST['email']);
       $msg = mysqli_escape_string($con,$_POST['msg']);
       $special = '+-_@;&$%!^*';
       $name_s = trim($name, $special);
       $email_s = trim($email, "+-_;&$%!^*");
       $msg_s = trim($msg, $special);
       if (empty($name_s)) {
         echo "
             <script>
               var msg = document.getElementById('error');
               msg.style.display = 'block';
               msg.innerHTML = 'Please enter name';
               window.location = 'index.php#error_show';
             </script>
         ";
       }
       elseif (empty($email_s)) {
         echo "
             <script>
               var msg = document.getElementById('error');
               msg.style.display = 'block';
               msg.innerHTML = 'Please enter email';
               window.location = 'index.php#error_show';
             </script>
         ";
       }
       elseif (empty($msg_s)) {
         echo "
             <script>
               var msg = document.getElementById('error');
               msg.style.display = 'block';
               msg.innerHTML = 'Please enter message';
               window.location = 'index.php#error_show';
             </script>
         ";
       }
       elseif (strlen($name_s) < 6) {
         echo "
             <script>
               var msg = document.getElementById('error');
               msg.style.display = 'block';
               msg.innerHTML = 'Please enter name more than 6 char';
               window.location = 'index.php#error_show';
             </script>
         ";
       }
       elseif ( str_word_count($name_s) >= 2) {
         echo "
             <script>
               var msg = document.getElementById('error');
               msg.style.display = 'block';
               msg.innerHTML = 'Please enter only name ';
               window.location = 'index.php#error_show';
             </script>
         ";
       }
       elseif ( strlen($msg_s) >= 60) {
         echo "
             <script>
               var msg = document.getElementById('error');
               msg.style.display = 'block';
               msg.innerHTML = 'Please enter less than three line ';
               window.location = 'index.php#error_show';
             </script>
         ";
       }
       else{
        $query = "select * from contact where contact_email='$email_s'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0) {
          echo "
             <script>
               alert('Sorry we will get back soon to you');
               var msg = document.getElementById('error');
               msg.style.display = 'block';
               msg.innerHTML = 'You already contact us';
               window.location = 'index.php#error_show';
             </script>
         ";
        }else{
          $sql_ins = "insert into contact(contact_name,contact_email,concert_msg,contact_date) values('$name_s','$email_s','$msg_s',now());";
          $res_ins = mysqli_query($con, $sql_ins);
          if ($res_ins) {
            echo "
              <script>
              alert('Thanks to contact us');
              window.location = 'index.php';
              </script>
            ";
          }else{
            echo "
              <script>
              alert('Oof something went wrong !!!')
              </script>
            ";
          }
        }

       }
     }
    ?>
    <!-- Send data for newsletter -->
    <!-- Design by Josue Lotshango Sombo -->
      <?php
     if (isset($_POST['newsletter'])) {
       $name = mysqli_escape_string($con,$_POST['name']);
       $email = mysqli_escape_string($con,$_POST['email']);
       $special = '+-_@;&$%!^*';
       $name_s = trim($name, $special);
       $email_s = trim($email, "+-_;&$%!^*");
       if (empty($name_s)) {
         echo "
             <script>
               var msg = document.getElementById('error_news');
               msg.style.display = 'block';
               msg.innerHTML = 'Please enter name';
               window.location = 'index.php#error_news_show';
             </script>
         ";
       }
       elseif (empty($email_s)) {
         echo "
             <script>
               var msg = document.getElementById('error_news');
               msg.style.display = 'block';
               msg.innerHTML = 'Please enter email';
               window.location = 'index.php#error_news_show';
             </script>
         ";
       }
       elseif (strlen($name_s) < 6) {
         echo "
             <script>
               var msg = document.getElementById('error_news');
               msg.style.display = 'block';
               msg.innerHTML = 'Please enter name more than 6 char';
               window.location = 'index.php#error_news_show';
             </script>
         ";
       }
       elseif ( str_word_count($name_s) >= 2) {
         echo "
             <script>
               var msg = document.getElementById('error_news');
               msg.style.display = 'block';
               msg.innerHTML = 'Please enter only name ';
               window.location = 'index.php#error_news_show';
             </script>
         ";
       }
       else{
        $query = "select * from newsletter where email='$email_s'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0) {
          echo "
             <script>
               alert('Geat just wait our news');
               var msg = document.getElementById('error_news');
               msg.style.display = 'block';
               msg.innerHTML = 'You already subscribe';
               window.location = 'index.php#error_news_show';
             </script>
         ";
        }else{
      $sql_ins = "insert into newsletter(name,email) values('$name_s','$email_s')";
          $res_ins = mysqli_query($con, $sql_ins);
          if ($res_ins) {
            echo "
              <script>
              alert('Great to subscribe (:');
              window.location = 'index.php';
              </script>
            ";
          }else{
            echo "
              <script>
              alert('Oof something went wrong !!!')
              </script>
            ";
          }
        }

       }
     }
    ?>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
