<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
        //ejercicio 6
        $a= random_int(10, 100);
        $b= random_int(10, 100);
        $c= random_int(10, 100);
        if ($a > $b && $a > $c){
            echo "El mayor de los numeros es a $a";
        }elseif ($b > $a && $b > $c){
            echo "El mayor de los numeros es b $b";
        }elseif ($c > $a && $c > $b){
            echo "El mayor de los numeros es c $c";
        }
        ?>
</body>
</html>