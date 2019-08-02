<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'kewlworld');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
session_start();

// print_r($_SESSION);

      if(!isset($_SESSION['customer_id'])){
         // print_r($_SESSION['customer_id']);
         echo "<script>alert('Not logged in!');</script>";
         header('Location: ../form.html');

      }

      else{

         $myusername = $_SESSION['customer_id'];
         echo "<script>alert('Session started for $myusername');</script>";
         print_r($_SESSION);
      }
   
      // $sql = "SELECT * FROM cart WHERE CUSTOMER_ID = $myusername";
      // $result = mysqli_query($db,$sql);

      // echo $result;
		
      // if($count == 1) {
      //    session_start();
      //    $_SESSION['customer_id']=$myid;
      //    header('Location: ../index.php');
      //    echo "<script>alert('Session started for $myid');</script>";
      //    exit;
      // }else {
      //    echo "<script>alert('Invalid Credetials!');
      //    window.location.href='../form.html';</script>";
      // }
?>