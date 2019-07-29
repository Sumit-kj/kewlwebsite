<?php
echo "page loaded";
// define('DB_SERVER', '10.20.27.76:5500');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_DATABASE', 'kewlworld');
// $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
//    if($_SERVER["REQUEST_METHOD"] == "POST") {
//       // username and password sent from form 

//       $myusername = mysqli_real_escape_string($db,$_POST['Username']);
//       $myname=mysqli_real_escape_string($db,$_POST['name']);
//       $mypassword = mysqli_real_escape_string($db,$_POST['Password']);

//       echo "$myusername $myname $mypassword";

//       $sql = "SELECT * FROM customer WHERE EMAIL = '$myusername' AND PASS = '$mypassword'";
//       $result = mysqli_query($db,$sql);
//       $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//       $active = $row['active'];

//       $myid = $row['email'];
      
//       $count = mysqli_num_rows($result);

//       // If result matched $myusername and $mypassword, table row must be 1 row
        
      
//       if($count == 1) {
        
//          header('Location: ../index.html');
//          echo "<script>alert('User already exists');
//          window.location.href='../form.html';</script>";
//          exit;
//       }else {
//           session_start();
//           $_SESSION['customer_id']=$myusername;
//           $sql2="INSERT INTO `customer`(`EMAIL`, `NAME`, `PASS`) VALUES ($myusername,$myname,$mypassword)";
//           echo "<script>alert('Successfully Registered ');
//           window.location.href='../index.html';</script>";

//       }
//     }
   

?>