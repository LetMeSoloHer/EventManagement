<?php
  session_start();
  include 'src/config/config.php';

  if(isset($_POST['signup'])){
    $firstN = $_POST['sign_fname'];
    $lastN = $_POST['sign_lname'];
    $userN = $firstN . ' ' . $lastN;
    $email = $_POST['sign_email'];
    $password = $_POST['sign_pass'];
    $confirm_pass = $_POST['sign_confirm_pass'];
    $type = 2;
    $status = 1;

      if($password = $confirm_pass){
        // $_SESSION['email'] = $row['id'];
        $confirm_pass = md5($confirm_pass);
        $query = "INSERT INTO users (username,password,email,type,status) VALUES('$userN', '$confirm_pass' ,'$email', '$type','$status')";  
           if(mysqli_query($conn, $query))  
           {  
                echo '<script>alert("Registration Done")</script>';  
           } 

      }
      else{
        $_SESSION['error'] = 'Incorrect password';
      }
    }
    
  
  else{
    $_SESSION['error'] = 'Input user credentials first';
  }

?>