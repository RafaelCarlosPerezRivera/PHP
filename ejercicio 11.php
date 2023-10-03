<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	 <?php
        //ejercicio 11
        define('tama',10); 
echo "<table border=1>"; 
$n=1;
for ($n1=1; $n1<=tama; $n1++)
{
 if ($n1 % 2 == 0){
 echo "<tr>";}
 else{
 echo "<tr>"; }
 for ($n2=1; $n2<=tama; $n2++)
 {
 echo "<td>", $n, "</td>"; 
 $n=$n+1; 
 }
 echo "</tr>"; 
}
echo "</table>"; 
        ?> 
</body>
</html>