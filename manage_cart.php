<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['ADD_TO_CART']))
    {
        if(isset($_SESSION['Cart']))
        {
            $myitems = array_column($_SESSION['Cart'],'Item_Name');
            if(in_array($_POST['Item_Name'],$myitems))
            {
                echo "<script>alert('Item Already Added');
                 window.location.href='index3.php';
                </script>";

            }
             else{
                $count = count($_SESSION['Cart']);
                $_SESSION['Cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'COST'=>$_POST['COST'],'Quantity'=>1);
                echo "<script>alert('Item Added');
                window.location.href='index3.php';
                </script>";
             }
                
        }
        else{
            $_SESSION['Cart'][0] = array('Item_Name'=>$_POST['Item_Name'],'COST'=>$_POST['COST'],'Quantity'=>1);
            echo "<script>alert('Item Added');
                window.location.href='index3.php';
                </script>";
        }
    }
    if(isset($_POST['Remove_Item']))
    {
        foreach($_SESSION['Cart'] as $key=> $value)
        {
           if ($value['Item_Name'] == $_POST['Item_Name'])
           {
              
                unset($_SESSION['Cart'][$key]); 
                $_SESSION['Cart']=array_values($_SESSION['Cart']);
            
                echo "<script>alert('Item Removed');
                    window.location.href='mycart.php';
                    </script>";
           }
        }
    }
    if(isset($_POST['Mod_Quantity']))
    {
        foreach($_SESSION['Cart'] as $key=> $value)
        {
           if ($value['Item_Name'] == $_POST['Item_Name'])
           {
               $_SESSION['Cart'][$key]['Quantity'] = $_POST['Mod_Quantity'];
               
               echo "<script>
                    window.location.href='mycart.php';
                    </script>";
           
               
           }
        }
    }
    
}

?>