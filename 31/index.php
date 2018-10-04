<?php
function email($mail)
{
    //Con Trim limpiamos los espacios en blanco del inicio y del final pra que no den problemas ala hora de la comprobacion
    // http://php.net/manual/es/function.trim.php
  $resultado = trim($mail);
      //filter_var filtra una variable segun lo que le indiques http://php.net/manual/es/function.filter-var.php      
      //FILTER_VALIDATE_EMAIL para validacion de correos http://php.net/manual/es/filter.filters.validate.php
  if (filter_var($resultado, FILTER_VALIDATE_EMAIL)) 
  {
    $resultado=" CORREO VALIDO";
  } 
  else 
  {
    $resultado=" CORREO ERRONEO";
  }
  //guardaremos los resultados de llos else/if en una variualbe y luego la devolveremos
  return $resultado;
}
$mail1="sergionuevovidaal@gmail.com";
$mail2="sergio%gamilcom";

echo $mail1.email($mail1)."<br>";
echo $mail2.email($mail2)."<br>";
