<?php
include 'session2.php';
include 'connection3.php';
?>
<html>
    <head>
        <link href = styleaction.css rel = 'stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
    <body>
    <div id = top>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <h2>  Online food order System<h2>
            <a href=background.php><button id = logout ><h4>Logout</h4></button></a>
</nav>
</div>
 </div>
   
<div>
   
<div class="container mt-4">
<div class="row">
<div class="col-lg-9">
<table class="table  text-center table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">ITEM NAME</th>
      <th scope="col">IMAGE</th>
      <th scope="col">COST</th>
      <th scope="col">EDIT</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
<?php
$result = mysqli_query($conn,"select * from product order by id asc");
while($row1=mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>"; echo $row1['id']; echo "</td>";
    echo "<td>"; echo $row1["pname"]; echo "</td>";
    echo "<td>"; echo $row1["pimage"]; echo "</td>";
    echo "<td>"; echo $row1["price"]; echo "</td>";
    
    echo "<td>";?>
    <a href = "edit.php?id=<?php echo $row1['id']; ?>" ><button id = edit>Edit</button></a>
    <?php  echo "</td>";
    echo "<td>";
    ?>
    <a href = "delete.php?id=<?php echo $row1['id']; ?>"><button id = delete>Delete</button></a>
    <?php echo "</td>";
    echo "</tr>";
}
?>
</table>
</div>
<div class="container mt-5">
<div class="row">
<div class="col-lg-12">
<table class="table  text-center table-striped">
  <thead>
<div id = for>
<p id = name ><h3>Add AN FOOD ITEM</h3></p><br>
            <form action = " " method = "POST">

                <div>
                    <label><h5>Add Item</h5></label>
                    <input type = 'text' name = id placeholder="Add Id">
                </div><br>
                <div>
                    <label><h5>Add Item Name</h5></label>
                    <input type = 'text' name = pname placeholder="Add Item_Name">
                </div><br>
                <div>
                    <label><h5>Add Image</h5></label>
                    <input type = 'text' name = pimage placeholder="Add IMAGE">
                </div><br>
                <div>
                    <label><h5>Add Price</h5></label>
                    <input type = 'text' name = price placeholder="Add Price">
                </div><br>
                <div>
                    <input id = add type = 'submit' name = submit value = 'AddFoodItem'>
                </div>
                </theads>
                </table>
                </div>
                </div>
                </div>
</form>
</div><br><br><br>
<?php 
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $pname = $_POST['pname'];
    $pimage = $_POST['pimage'];
    $price = $_POST['price'];
    $conn = new mysqli('localhost','root','','testing');
    $stm = $conn->prepare("INSERT INTO product(id, pname, pimage, price) VALUES (?,?,?,?)");
    $stm->bind_param("issi",$id,$pname,$pimage,$price);
    $stm->execute();
    $stm->close();
    $conn->close();
?>
<script type = 'text/javascript'>
alert("food item added successfully");
window.location.href = window.location.href;
</script>
<?php
}
?>

<style>
body{
    background-image:url("food3.jpg");
    height:100%;
    background-position:center;
    background-repeat:no-repeat;
    background-size:cover;
}
</style>

</body>
</html>