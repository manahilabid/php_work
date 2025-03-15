<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch case </title>
</head>
<body>
    <?php

    echo "<h1>switch case</h1>";
    $num1 =9;
    $num2 =0;
    $opt = "/";
    switch($opt){

    case '+':
    echo "addition:".$num1+$num2;
    break;

    case "-":
    echo"subtraction:".$num1-$num2;
    break;

    case "*":
    echo"multiplition:".$num1*$num2;
    break;

    case "/":
    
    if($num2==0){
        echo "the number can not be divided";}
        else{
            echo"division:".$num1/$num2;
        }

    
    break;
    default:
    echo "the operator is invalid";
    }
    ?>
</body>
</html>