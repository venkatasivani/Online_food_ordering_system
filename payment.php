
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-9">
        <title>PAYMENT</title>
        <link rel="stylesheet" href="Login.css">
        <link rel="stylesheet" type = "text/css" href = "styles.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <header>
        <a href = "#" class ="logo"><img src = "logo-img2.jfif" alt ="hello"><h2>Meal Magic</h2></a>
        <div id="menu" class="fas fa-bars"></div>
        <nav class="navbar">
            <a  href="background.php" class= "fa fa-home"  >HOME</a>
                <a href="login.html" >LOGIN</a>
                <a href="index3.php"  class= "fa fa-shopping-cart">MENU</a>0
                <a href="logout.php">LOGOUT</a>
        </nav>
    </header>
</head>
 <body>
    <br><br><br>
    <br><br><br><br><br><br>
    
        <div class="container">
            <br>
            <br>
            <h1><?php
        require 'connection3.php';
        include 'C:\xampp\htdocs\Test1\session.php';
        echo "<center><h3><p align = 'center'>WELCOME..!!" .$user_fullname."</p></h3></center>";
    ?></h1>
    <form action="sendemails.php">
           
                <h>Debit/Credit</h3>
                
        <br>
     </select>
            <div class="first-row">
                <div class="owner">
                    <h3>NAME ON CARD </h3>
                    <div class="input-field">
                        <input type="text" placeholder= "CARD NAME"required>
                    </div>
                </div>
                <div class="cvv">
                        <h3>CVV </h3>
                        <div class="input-field">
                            <input type="password" required>
            </div>
        </div>
  </div>
  <br>
  <div class="second-row">
    <div class="card-number">
        <h3>CARD NUMBER</h3>
        <div class="input-field">
            
            <input type="text" name="Name on card" placeholder="CARD NUMBER" required> 
            
        </div>
    </div>
  </div>
  <br>
  <div class="third-row">
        <h3>CARD EXPIRY</h3>
        <div class="selection">
            <div class="date">
                <select name="months" id="months" required>
 <option  value='' disabled selected>Month</option>
    <option value='Janaury'>Janaury</option>
    <option value='February'>February</option>
    <option value='March'>March</option>
    <option value='April'>April</option>
    <option value='May'>May</option>
    <option value='June'>June</option>
    <option value='July'>July</option>
    <option value='August'>August</option>
    <option value='September'>September</option>
    <option value='October'>October</option>
    <option value='November'>November</option>
    <option value='December'>December</option>
                </select>
                <select name ="years" id="years" required>
                    <option value='' disable selected>Year</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                </select>
            </div>
            <div class="cards">
                <img src="download.jpg" alt="">
                <img src="mastercard.png" alt="">
                <img src="visa.png" alt="">
                <img src="paypal.png" alt="">       
          </div>
    
    </div class= "button">
    
        <h2><a href="sendemails.php"><button name = "confirm" class = "btn">Confirm</button></a></h2>
        
       
       <h2> <a href ="index3.php">Cancel Payment</a></h2> 
</form>
   
<style>
    :root{
        --green:var(--green)
    }
    
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: cursive;
    }

    body{
        width: 100%;
        height: 90vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color:azure;
    }
    h2{
            text-align: center;
            color: #66afe9;
            padding: 2%;
     }

    .container{
        width: 1000px;
        height: 600px;
        border: 1px solid;
        background-color:rgb(236, 245, 236);
        display: flex;
        flex-direction: column;
        padding: 40px;
        justify-content: space-around;
    }

    .container h1{
        text-align: center;
    }

    .buttons{
        width: 60%;
        margin-right: 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
    }
    .first-row{
        display: flex;
    }

    .owner{
        width: 60%;
        margin-right: 40px;
    }

    .input-field{
        border: 1px solid #999;
    }

    .input-field input{
        width: 100%;
        border: none;
        outline: none;
        padding: 10px;
    }

    .selection{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .selection select{
        padding: 10px 20px;
    }

    .container .button h2,h1{
        
        color:gray;
        text-align: center;
        text-transform: uppercase;
        text-decoration: none;
        padding: 10px;
        font-size: 18px;
        transition: 0.5s;
    }

    
    .cards img{
        width: 100px;

    }
    </style>
    </body>
    </html>