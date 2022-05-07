
<?php include("header.php");
include('connection3.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU CART</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h3{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
     
        
    </style>
</head>
<body>
    <div class = "container mt-5">
        <div class ="row">
        <div class="container" style="width: 100%">
    <?php
       
            $sql = "SELECT * FROM product ORDER BY id ASC ";
            $result = mysqli_query($conn,$sql); 
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-lg-3">
                   <form  method="POST" action="manage_cart.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="product">
                            <img src="<?php echo $row["pimage"]; ?>" class="img-responsive">
                                <h5 class="text-info"><?php echo $row["pname"]; ?></h5>
                                <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
                                <input type="hidden" name="Item_Name" value="<?php echo $row["pname"]; ?>">
                              
                                <input type="hidden" name="COST" value= "<?php echo $row["price"]; ?>">
                                <button type="submit"  name = "ADD_TO_CART" class="btn btn-info" value="ADD_TO_CART">ADD TO CART</a></button>
                                  
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>
            
    </div>    
</div>


</body>
</html>