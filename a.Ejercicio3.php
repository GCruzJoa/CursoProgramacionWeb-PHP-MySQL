<html>
<head><h1>Ejercicios básicos: 3</h1>
<title>Ejercicio: 3</title>
</head>

<body>
    <?php

    print "<p>iii.	Realiza un conversor de monedas. La cantidad en pesetas que se quiere convertir y la tasa de cambio deberán estar almacenada en variables. Este deberá de realizarlo una función, es decir, la función recibirá las variables necesarias para realizar el cambio. </p>\n";
    
    function convertirADolar($cantidadCambio){
        $valor = $cantidadCambio * 0.019;
        print "<p>$cantidadCambio pesos equivale a: " . $valor . " dólares. </p>\n";
    }
    convertirADolar(50000);

    function convertirAPeso($cantidadCambio){
        $valor = $cantidadCambio / 0.019;
        print "<p>$cantidadCambio dólares equivale a: " . $valor . " pesos dominicanos. </p>\n";
    }
    convertirAPeso(950);
    ?>
</body>
</html>