<!doctype html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="description" content="[ #DESCRIPTION# ]">
  <meta name="keywords" content="[ #KEYWORDS# ]">
  <meta name="author" content="[ #AUTHOR# ]">
  <meta name="generator" content="CoreEditor">
  <title>[ #TITLE# ]</title>
</head>
<body>

  <?php

  //$x = $_POST['x'];
  //pętla for
  /*for ($i =1 ; $i<=$x; $i++)
  {
  echo "Pętla wykonała się $i raz/y <br /><br />";
  }*/
  //pętla while
  /*
  $i=0;

  while($i++<$x)
  {
       echo ("Pętla wykonała się $i-1 razy <br /><br />");
  }
*/
//do ... while
/* $i=1;
   do
   {
           echo ("Pętla wykonała się $i razy <br /><br />");
   }
       while($i++<$x);
*/

//petla foreach
$tab = array
(
J.polski=>'3',
Matematyka=>'5',
Fizyka=>'2',
Religia=>'6'

);
foreach($tab as $kl=>$x)
{

     echo "$kl= $x<br /><br /> ";
} ;

//instrukcja breake
/*$i=0;
while(true)
{
     echo ("wypisz $i <br />");
     if ($i>=20)break;
     $i++;

}
*/
//instr continue
/*for ($i=30;$i>=0;$i--)
{
     if(($i%3)!=0)
     continue;
     echo "$i <br />";

}




   ?>

</body>
</html>