<?php
session_start();
$conn = mysqli_connect("localhost","root","","testing");
if(mysqli_connect_error()){
    echo "<script>alert('Item Removed');
    window.location.href='mycart.php';
    </script>";
    exit();
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
if(isset($_POST['purchase'])){
    $query1 = "INSERT INTO `order_manager`( `Full_Name`, `Phone_No`, `Address`) VALUES ('$_POST[fullname]','$_POST[phone_number]','$_POST[address]')";
     if(mysqli_query($conn,$query1))
     {
         $Order_Id = mysqli_insert_id($conn);
          $query2=  "INSERT INTO `order_orders`(`Order_Id`, `Item_Name`, `COST`, `Quantity`) VALUES (?,?,?,?)";
          $stmt= mysqli_prepare($conn,$query2);
          if($stmt){
                mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$Item_Name,$COST,$Quantity);
                foreach($_SESSION['Cart'] as $key => $values)
                {
                    $Item_Name = $values['Item_Name'];
                    $COST = $values['COST'];
                    $Quantity = $values['Quantity'];
                    mysqli_stmt_execute($stmt);
                }
                   unset($_SESSION['Cart']);
                    echo "<script>alert('Order Placed');
                    window.location.href='mycart.php';
                    </script>";

          }
          else{
            echo "<script>alert('SQL Error');
            window.location.href='mycart.php';
            </script>";
         }
     }
     else{
        echo "<script>alert('SQL Error');
        window.location.href='mycart.php';
        </script>";
     }
}
}
?>