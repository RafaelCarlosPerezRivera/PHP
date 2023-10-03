<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
        //ejercicio 9
        
            $hora=date("H");
            if ($hora > 8 && $hora < 13){
                echo "buenos dias";
            }elseif ($hora > 13 && $hora < 15) {
                echo "que aproveche";
            }elseif($hora > 15 && $hora < 17){
                echo "Hora del cafe";
            }elseif($hora > 17 && $hora < 20){
                echo "Hora de la merienda";
            }
        ?>
</body>
</html>