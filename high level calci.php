<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="high level calci.php" method="get ">
    num1: <input type="number" name="num1">
    <br>
    operation:<input type="text" name="op">
    <br>
    num2: <input type="number" name="num2">
    <input type="submit">
    <?php
    $num1=$_GET["num1"];
    $num2=$_GET["num2"];
    $op=$_GET["op"];
    if($op=="+"){
    echo $num1+$num2;
    }elseif($op=="-"){
        echo $num1-$num2;
    }elseif($op=="X"){
        echo $num1*$num2;
    }elseif($op=='/'){
    echo $num1/$num2;
    }
    else{
        echo "please enter rightly";
    }
    ?>
 </form>
</body>
</html>