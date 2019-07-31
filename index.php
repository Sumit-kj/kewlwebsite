<!DOCTYPE html>
<head>
    <title>
         KewlWorld
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <script src="js/home.js"></script>
    <script>
    var loginSignupBtnClicked = function(){
        window.location.href='./form.html';
        };</script>
</head>
<body>
    <div class="titleLine" style="align-items: stretch">
        <h1 class="cbk" >
            WELCOME TO KEWLWORLD
        </h1>
        <button id="loginbtn" onclick="loginSignupBtnClicked()"><i class="fa fa-user-circle"></i></button> 
        <button id="cartbtn" onclick="cartBtnClicked()"><i class="fa fa-shopping-cart"></i></button> 

    </div>
            
    <div class="horizon">

    <ul>
        <li class="home khoj">Home</li>
        <li class="band khoj">Hand-Band</li>
        <li class="chain khoj">Chains</li>
        <li class="caps khoj">Caps</li>
        <li class="vests khoj">Vests</li>
        <li class="glasses khoj">Glasses</li>
    
    </ul>
    </div>
<div class="grid-container ">

<?php include '/php/populateMenu.php';?>
    
<!-- /*<div class="card-container">*/ -->
    <!-- <div class="band item vis">
    
        <img class="item_image" src ="res/band1.jpg" width="15%"/>
        <h4 class="item_name"></h4>
        <h4 class="item_price"></h4>
        <button class="SUB">-</button>
    <span id="count">00</span>
    <button class="ADD">+</button></div>
<div class="band item vis">

        <img class="item_image" src ="res/band2.jpg" width="15%"/>
        <h4 class="item_name"></h4>
        <h4 class="item_price"></h4>
        <button class="SUB">-</button>
        <span id="count">00</span>
        <button class="ADD">+</button></div>    
<div class="chain item vis">

        <img class="item_image" src ="res/chain1.jpg" width="15%"/>
        <h4 class="item_name"></h4>
        <h4 class="item_price"></h4>
        <button class="SUB">-</button>
    <span id="count">00</span>
    <button class="ADD">+</button></div>
<div class="chain item vis">

        <img class="item_image" src ="res/chain2.jpg" width="15%"/>
        <h4 class="item_name"></h4>
        <h4 class="item_price"></h4>
        <button class="SUB">-</button>
        <span id="count">00</span>
        <button class="ADD">+</button>
    </div>


<div class="caps item vis">

    <img class="item_image" src ="res/cap1.jpg" width="15%"/>
    <h4 class="item_name"></h4>
    <h4 class="item_price"></h4>
    <button class="SUB">-</button>
    <span id="count">00</span>
    <button class="ADD">+</button>
</div>  
<div class="caps item vis">

    <img class="item_image" src ="res/cap2.jpg" width="15%"/>
    <h4 class="item_name"></h4>
    <h4 class="item_price"></h4>
    <button class="SUB">-</button>
    <span id="count">00</span>
    <button class="ADD">+</button>
</div>
<div class="glasses item vis">

    <img class="item_image" src ="res/shade1.jpg" width="15%"/>
    <h4 class="item_name"></h4>
    <h4 class="item_price"></h4>
    <button class="SUB">-</button>
    <span id="count">00</span>
    <button class="ADD">+</button>
</div>


<div class="glasses item vis">
    
    <img class="item_image" src ="res/shade2.jpg" width="15%"/>
    <h4 class="item_name"></h4>
    <h4 class="item_price"></h4>
    <button class="SUB">-</button>
    <span id="count">00</span>
    <button class="ADD">+</button></div>
    
</div> -->
</div>


</body>
</html>
