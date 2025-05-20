<?php
$con =  mysqli_connect("localhost" , 'root', '','assignment');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add to cart</title>
     <link rel="stylesheet" href="style.css" class="css"> 
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <center><h1 class="heading">shopify products</h1></center>
    <div class="container mt-5">
      <div class="row">
        <div class="col-4">
            <?php
        $select = "select * from products";
        $result =$con->query($select);
        if($result->$countrow > 0)
        {
            while($row =$result->fetch_assco()){
                 $id = ['id'];
                  $product_name = ['product_name'];
                 $Qty = ['Qty'];
                $product_price = ['product_price'];
                $images = ['images'];
            }
        }
    ?>
    </div>
      </div>
      </div>
 <div class="card">
  <img src="images/<?php echo $fetch['image'];?>" width="50px">
  <div class="card-body">
    <p><?php  echo $fetch['id'];?></p>
    <p><?php  echo $fetch['product_name'];?></p>
    <p><?php  echo $fetch['Qty  '];?></p>
    <p><?php  echo $fetch['product_price'];?></p>
  

    <a href="cart.php" class="btn btn-primary">Add To Cart</a>
      </div> -->


</div>
 </body>
</html>