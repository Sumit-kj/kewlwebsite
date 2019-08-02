<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'kewlworld');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

      $myusername = mysqli_real_escape_string($db,$_POST['Username']);
      $myname=mysqli_real_escape_string($db,$_POST['name']);
      $mypassword = mysqli_real_escape_string($db,$_POST['Password']);

      $sql = "SELECT * FROM customer WHERE EMAIL = '$myusername'";
      $result = mysqli_query($db,$sql);

      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);

      if($count == 1) {
        
         echo "<script>alert('User already exists');
         window.location.href='../form.html';</script>";
         exit;

      }else {
          $myid = $row['email'];
          session_start();
          $_SESSION['customer_id']=$myusername;
          
          $sql2="INSERT INTO customer VALUES ('$myusername','$myname','$mypassword')";
          $result = mysqli_query($db,$sql2);
          echo "<script>alert('Successfully Registered!');
          window.location.href='../index.php';</script>";

      }
    }
   

?>