<?php
//http://php.net/manual/es/function.getlastmod.php
//con getlastmod Obtenemos la hora de la ultima modificacion de la pagina   
echo "Ultima modificación: " . date ("F d Y H:i:s.", getlastmod());