<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF - 8">
    <meta name="viewport" content = "width = device - width,initial-scale = 1">
    <title>Online Food Order</title> 
    <link rel="stylesheet" type = "text/css" href = "styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<header>
        <a href = "#" class ="logo"><img src = "logo-img2.jfif" alt =""><h2>Meal Magic</h2></a>
        <div id="menu" class="fas fa-bars"></div>
        <nav class="navbar">
            <a  href="background.php" class= "fa fa-home"  >HOME</a>
                <a href="login.html" >LOGIN</a>
              
                <a href="index3.php"  class= "fa fa-shopping-cart">MENU</a>
                <a href="supplier.php">SUPPLIER_PORTAL</a>
                <a href = "admin_Login.php">ADMIN_PORTAL</a>
                
        </nav>
</header>

    <div class="container">
            <input type="checkbox" id="c1">
            <input type="checkbox" id="c2">
            <input type="checkbox" id="c3">
            <input type="checkbox" id="c4">
            <input type="checkbox" id="c5">
            <input type="checkbox" id="c6">
            <div id="cover">
                <img src="flip13.png">
           </div>
        <div class="page-container">
            <div class="page" id="p1">
                <div class="back">
                    <img src="flip1.png">
                    <label class="back-btn" for="c1">Back</label>
                </div>
                <div class="front">
                    <img src="flip14.png">
                    <label class="next-btn" for="c1">Next</label>
                </div>
            </div>
                <div class="page" id="p2">
                    <div class="back">
                        <img src="flip8.png">
                        <label class="back-btn" for="c2">Back</label>
                    </div>
                    <div class="front">
                        <img src="flip2.png">
                        <label class="next-btn" for="c2">Next</label>
                    </div>
                </div>
                <div class="page" id="p3">
                    <div class="back">
                        <img src="flip4.png">
                        <label class="back-btn" for="c3">Back</label>
                    </div>
                    <div class="front">
                        <img src="flip3.png">
                        <label class="next-btn" for="c3">Next</label>
                    </div>
                </div>
                <div class="page" id="p4">
                    <div class="back">
                        <img src="flip9.png">
                        <label class="back-btn" for="c4">Back</label>
                    </div>
                    <div class="front">
                        <img src="flip6.png">
                        <label class="next-btn" for="c4">Next</label>
                    </div>
                </div>
                <div class="page" id="p5">
                    <div class="back">
                        <img src="flip11.png">
                        <label class="back-btn" for="c5">Back</label>
                    </div>
                    <div class="front">
                        <img src="flip10.png">
                        <label class="next-btn" for="c5">Next</label>
                    </div>
                </div>
                    <div class="page" id="p6">
                        <div class="back">
                            <img src="flip11.png">
                            <label class="back-btn" for= "c6">Back</label>
                        </div>
                        <div class="front">
                            <img src="flip12.png">
                            <label class="next-btn" for="c6">END</label>
                        </div>
                    </div>
        </div>
<style>
 body{
    margin: 0;
    height: 110vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

input{
    display: none;
}

img{
    width: 100%;
    height: 100%;
}

.container{
    display: flex;
}

#cover{
    width: 550px;
    height: 620px;
}

.page-container{
    width: 550px;
    height: 620px;
    position: relative;
    perspective: 1500px;
}

.page{
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    transform-origin: left;
    transform-style: preserve-3d;
    transform: rotateY(0deg);
    transition: .5s;
    color:white;
}

.front, .back{
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}

.front{
    box-sizing: border-box;
    padding: 0.23px;
}

.back{
    transform: rotateY(180deg);
    backface-visibility: hidden;
}

.next-btn{
    position: absolute;
    bottom: 13px;
    right: 13px;
    cursor: pointer;
    background-color: black;
}

.back-btn{
    position: absolute;
    bottom: 13px;
    left: 13px;
    cursor: pointer;
    background-color: black;
}

#p1{
    z-index: 5;
}
#p2{
    z-index: 4;
}
#p3{
    z-index: 3;
}
#p4{
    z-index: 2;
}
#p5{
    z-index: 1;
}
#c1:checked ~ .page-container #p1{
    transform: rotateY(-180deg);
    z-index: 1;
}
#c2:checked ~ .page-container #p2{
    transform: rotateY(-180deg);
    z-index: 2;
}
#c3:checked ~ .page-container #p3{
    transform: rotateY(-180deg);
    z-index: 3;
}
#c4:checked ~ .page-container #p4{
    transform: rotateY(-180deg);
    z-index: 4;
}
#c5:checked ~ .page-container #p5{
    transform: rotateY(-180deg);
    z-index: 5;
}
#c6:checked ~ .page-container #p5{
    transform: rotateY(-180deg);
    z-index: 6;
}


#p6{
    background-color: black;
}
</style>
</body>
</html>