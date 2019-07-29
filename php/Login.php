<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'kewlworld');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

      $myusername = mysqli_real_escape_string($db,$_POST['name']);
      $mypassword = mysqli_real_escape_string($db,$_POST['Password']);

      $sql = "SELECT * FROM customer WHERE EMAIL = '$myusername' AND PASS = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $myid = $row['email'];
      
      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_start();
         $_SESSION['customer_id']=$myid;
         echo "<script>alert('Session started for $myid');</script>";
         header('Location: ../index.html');
         
         exit;
      }else {
         echo "<script>alert('Invalid Credetials!');
         window.location.href='../form.html';</script>";
      }
   }

?>