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
  
    <!-- header -->
     <?php include 'partials/header.php' ?>
     <!-- about section -->
      <div id="about-container">
        <div class="header-design-container">
          <hr class="header-hr">
          <h4 class="header-design-h4">Our Mission</h4>
          <hr class="header-hr">
        </div>
        <h1 class="header-para"><em>We aim to meet your lawncare needs & keep you up to code!</em></h1>
      </div>

      <!-- cta-container -->
       <div id="cta-wrapper">
        <div id="cta-container" class="reg-column">
          <!-- form -->
           <form id="cta-form" method="POST" action="http://localhost:5777/submission.php">
            <input type="text" name="fname" id="name-input" autocomplete = "off" placeholder="First Name" required>
            <input type="text" name="lname" id="name-input" autocomplete = "off" placeholder="Last Name" required>
            <input type="email" name="email" id="email-input" autocomplete = "off" placeholder="Email" required>
            <input type="text" name="phone" id="phone-input" autocomplete = "off" placeholder="Phone">
            <p id="submit-para">Send</p>
           </form>
           <div id="cta-disclaimer">
              <p id="cta-disclaimer-para" class="no-pointer">Post <b style="font-weight:bold">or</b> give us a call for a <b style="color:rgb(248, 197, 44)">FREE</b> quote</p>
              <a href="tel:+12345678910">
                <p id="cta-phone-para" class="phone-para-class">234-567-8910</p>
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
           <!-- call to action (cta) (repairs) -->
            <div id="repair-cta-container" class="cta-popout-container">
              <h4 id="repair-cta-title">We repair Damages.<i class="fa-solid fa-circle-info information"></i>
              <p class="tooltip tip-transparent">i.e. Fence, tree damage, etc...</p>
            </h4>
              <div class="call-us-para"><a href="#">Call us Now!</a></div>
              <!-- icon -->
            </div>
            <!-- call to action (cta) (junk/waste removal) -->
            <div id="junk-cta-container" class="cta-popout-container">
              <h4 id="junk-cta-title">Got Bulk Trash?<br>Watch it disappear!<i class="fa-solid fa-circle-info information"></i>
              <p class="tooltip tip-transparent">Dedicated bulk pickup<br>Available 24/7</p>
            </h4>
              <div class="call-us-para"><a href="#">Call us Now!</a></div>
              <!-- icon -->
            </div>
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
              <input type="text" name="lname" id="name-input" autocomplete = "off" placeholder="Last Name" required>
              <input type="email" name="email" id="email-input" autocomplete = "off" placeholder="Email" required>
              <input type="text" name="phone" id="phone-input" autocomplete = "off" placeholder="Phone">
              <p id="submit-para">Send</p>
             </form>
             <div id="cta-disclaimer">
                <p id="cta-disclaimer-para" class="no-pointer">Post <b style="font-weight:bold">or</b> give us a call for a <b style="color:rgb(248, 197, 44)">FREE</b> quote</p>
                <a href="tel:+12345678910">
                  <p id="cta-phone-para" class="phone-para-class">234-567-8910</p>
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
         <?php include 'partials/footer.php' ?>
  </div>
  <script src="main.js" type="module"></script>
</body>
</html>