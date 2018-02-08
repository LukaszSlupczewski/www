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
<body bgcolor="#dfdfdf">
<?php
$tab = array
(
Jpolski =>'3',
Matematyka =>'5',
Fizyka =>'2',
Religia =>'6'

);
foreach($tab as $kl=>$x)
{

     echo "$kl= $x<br /><br /> ";
} ;
$tx=true;
if ($tx) {
?>
<table allign="left" border="1" width="400" hspase="40" vspace="20" cell-spacing="4">
<tr><td>przedmiot</td><td>ocena</td></tr>
<tr><td>  </td><td></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<?php } ?>

</table>

</body>
</html>