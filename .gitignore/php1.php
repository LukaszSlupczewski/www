<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Obliczenia</title>
</head>

<body>
<?php

/* $x = $_POST['x'];
    $y = $_POST['y'];
  $z=$x+$y;

 if($Z<0)
 echo "wartość żmiennej jest ujemna ";
 elseif ($z<10)
 echo "wartość zmiennej zawarta jest w zakresie 0-10";
 elseif ($z<20)
 echo "wartość zmiennej zawarta jest w zakresie 10-20";
 elseif ($z<30)
 echo "wartość zmiennej zawarta jest w zakresie 20-30";
 else
 echo "wartość zmiennej zawarta jest większ od 30 ";
*/

$kolor = $_POST['kolor'];
switch ($kolor)
{
     case "red":
     echo "dominującym kolorem jest czerwony";
     break;
     case "blue";
     echo "dominującym kolorem jest niebieski";
     break;
     case "green";
     echo "dominującym kolorem jest zielony";
     break;
     default:
     echo "brak dominującego koloru";



}



?>
</body>
</html>