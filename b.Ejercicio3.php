<html>
<head><h1>Funciones predefinidas: Ejercicio 3</h1>
<title>Funciones predefinidas: Ejercicio 3</title>
</head>

<body>
    <?php
    //ip del cliente
    print "<p>La ip del cliente es: " . getHostByName(php_uname('n')) . "</p>\n";
    //ip de servidor
    $ip_server = $_SERVER['SERVER_ADDR']; 
    print "<p> La ip del servidor es: $ip_server </p>\n"; 
    //Nombre del fichero que se está ejecutando.
    print "<p> Nombre del fichero en ejecución: " . basename($_SERVER['PHP_SELF']) .  "</p>"; 
    ?>
</body>
</html>