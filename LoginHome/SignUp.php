<?php
session_start();
?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>LogIn</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="../css/login.css" />
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->
  <!-- <script src="../JavaScript/login.js"></script> -->
</head>
<body>
  <h3>
  <?php
      if (isset($_SESSION["Notice"])) {
        echo $_SESSION["Notice"];
        unset($_SESSION["Notice"]);
      }
    ?>
  </h3>
  <div class="form-structor">
    <form action="signup_submit.php" method="POST" role="form">
      <div class="signup" action=>
        <h2 class="form-title" id="signup">Sign up</h2>
        <div class="form-holder">
          <input type="text" class="input" placeholder="Name" name="username">
          <div class="password_container">
            <input type="password" class="input" placeholder="Password" name="password" id="myInput">
            <button class="btn-show-pass" type="button" onclick="myFunction()"><p>show</p></button>
          </div>
          <input type="email" class="input" placeholder="Email" name="email" />
        </div>
        <button type="submit" class="submit-btn">Sign up</button>
        <a href="LogIn.php"><button type="button" class="submit-btn">Log In</button></a>
      </div>
  </div>
  
</body>

</html>