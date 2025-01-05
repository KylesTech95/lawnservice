<?php
// variables 
$name = $_POST['name'];
$splitname = explode(" ",$name);
$firstname = ucfirst($splitname[0]);
$lastname = ucfirst($splitname[1]);
$email = $_POST['email'];
$phone = $_POST['phone'];
$disabledb = false;

// input not complete
function redirectIndex($name,$firstname,$lastname,$email,$phone){
// if input not true redirect to index.php
  if(!$firstname||!$lastname||!$email||!$phone) {
    header('Location: '.'http://localhost:5777/index.php');
    $GLOBALS['disabledb'] = true;
    }
}
redirectIndex($name,$firstname,$lastname,$email,$phone);
?>

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
     <?php include 'partials/header.php' ?>
   <!-- about section -->
   <div id="about-container-php">
        <div class="header-para"><em>We are here for you!</em></div>
      </div>
     <!-- user submission acknowledged -->
      <?php
            //_____________________________
            if(!$disabledb) {
              $message = "<p>$firstname, Thank you for your submission!<br>A member from our team will reach out to you shortly via telephone & email. <br> Talk to you soon!</p>";
              echo "<div class='message' id='message-id'>$message</div>";
              // connect database
              // $pginfo = phpinfo();
              $pipeline = pg_connect("host=localhost user=reguser_503 port=5432 dbname=lawnservice");
              $insertuser = pg_query($pipeline, "insert into pipeline(firstname,lastname,phone,email) values('$firstname','$lastname','$phone','$email')");
              // $result = pg_query($pool, "select * from userbase");
              // $result = pg_fetch_all($result);
              echo "<br>";
            }
?>
         

        <!-- footer -->
        <?php include 'partials/footer.php' ?>
  </div>
  <!-- <script src="main.js" type="module"></script> -->
</body>
</html>