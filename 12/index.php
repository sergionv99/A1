<?php

//http://php.net/manual/es/function.file.php
//la funcion file transferira un fichero a un array
//El fichero en este caso o sacaremos de http://www.example.com/

$líneas = file('http://www.example.com/');
// Con for each hacemos un bucle que recorre el array y va printando linea a linea el codigo fuente de http://www.example.com/
foreach ($líneas as $num_línea => $línea) {
    echo "Linea: <b>{$num_línea}</b> : " . htmlspecialchars($línea) . "<br/>";
}