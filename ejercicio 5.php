<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
        // ejercicio 5
        $y=random_int(0, 100);
        switch ($y){
            case ($y>10 && $y<10):
                echo "esta en diez";
                break;
            case ($y>20 && $y<20):
                echo "esta en 20";
                break;
            case ($y>30 && $y<30):
                echo "Esta en treinta";
                break;
            case ($y>80 && $y<80):
                echo "Esta en 80";
                break;
            case ($y>90 && $y>100):
                echo "Esta en 100";
        }
        ?>
</body>
</html>