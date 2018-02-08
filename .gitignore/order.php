<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Podsumowanie zamówienia</title>
</head>

<body>

<?php 
	 
	$paczkow = $_POST['paczkow'];
	$grzebieni = $_POST['grzebieni'];	
	$suma = 0.99 * $paczkow + 1.29 * $grzebieni;
	
echo<<<END

	<h2>Podsumowanie zamówienia</h2>
	
	<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<td>Pączek (0.99PLN/szt)</td> <td>$paczkow</td>
	</tr>
	<tr>
		<td>Grzebień (1.29PLN/szt)</td> <td>$grzebieni</td>
	</tr>
	<tr>
		<td>SUMA</td> <td>$suma PLN</td>
	</tr>	
	</table>
	<br /><a href="index.php">Powrót do strony głównej</a>

END;
//7.16
$ksazki=array("Dżuma","Potop","Obcy")
echo<<<END
$ksiazki[0].'<br/ >';
$ksiazki[1].'<br/ >';
$ksiazki[2].'<br/ >';
END;

//7.17

$im[0]="Jan";
$im[1]="Paweł";
$im[2]="Michał";
echo<<<END
$im[2]="Michał";
END;
//7.18
$tab[]=1;
$tab[]=2;
$tab[]=3;
echo "<br />$tab[2]";

// tablice asocjacyjne 7.19

$osoba = array("nazwisko"=>"Kowalski","imie"=>"Jan","wiek"=>"27");
echo "<br/ > podana osoba to:".$osoba["nazwisko"]." ".$osoba["imie"]."wiek: ".$osoba["wiek"]."lat <br/ >" ;

//7.20 to samo inaczej
$osoba["nazwisko"]="nowak";
$osoba["imie"]="piotr";
$osoba["wiek"]=34;
echo "<br/ > podana 2 osoba to:".$osoba["nazwisko"]." ".$osoba["imie"]."wiek:".$osoba["wiek"]."lat <br/ >" ;

// 7.21 tablice 2 wymiarowe tablica tablic

$dane=array(
array("nazwisko"=>"Kowalski","imie"=>"Jan","wiek"=>"27"),
array("nazwisko"=>"Nowak","imie"=>"Paweł","wiek"=>"21"),
array("nazwisko"=>"Górka","imie"=>"Tomasz","wiek"=>"29")

echo"<br/ >dane 2 osoby  z listy:".$dane[1]["nazwisko"]." ".$dane[1]["imie"]."wiek ".dane[1]["wiek"]."<br/ >";

);


?>


</body>
</html>