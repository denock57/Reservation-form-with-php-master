<?php session_start(); ?>
<?php include "server.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <title>Input Animation Demo</title>
  </head>
  <body>
    <h1>REGISTRATION FORM WITH ANIMATED INPUTS</h1>
    <div class="container">
      <form action="" method="post">
        <div class="img">
          <img src="ch.png" alt="" width="100px" height="100px" />
        </div>
        <?php 
        if($errors > 0) {
           foreach ($errors as $error) {
           ?>
           <div style="color: orange; background: red; padding: 5px; text-align: center;margin: 10px;">
              <?php echo $error;  ?>
           </div>
        <?php
            }
        }
        ?>
        <div class="form-group">
          <input type="text" name="username" required="" />
          <label for="">username</label>
        </div>
        <div class="form-group">
          <input type="email" name="email" required="" />
          <label for="">Email</label>
        </div>
        <div class="form-group">
          <input type="password" name="password1" required="" />
          <label for="">Password</label>
        </div>
        <div class="form-group">
          <input type="password" name="password2" required="" />
          <label for="">Confirm Password</label>
        </div>
        <div class="btn">
          <input type="submit" name="submit" value="SignUp" />
        </div>
      </form>
    </div>
  </body> 
</html>
