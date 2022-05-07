<?php
include 'connection3.php';
include 'session2.php';
$id = $_GET['id'];
$sql = "select * from product order by id asc";  
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result);  
$count = mysqli_num_rows($result);  
if($count!=0){
    $loop = 0;
    while($row = mysqli_fetch_array($result)){
        if($row['id']==$id){
        mysqli_query($conn,"delete from product where id = $id");
        }
        else{
        $loop = $loop+1;
        mysqli_query($conn,"update product set id = $loop where id = $row[id]");
        }
   }
   $bool=1;
   $loop = $loop + 1;
   mysqli_query($conn,"update product set id = $loop where id = $count");
   if($bool==1){
    ?>
<script type = 'text/javascript'>
alert("deleted succesfully");
window.location = "admin_action.php";
</script>
<?php } ?>
<?php }?>
