<html>
<head><h1>Ejercicios básicos: 1</h1>  
<title>Ejercicio 1</title>
</head>

<body>
    <?php
        $x = 144; $y = 999; $suma = $x+$y; $resta = $x-$y; $division = $x/$y; $producto = $x*$y;
        
        print "<p>i.	Escribe un programa que utilice las variables 'x' y 'y'. Asígnales los valores 144 y 999 respectivamente. A continuación, muestra por pantalla el valor de cada variable, la suma, la resta, la división y la multiplicación.</p>";
        print "<p>El valor de x es: " . $x . "</p>\n";
        print "<p>El valor de y es: " . $y . "</p>\n";
        print "<p>La suma de las variables es: " . $suma . "</p>\n";
        print "<p>La resta de las variables es: " . $resta . "</p>\n";
        print "<p>El producto de las variables es: " . $producto . "</p>\n";
        print "<p>La division de las variables es: " . $division . "</p>\n";
    ?>
</body>
</html>