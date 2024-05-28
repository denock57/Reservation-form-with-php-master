<?php
    $db = mysqli_connect('localhost', 'root', '', 'demo1');

// signup query
   if (isset($_POST['submit'])) {
       $username = mysqli_real_escape_string($db, $_POST['username']);
       $email    = mysqli_real_escape_string($db, $_POST['email']);
       $password1   = mysqli_real_escape_string($db, md5($_POST['password1']));
       $password2   = mysqli_real_escape_string($db, md5($_POST['password2']));
 // authentication
       if($password1 !== $password2) {
          array_push($errors, 'Passwords do not match!');
          header('location: demo.php');
          exit();
       }

    //    VALIDATION
       $check_query = "SELECT email FROM users WHERE email = '$email' "; 
       $returns = mysqli_query($db, $check_query);
          if (mysqli_num_rows($returns) > 0) {
              array_push($errors, 'This User Email already exists');
                  header('location: demo.php');
                  exit();
          } else {
              $query = "INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$password1') ";
              $return = mysqli_query($db, $query);
              if ($return) {
                  $new_user = mysqli_fetch_all($return, MYSQLI_ASSOC);
                  $_SESSION['new_id'] = $db->$insert_db;
              }

            }

            $query = "SELECT * FROM users WHERE id = " . $_SESSION['new_id'];
            $return_result = mysqli_query($db, $query);

            if ($return_result) {
                if ($mysqli_num_rows($return_result) > 0) {
                    $new_user = mysqli_fetch_all($return_result, MYSQLI_ASSOC);
                    $_SESSION['username'] = $new_user['username'];
                    $_SESSION['email'] = $new_user['email'];
                    $_SESSION['success'] = "Great!! You are now a member here! Your Email is: " . $_SESSION['email'];
                    header('location: index.php');
                    exit();
                }
            }
    
       
}
   