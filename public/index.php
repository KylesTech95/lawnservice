<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styles.css">
  <!-- fontawesome kit -->
  <script src="https://kit.fontawesome.com/4026a653d4.js" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>lawn service</title>
</head>
<body>
  <!-- wrapper -->
  <div id="wrapper">
    
    <!-- call to action (cta) (repairs) -->
     <div id="repair-cta-container" class="cta-popout-container no-display">
      <h4 id="repair-cta-title">We repair Damages. <br>Call us Now!</h4>
      <!-- icon -->
      <i class="fa-solid fa-hammer hammer"></i>
     </div>
     <!-- call to action (cta) (junk/waste removal) -->
     <div id="junk-cta-container" class="cta-popout-container no-display">
      <h4 id="junk-cta-title">Got Bulk Trash? We can make that disappear!<br>Call us Now!</h4>
      <!-- icon -->
      <i class="fa-solid fa-trash trash"></i>
     </div>
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
          <li class="list-item"><a href="#services" class="list-link">Services</a></li>
          <li class="list-item"><a href="#contact" class="list-link">Contact</a></li>
        </ul>
       </nav>
     </div>
     <!-- about section -->
      <div id="about-container">
        <div class="header-design-container">
          <hr class="header-hr">
          <h4 class="header-design-h4">Our Mission</h4>
          <hr class="header-hr">
        </div>
        <div class="header-para"><em>We aim to meet your lawncare needs & keep you up to code!</em></div>
      </div>

      <!-- cta-container -->
       <div id="cta-wrapper">
        <div id="cta-container" class="reg-column">
          <!-- form -->
           <form id="cta-form" method="POST" action="http://localhost:5777/submission.php">
            <input type="text" name="name" id="name-input" autocomplete = "off" placeholder="Full Name" required>
            <input type="email" name="email" id="email-input" autocomplete = "off" placeholder="Email" required>
            <input type="text" name="phone" id="phone-input" autocomplete = "off" placeholder="Phone">
            <p id="submit-para">Send</p>
           </form>
           <div id="cta-disclaimer">
              <p id="cta-disclaimer-para" class="no-pointer">Post <b style="font-weight:bold">or</b> give us a call for a <b style="color:rgb(248, 197, 44)">FREE</b> quote</p>
              <a href="#">
                <p id="cta-phone-para" class="phone-para-class">123-456-7890</p>
              </a>
          </div>
         </div>
        </div>
         <!-- click to scroll to servces (takes stress off scrolling/finger) -->
         <div id="scroll-to">
          <div id="st-container">
            <p id="st-para">Scroll to services</p>
            <i class="fa-solid fa-arrow-down btt-up"></i>
          </div>
       </div>
       <!-- services -->
        <div id="services-container">
          <div class="header-design-container services-margin">
            <hr class="header-hr">
            <h4 class="header-design-h4" id="services">Services</h4>
            <hr class="header-hr">
          </div>
          <ul id="services-list-container">
            
          </ul>
        </div>

        <!-- cta-container -->
        <div id="cta-wrapper">
          <div id="cta-container" class="rev-column">
            <!-- form -->
            <form id="cta-form" method="POST" action="http://localhost:5777/submission.php">
              <input type="text" name="name" id="name-input" autocomplete = "off" placeholder="Full Name" required>
              <input type="email" name="email" id="email-input" autocomplete = "off" placeholder="Email" required>
              <input type="text" name="phone" id="phone-input" autocomplete = "off" placeholder="Phone">
              <p id="submit-para">Send</p>
             </form>
             <div id="cta-disclaimer">
                <p id="cta-disclaimer-para" class="no-pointer">Post <b style="font-weight:bold">or</b> give us a call for a <b style="color:rgb(248, 197, 44)">FREE</b> quote</p>
                <a href="#">
                  <p id="cta-phone-para" class="phone-para-class">123-456-7890</p>
                </a>
            </div>
           </div>
         </div>
        <!-- footer -->
        <div id="back-to-top">
          <div id="btt-container">
            <p id="btt-para">Back to top</p>
            <i class="fa-solid fa-arrow-up btt-up"></i>
          </div>
        </div>
         <footer id="contact" class="footer">
          <!-- logo -->
       <div id="home-links-container" class="footer-link">
        <a href="#" id="logo-href">
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
  <script src="main.js" type="module"></script>
</body>
</html>