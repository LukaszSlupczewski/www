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
  $x = $_POST['x'];
  $wynik= $x<0 ? "ujemna" : "dodatnia";
  echo " wartośc zmiennej x  jest $wynik. ";



   ?>

</body>
</html>