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
    <form action="login_submit.php" method="POST" role="form">
      <div class="login">
        <div class="center">
          <h2 class="form-title" id="login">Log in</h2>
          <div class="form-holder">
            <input type="username" class="input" placeholder="username" name = "username"/>
            <input type="password" class="input" placeholder="Password" name = "password"/>
          </div>
          <button type = "submit" class="submit-btn">Log in</button>
          <a href="SignUp.php"><button type = "button" class="submit-btn">Sign Up</button></a>
        </div>
      </div>
    </form>
  </div>
</body>

</html>