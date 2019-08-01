<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'kewlworld');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
   if($_SERVER["REQUEST_METHOD"] == "POST"){

      $myusername = $_SESSION['customer_id'];

      $sql = "INSERT INTO cart VALUES ('$myusername','')";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
		
      if($count == 1) {
         session_start();
         $_SESSION['customer_id']=$myid;
         header('Location: ../index.html');
         echo "<script>alert('Session started for $myid');</script>";
         exit;
      }else {
         echo "<script>alert('Invalid Credetials!');
         window.location.href='../form.html';</script>";
      }
   }

?>