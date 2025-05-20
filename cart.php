<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <?php
include('db.php')
    ?>
</head>
<body>
   <section class="container">
    <div class="row">
        <h1>Cart</h1>
        <div col="col-12">
            <table class="table table-info table-striped">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>product title</th>
                        <th>product price</th>
                        <th>project Qty</th>
                        <th>Total</th>
                    </tr>
                </thead>

            </table>
        </div>
    </div>
   </section>
     <?php
                $query = "SELECT * FROM cart c 
                        inner join product1 p  ON p.product id = c.product tittle";
                $queryRUN = mysqli_query($con , $query);
                $grandTotal = 0;
                while($fetch = mysqli_fetch_assoc($queryRUN)){

                    ?>
                            <tr>
                                <td>1</td>
                                <td><?php echo $fetch['name'];?>
                                    <img src="images/<?php echo $fetch['image'];?>" width="50px">
                                </td>
                                <td><?php echo $fetch['price'];?></td>
                                <td><?php echo $fetch['qty'];?></td>
                                <td><?php echo $fetch['qty']* $fetch['price'];?></td>
                            </tr>
                        
                    <?php
                      $grandTotal += $fetch['qty'] * $fetch['price'];
                    
                }
                
                ?>
</body>
</html>