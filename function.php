<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions</title>
</head>
<body>
    <?php
    echo "<h3>functions</h3>";
    function fun(){
        echo "hello world";
    }
    fun();
    echo "<br>";
    function add($sum1,$sum2){
echo $sum1+$sum2;
    }
    add(12 ,43);
    add(54,23);
    add(12,32);
    echo "<br>";
    function data($name , $email , $age , $class){
        echo "name :".$name."<br>
             email :".$email."<br>
             age :".$age."<br>
             class :" .$class;

    }
    ?>
    <p><?php data("alen","alen@gamil.com",18,"m.a")  ?></p>
    <p><?php data("manahil","manahil@gamil.com",17,"m.a")  ?></p>
    <p><?php data("sybil","sybil@gamil.com",17,"mbbs")  ?></p>
    <p><?php data("christoper","christoper@gamil.com",18,"b.a")  ?></p>
    <p><?php data("eden","eden@gamil.com",16,"bscs")  ?></p>
    <p><?php data("shameer","shameer@gamil.com",18,"bsit")  ?></p>
    
</body>
</html>