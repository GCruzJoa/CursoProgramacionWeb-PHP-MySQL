<html>
<head><h1>Funciones predefinidas: Ejercicio 2</h1>
<title>Funciones predefinidas: Ejercicio 2</title>
</head>
<body>
    <?php
    print "<p>ii.	Un script que muestre la url actual. </p>\n";
    $host= $_SERVER["HTTP_HOST"];
    $url= $_SERVER["REQUEST_URI"];
    print "http://" . $host . $url;
    ?>
</body>
</html>
