<?php

function saludarNombre(){
    echo "Hola Lizeth";
}

function saludar(){
    echo "Hola...";
}

function despedir($nombre, $apellido){
    echo "Adios " . $nombre ." " .$apellido;
}

saludar();
saludarNombre();
echo "<br/>";
despedir("Lizeth ", " Gonzalez");


?>
Footer
