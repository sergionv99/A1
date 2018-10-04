<?php
//en $fichero ponemos la ruta del fichero php que queramos
$fichero = "/home/linux/www/A1/1/index.php";
//filemtime obtiene el momento de la ultima modificacion del fihcero
$fichero_mod = filemtime($fichero); 
//con echo y .date sacaremos los datos de la variable en el formato de fecha que nos indica el ejercicio
//En esta pagina estan todos los posiblers formatos de fecha http://php.net/manual/es/function.date.php
echo "Last modified " . date("l, dS F, Y, h:ia", $fichero_mod);

