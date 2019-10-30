<h2>Array con palabras reservadas</h2>
<?php

    $palabras[1] = "break";
    $palabras[2] = "const";
    $palabras[3] = "echo";
    $palabras[4] = "declare";
    $palabras[5] = "default";
    $palabras[6] = "namespace";
    $palabras[7] = "private";
    $palabras[8] = "return";
    $palabras[9] = "use";
    $palabras[10] = "switch"; 
 
    for ($i = 1;$i<=10;$i++){
        echo "<p>" . $palabras[$i] .  "</p>";        
    }

?>