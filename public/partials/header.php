    <?php 
     $filename = substr($_SERVER['SCRIPT_NAME'],1); // remove slash
     $submission = 'submission.php';
     $notIndex = false;

     if(preg_match("/$submission/",$filename)) {
      $notIndex = true;
     } else {
      $notIndex = false;
     }
    ?>
    
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
          <a href="tel:+12345678910">
            <p id="header-phone-para">234-567-8910</p>
          </a>
       </div>
       
      <!-- navigation -->
       <nav id="nav" class="navigation-container">
        <ul class="list-container">
          <li class="list-item"><a href="index.php" class="list-link">Home</a></li>
          <?php 
          if($notIndex) {
            echo '<li class="list-item"><a href="#services" class="list-link no-display">Services</a></li>';
          } else {
            echo '<li class="list-item"><a href="#services" class="list-link">Services</a></li>';
          }
          ?>
          <li class="list-item"><a href="#contact" class="list-link">Contact</a></li>
        </ul>
       </nav>
     </div>