<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="php.css">
  <link rel="stylesheet" href="styles.css">
  <!-- fontawesome kit -->
  <script src="https://kit.fontawesome.com/4026a653d4.js" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>lawn service</title>
</head>
<body>
  <!-- wrapper -->
  <div id="wrapper">
    
    <!-- header -->
     <div id="header" class="header-container">
      
      <!-- logo -->
       <div id="home-links-container">
        <a href="index.php" id="logo-href">
          <div id="logo-container">
            <!-- logosticks -->
            <div id="logo-brand-container">
              <span class="logo-stick"></span>
              <span class="logo-stick"></span>
              <span class="logo-stick"></span>
              <span class="logo-stick"></span>
              <span class="logo-stick"></span>
            </div>
            <!-- logo-label -->
             <h3 id="logo-label">LOCO Lawn Service</h3>
          </div>
         </a>
          <!-- phone number -->
          <a href="#">
            <p id="header-phone-para">123-456-7890</p>
          </a>
       </div>
       
      <!-- navigation -->
      <nav id="nav" class="navigation-container">
        <ul class="list-container">
          <li class="list-item"><a href="index.php" class="list-link">Home</a></li>
          <li class="list-item"><a href="index.php#services" class="list-link">Services</a></li>
          <li class="list-item"><a href="#contact" class="list-link">Contact</a></li>
        </ul>
       </nav>
     </div>
   <!-- about section -->
   <div id="about-container-php">
        <div class="header-para"><em>We are here for you!</em></div>
      </div>
     <!-- user submission acknowledged -->
      <?php
            $name = $_POST['name'];
            $splitname = explode(" ",$name);
            $firstname = ucfirst($splitname[0]);
            $firstInitial = strtoupper(substr($firstname,0,1));
            $notFirstInitial = substr($firstname,1);
            $lastname = $splitname[1];  
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            //_____________________________
            $message = "<p>$firstname, Thank you for your submission!<br>A member from our team will reah out to you shortly via phone-call & email. <br> Talk to you soon!</p>";
            echo "<div class='message' id='message-id'>$message</div>";
            // connect database
            // $pginfo = phpinfo();
            $pool = pg_connect("host=localhost user=postgres port=5432 dbname=test");
            $insertuser = pg_query($pool, "insert into users(firstname,lastname,phone,email) values('$firstname','$lastname','$phone','$email')");
            $result = pg_query($pool, "select * from users");
            // $dumparr = var_dump(pg_fetch_all($result)) ;
            $arr = pg_fetch_all($result);
            for($i=0;$i <= count($arr);$i++){
              echo $o->{$arr[$i]};
            }
            // echo var_dump($pool);
            
?>
         

        <!-- footer -->
         <footer id="contact" class="footer">
          <!-- logo -->
       <div id="home-links-container" class="footer-link">
        <a href="index.php" id="logo-href">
          <div id="logo-container">
            <!-- logosticks -->
            <div id="logo-brand-container">
              <span class="logo-stick"></span>
              <span class="logo-stick"></span>
              <span class="logo-stick"></span>
              <span class="logo-stick"></span>
              <span class="logo-stick"></span>
            </div>
            <!-- logo-label -->
             <h3 id="logo-label">LOCO Lawn Service</h3>
          </div>
         </a>
          <!-- phone number -->
          <a href="#">
            <p id="header-phone-para">123-456-7890</p>
          </a>
       </div>
        <ul id="footer-list-container">
          <li class="footer-list-item">
            <a href="#" class="footer-list-link">Home</a>
          </li>
          <li class="footer-list-item">
            <a href="#services" class="footer-list-link">Services</a>
          </li>
          <li class="footer-list-item">
            <a href="#" class="footer-list-link">Legal</a>
          </li>
          <li class="footer-list-item">
            <a href="#" class="footer-list-link">Careers</a>
          </li>
        </ul>
         </footer>
  </div>
  <!-- <script src="main.js" type="module"></script> -->
</body>
</html>