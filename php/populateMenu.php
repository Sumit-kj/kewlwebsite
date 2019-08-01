<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'kewlworld');

$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

$sql = "SELECT * FROM item";

$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

$id_array = array();
$i=1;
$start_value= 0;

if($count > 0) {
    do
    {
        $category = $row['ITEM_CATEGORY'];
        $name = $row['ITEM_NAME'];
        $price = $row['ITEM_PRICE'];
        $location = $row['ITEM_IMAGE'];
        // echo "<pre></pre>";
        // print_r($row);
        // exit;
        echo '<div class="'.$category.' item vis">';
        echo '<img class="item_image" src=".'.$location.'" width="15%"></img>';
        echo '<h4 class="item_name">'.$name.'</h4>';
        echo '<h4 class="item_price">₹ '.$price.'</h4>';
        echo '<button class="SUB">-</button>';
        echo '<span id="count">'.$start_value.'</span>';
        echo '<button class="ADD">+</button></div>';
    }while($row = $result->fetch_assoc());
}



?>