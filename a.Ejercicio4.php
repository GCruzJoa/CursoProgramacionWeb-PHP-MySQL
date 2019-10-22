<html>
<head><h1>Ejercicios básicos: 4</h1>
<title>Ejercicio: 4</title>
</head>  
<body>
        <?php 
        $datos = array("Nombre"=>"Gabriel","Apellido"=>"Cruz","Edad"=>20);

        foreach($datos as $clave=>$valor){
            print "$clave: $valor <br>";
        }
        ?>
</body>
</html> 
