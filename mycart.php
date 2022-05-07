<?php include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    
</head>
<body>
  
    <div class = "container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>
        <div class="col-lg-8">
            <table class = "table">
                <tr>
                    <th scope="col">Serail NO.</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Item Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col">#</th>
                </tr>
                </thead class = "text-center"></thead>
                <tbody class ="text-center">
                    <?php
                      
                        if(isset($_SESSION['Cart']))
                        {
                            foreach($_SESSION['Cart'] as $key => $value)
                            { 
                                $sr =$key+1;
                                 
                                    echo "<tr>
                                    <td>$sr</td>
                                    <td>$value[Item_Name]</td>
                                    <td>$value[COST]<input type='hidden' class='icost' value = '$value[COST]'></td>
                                    <td><form action='manage_cart.php' method ='POST'>
                                        <input class ='text-center iquantity' name ='Mod_Quantity' onchange ='this.form.submit();'  type='number' value ='$value[Quantity]' min ='1'  max = '10'></td>
                                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                        </form>
                                    <td class = 'itotal'> </td>
                                    <td>
                                        <form action='manage_cart.php' method ='POST'>
                                            <button name='Remove_Item' class ='btn btn-sm btn-outline-danger'>REMOVE</button>
                                            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                        </form>
                                    </td>
                                    </tr>";
                            }
                        }
                    
                  ?>
            </tbody>
         </table>
    </div>


        <div class ="col-lg-3">
        <div class ="border bg-light rounded p-4">
            <h4>GRAND TOTAL :</h4>
            <h5 class = "text-right" id="gtotal"> </h5><br>
            <?php if(isset($_SESSION['Cart']) && count($_SESSION['Cart'])>0)
            {
            
            ?>
            <form action='purchase.php' method='POST'>
            <div class ='form-group'>
                        <label>Full Name</label>
                        <input type="text" name ='fullname' class="form-control" required>
             </div>
             <div class ='form-group'>
                        <label>Phone Number</label>
                        <input type="number" name ='phone_number'class="form-control" required>
             </div>
             <div class ='form-group'>
                        <label>Address</label>
                        <input type="text" name = 'address' class="form-control"required>
             </div><br>
            <button class="btn btn-primary btn-block" name='purchase'>Confirm_Oder</button>
            </form>
            <?php
            }
            ?>
        </div>
        </div>

</div>
</div>

<script>
  var gt=0;
  var icost=document.getElementsByClassName('icost');
  var iquantity=document.getElementsByClassName('iquantity');
  var itotal=document.getElementsByClassName('itotal');
  var gtotal=document.getElementById('gtotal');


  function subTotal()
  {
      gt =0;
      for(i=0;i<icost.length;i++)
      {
          itotal[i].innerText= (icost[i].value)*(iquantity[i].value);
          gt = gt + (icost[i].value)*(iquantity[i].value);
      }
      gtotal.innerText = gt;
  }

subTotal();

</script>

</body>
</html>