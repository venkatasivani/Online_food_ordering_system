<?php 
include 'connection3.php';
include 'session2.php';
$id = $_GET['id'];
$res = mysqli_query($conn,"select * from product where id = $id");
while($row=mysqli_fetch_array($res)){
    $pname = $row['pname'];
    $pimage = $row['pimage'];
    $price = $row['price'];
}
?>
<html>
    <head>
        <link href = styleedit.css rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div id = top>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <h2>  Online food order System<h2>
            <a href=admin_logout.php><button id = logout ><h4>Logout</h4></button></a>
</nav>
</div>
 </div>
    <div id = food >
    <div class="container mt-5">
    <div class="row">
    <div class="col-lg-12">
    <table class="table  text-center table-dark">
            <h5>FOOD ITEM NAME : <?php echo $pname ?></h5><br>
            <h5>FOOD ITEM IMAGE : <?php echo $pimage ?></h5><br>
            <h5>FOOD ITEM PRICE : <?php echo $price ?></h5>
    </table>
    </div>
    </div>
    </div>
    </div>
<div class="container mt-5">
<div class="row">
<div class="col-lg-12">
<table class="table  text-center table-striped">
  <thead>
        <div id = edit>
            <p id = up ><h3>Update Food Item</h3></p><br>
            <form action = " " method = "POST">
                <div>
                    <label><h5>Update Item Name</h5></label>
                    <input type = 'text' name = pname placeholder="Add Item_Name"  >
                </div><br>
                <div>
                    <label><h5>Update Image</h5></label>
                    <input type = 'text' name = pimage placeholder="Add Image"  >
                </div><br>
                <div>
                    <label><h5>Update Price</h5></label>
                    <input type = 'text' name = price placeholder="Add Price"  >
                </div>
                <br>
                
                <div>
                    <input id = updat type = 'submit' name = submit value = 'Update'>
                </div>
        </form>
        </thead>
        </table>
</div>
</div>
</div>
<div>

<?php 
if(isset($_POST['submit'])){
    $pname1 = $_POST['pname'];
    $pimage = $_POST['pimage'];
    $price = $_POST['price'];
   
    mysqli_query($conn," UPDATE `product` SET `pname`='$pname1',`pimage`='$pimage',`price`='$price' WHERE  id = $id");
  

?>
<script type = 'text/javascript'>
alert("Updated successfully");
window.location = "admin_action.php";
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